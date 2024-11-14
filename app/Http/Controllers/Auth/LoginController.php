<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi inputan
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6'],
        ]);

        // Cek kredensial pengguna
        if (Auth::attempt($credentials)) {
            // Jika login berhasil, redirect ke halaman home
            return redirect()->intended(route('home'));
        }

        // Jika gagal, kembalikan ke halaman login dengan pesan error
        return back()->withErrors([
            'email' => 'The provided credentials are incorrect.',
        ]);
    }

    // Logout
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
