<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Goal;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    /**
     * Get the authenticated User model with IDE typehinting.
     *
     * @return User
     */
    private function user(): User
    {
        /** @var User $user */
        $user = Auth::user();
        return $user;
    }

    /**
     * Display the goals dashboard for the authenticated user.
     */
    public function show()
    {
        $goals = $this->user()->goals()->latest()->get();
        $totaljumlah = $goals->sum('target');

        return view('homepage', [
            'goals' => $goals,
            'totaljumlah' => $totaljumlah,
        ]);
    }

    /**
     * Store a newly created goal for the authenticated user.
     */
    public function store(Request $request)
    {
        // Clean currency input string (e.g. "Rp 1.000.000" -> 1000000)
        $jumlahRaw = preg_replace('/[^\d]/', '', $request->input('jumlah'));
        $targetRaw = preg_replace('/[^\d]/', '', $request->input('target'));

        $request->merge([
            'jumlah' => $jumlahRaw !== '' ? (int)$jumlahRaw : 0,
            'target' => $targetRaw !== '' ? (int)$targetRaw : 0,
        ]);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'jumlah' => 'required|numeric|min:0',
            'target' => 'required|numeric|min:1',
            'kategori' => 'required|string|max:50',
            'catatan' => 'required|string|max:1000',
        ]);

        $this->user()->goals()->create([
            'name' => $validatedData['name'],
            'jumlah' => $validatedData['jumlah'],
            'target' => $validatedData['target'],
            'kategori' => $validatedData['kategori'],
            'catatan' => $validatedData['catatan'],
        ]);

        return back()->with('success', 'Goal baru berhasil ditambahkan!');
    }

    /**
     * Show the edit page for a specific goal (Scoped to authenticated user).
     *
     * @param int|string $id
     */
    public function edit(int|string $id)
    {
        // Enforce User Scoping to prevent IDOR vulnerability
        $goal = $this->user()->goals()->findOrFail($id);

        return view('edit', compact('goal', 'id'));
    }

    /**
     * Update the goal balance (Scoped to authenticated user).
     *
     * @param Request $request
     * @param int|string $id
     */
    public function update(Request $request, int|string $id)
    {
        // Enforce User Scoping to prevent IDOR vulnerability
        $goal = $this->user()->goals()->findOrFail($id);

        // Clean currency input string (e.g. "Rp 100.000" -> 100000)
        $additionalAmountRaw = preg_replace('/[^\d]/', '', $request->input('additional_amount'));
        $request->merge([
            'additional_amount' => $additionalAmountRaw !== '' ? (int)$additionalAmountRaw : 0,
        ]);

        $request->validate([
            'additional_amount' => 'required|numeric|min:1',
        ]);

        $goal->jumlah += $request->input('additional_amount');
        $goal->save();

        return redirect('/homepage')->with('success', 'Saldo goal ' . $goal->name . ' berhasil ditambahkan!');
    }

    /**
     * Remove the specified goal (Scoped to authenticated user).
     *
     * @param int|string $id
     */
    public function destroy(int|string $id)
    {
        // Enforce User Scoping to prevent IDOR vulnerability
        $goal = $this->user()->goals()->findOrFail($id);
        $goal->delete();

        return redirect('/homepage')->with('success', 'Goal ' . $goal->name . ' berhasil dihapus.');
    }
}
