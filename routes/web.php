<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserpagesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'beranda'])->name('user.beranda');
Route::get('/toko', [UserController::class, 'produk'])->name('user.produk');
Route::get('/pesan/{id}', [UserController::class, 'formPesan'])->name('user.pesan.form');
Route::post('/pesan/{id}', [UserController::class, 'prosesPesan'])->name('user.pesan.proses');
Route::post('/pesan/store', [App\Http\Controllers\ProductController::class, 'store']);

// Halaman User
Route::get('/home', [UserpagesController::class, 'home'])->name('home');
Route::get('/produk', [UserpagesController::class, 'produk'])->name('produk');
Route::get('/tentang', [UserpagesController::class, 'tentang'])->name('tentang');
Route::get('/kontak', [UserpagesController::class, 'kontak'])->name('kontak');


// Rute untuk Halaman Login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.pages.home.index');
    })->name('admin.dashboard');

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
    Route::resource('admin-produk', ProductController::class)->names([
        'index'   => 'produk.index',
        'create'  => 'produk.create',
        'store'   => 'produk.store',
        'edit'    => 'produk.edit',
        'update'  => 'produk.update',
        'destroy' => 'produk.destroy',
    ]);

    Route::get('/pelanggan', function () { return view('admin.pages.home.index'); })->name('pelanggan.index');
    Route::get('/pesanan', function () { return view('admin.pages.home.index'); })->name('pesanan.index');
    Route::get('/pembayaran', function () { return view('admin.pages.home.index'); })->name('pembayaran.index');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});