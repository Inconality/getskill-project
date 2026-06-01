<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| 1. HALAMAN UTAMA & PEMESANAN (USER / PEMBELI)
|--------------------------------------------------------------------------
*/
// Menampilkan halaman Beranda (Selamat Datang) lewat welcome.blade.php
Route::get('/', [UserController::class, 'beranda'])->name('user.beranda');

// Menampilkan form pesan sesuai ID produk
Route::get('/pesan/{id}', [UserController::class, 'formPesan'])->name('user.pesan.form');

// Memproses data formulir pesanan yang dikirim pembeli
Route::post('/pesan/{id}', [UserController::class, 'prosesPesan'])->name('user.pesan.proses');


/*
|--------------------------------------------------------------------------
| 2. HALAMAN AUTENTIKASI (LOGIN / LOGOUT)
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);


/*
|--------------------------------------------------------------------------
| 3. HALAMAN DASHBOARD & CRUD (KHUSUS ADMIN - WAJIB LOGIN)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {

    // Dashboard Utama Admin
    Route::get('/admin/dashboard', function () {
        return view('admin.pages.home.index');
    })->name('admin.dashboard');

    // Otomatis mengurus CRUD Produk Admin
    Route::resource('produk', ProductController::class);

    // Menu Tambahan Admin
    Route::get('/pelanggan', function () {
        return view('admin.pages.home.index'); 
    })->name('pelanggan.index');

    Route::get('/pesanan', function () {
        return view('admin.pages.home.index'); 
    })->name('pesanan.index');

    Route::get('/pembayaran', function () {
        return view('admin.pages.home.index'); 
    })->name('pembayaran.index');

    // Proses Keluar Aplikasi Admin
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});