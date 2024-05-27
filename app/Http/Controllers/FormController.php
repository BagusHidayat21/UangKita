<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Goal;
use Illuminate\Support\Facades\Auth;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('homepage');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('homepage');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        // dd($request->all());
        $validatedData = $request->validate([
            'name' => 'required',
            'jumlah' => 'required',
            'target' => 'required',
            'kategori' => 'required',
            'catatan' => 'required'
        ]);

        $user = auth()->user();

        Goal::create([
            'user_id' => $user->id,
            'name' => $validatedData['name'],
            'jumlah' => $validatedData['jumlah'],
            'target' => $validatedData['target'],
            'kategori' => $validatedData['kategori'],
            'catatan' => $validatedData['catatan']

        ]);

        return back()->with('success');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        if (auth()->check()) {
            $user = auth()->user();
            $goals = $user->goals()->get();
            $totaljumlah = $goals->sum('target');
            return view('homepage', ['goals' => $goals, 'totaljumlah' => $totaljumlah]);
        } else {
            return redirect('/login');
    }
    }
    /**
     * Show the form for editing the specified resource.
     */


    public function edit($id)
    {
        $goal = Goal::findOrFail($id);
        return view("edit", compact('goal', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'additional_amount' => 'required|numeric|min:0', // Validasi bahwa additional_amount harus diisi, berupa angka, dan minimal 0
        ]);

        $goal = Goal::findOrFail($id);

        // Menambahkan jumlah tambahan saldo ke saldo yang sudah ada
        $goal->jumlah += $request->input('additional_amount');

        // Simpan perubahan
        $goal->save();

        return redirect('/homepage');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $goal = Goal::findOrFail($id);
        $goal->delete();

        return redirect('/homepage')->with('success', 'Goal berhasil dihapus');
    }


}
