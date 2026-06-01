<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserpagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Halaman User
Route::get('/home', [UserpagesController::class, 'home'])->name('home');
Route::get('/produk', [UserpagesController::class, 'produk'])->name('produk');
Route::get('/tentang', [UserpagesController::class, 'tentang'])->name('tentang');
Route::get('/kontak', [UserpagesController::class, 'kontak'])->name('kontak');


// Rute untuk Halaman Login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Rute yang butuh Login (Diproteksi Middleware Auth)
Route::middleware(['auth'])->group(function () {

    Route::get('/index', function () {
        return view('admin.pages.home.index');
    });

    // Halaman Dashboard Admin
    Route::get('/admin/dashboard', function () {
        return view('admin.pages.home.index');
    });

    // TAMBAHKAN RUTE BARU DI SINI:
    Route::get('/pelanggan', function () {
        return view('admin.pages.pelanggan.index');
    })->name('pelanggan.index');

    Route::get('/pesanan', function () {
        return view('admin.pages.pesanan.index');
    })->name('pesanan.index');

    Route::get('/pembayaran', function () {
        return view('admin.pages.pembayaran.index');
    })->name('pembayaran.index');

    // Proses Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});