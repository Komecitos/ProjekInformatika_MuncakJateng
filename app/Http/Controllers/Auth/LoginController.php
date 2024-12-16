<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

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
        Log::info('Proses login dimulai.', ['data' => $request->except('password')]);

        // Validasi inputan
        $validator = Validator::make($request->all(), [
            'login' => 'required|string',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            Log::warning('Validasi input login gagal.', ['errors' => $validator->errors()]);
            return back()->withErrors($validator)->withInput();
        }

        // Menentukan apakah input login adalah email atau nama
        $loginField = filter_var($request->login, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';

        Log::info('Field login terdeteksi.', ['login_field' => $loginField]);

        // Coba login
        if (Auth::attempt([$loginField => $request->login, 'password' => $request->password])) {
            Log::info('Login berhasil.', ['user_id' => Auth::id()]);
            return redirect()->intended('/home');
        }

        Log::error('Login gagal.', ['login' => $request->login]);

        return back()->withErrors([
            'login' => 'Email atau password salah',
        ])->withInput();
    }

    // Logout
    public function logout(Request $request)
    {
        Log::info('Logout dilakukan oleh user.', ['user_id' => Auth::id()]);
        Auth::logout();
        return redirect('/');
    }
}
