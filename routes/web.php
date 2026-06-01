<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produk', function () {
    return view('admin.pages.produk.index');
})->name('produk.index');

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
        return view('admin.pages.pelanggan.index'); // Pastikan file blade ini sudah dibuat
    })->name('pelanggan.index');

    Route::get('/pesanan', function () {
        return view('admin.pages.pesanan.index'); // Pastikan file blade ini sudah dibuat
    })->name('pesanan.index');

    Route::get('/pembayaran', function () {
        return view('admin.pages.pembayaran.index'); // Pastikan file blade ini sudah dibuat
    })->name('pembayaran.index');


    // Proses Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});