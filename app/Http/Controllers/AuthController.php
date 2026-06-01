<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function showLogin()
    {
        // PERBAIKAN: Sesuaikan dengan letak file kamu di folder admin.login
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
            // Regenerasikan session untuk menghindari session fixation/expired
            $request->session()->regenerate();

            // PERBAIKAN: Berhasil login, lempar langsung ke halaman produk kamu
            return redirect()->intended('/produk');
        }

        // Jika salah, kembali ke login dengan pesan error
        return back()->with('error', 'Email atau password salah!')->withInput($request->only('email'));
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