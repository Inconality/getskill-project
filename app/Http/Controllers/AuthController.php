<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function showLogin()
    {
        return view('login'); 
    }

    // Memproses data login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cek apakah email dan password benar
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Berhasil login, lempar ke halaman admin/dashboard
            return redirect()->intended('/admin/dashboard');
        }

        // Jika salah, kembali ke login dengan pesan error
        return back()->with('error', 'Email atau password salah!');
    }

    // Memproses logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Setelah logout, balikkan ke halaman login
        return redirect('/login');
    }
}