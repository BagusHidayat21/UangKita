<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Show registration form.
     */
    public function index()
    {
        return view('user.register');
    }

    /**
     * Handle user registration.
     */
    public function register(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|unique:users,email',
            'username' => 'required|string|max:50|unique:users,username',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'email' => $validated['email'],
            'username' => $validated['username'],
            'password' => Hash::make($validated['password']),
        ]);

        // Auto login newly registered user (Laravel Best Practice)
        Auth::login($user);
        $request->session()->regenerate();

        return redirect('/homepage')->with('success', 'Akun berhasil dibuat! Selamat datang di UangKita.');
    }

    /**
     * Show login form.
     */
    public function loginForm()
    {
        return view('user.login');
    }

    /**
     * Handle user login authentication.
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            // Prevent Session Fixation Attack (Laravel Best Practice)
            $request->session()->regenerate();
            return redirect()->intended('/homepage');
        }

        return back()->with('error', 'Username atau password yang Anda masukkan salah.')->withInput($request->only('username'));
    }

    /**
     * Handle user logout.
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Anda telah berhasil keluar.');
    }
}
