<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CostumerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'beranda'])->name('user.beranda');
Route::get('/toko', [UserController::class, 'produk'])->name('user.produk');
Route::get('/pesan/{id}', [UserController::class, 'formPesan'])->name('user.pesan.form');
Route::post('/pesan/{id}', [UserController::class, 'prosesPesan'])->name('user.pesan.proses');
Route::post('/pesan/store', [ProductController::class, 'store']);

// Rute untuk Halaman Login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.pages.home.index');
    })->name('admin.dashboard');

    // TAMBAHKAN RUTE BARU DI SINI:
    // Resource Pelanggan
    Route::resource('pelanggan', CostumerController::class)->names('pelanggan');

    // Resource Produk
    Route::resource('produk', ProductController::class)->names('produk');

    // Resource Pesanan (wip)
    Route::get('/admin/pesanan', function () {
        return view('admin.pages.pesanan.index');
    })->name('pesanan.index');
    // Route::resource('pesanan', OrderController::class)->names('pesanan');

    // Resouce Pembayaran (wip)
    Route::get('/admin/pembayaran', function () {
        return view('admin.pages.pembayaran.index');
    })->name('pembayaran.index');
    // Route::resource('pembayaran', PaymentController::class)->names('pembayaran');

    // Proses Logout ygy... ya kan?
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});