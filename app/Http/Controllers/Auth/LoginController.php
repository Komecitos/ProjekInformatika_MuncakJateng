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
        $request->validate([
            'login' => 'required|string', // Kolom untuk login (email atau name)
            'password' => 'required|string|min:8',   // Validasi untuk password
        ]);

        // Memeriksa apakah inputan login adalah email atau nama
        $loginField = filter_var($request->login, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';

        // Coba login dengan email atau name
        if (Auth::attempt([$loginField => $request->login, 'password' => $request->password])) {
            return redirect()->intended('/home');  // Arahkan ke halaman home setelah login berhasil
        }

        // Jika login gagal
        return back()->withErrors([
            'login' => 'The provided credentials are incorrect.',
        ]);
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
