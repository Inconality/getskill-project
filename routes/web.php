<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/index', function () {
    return view('admin.pages.home.index');
});

Route::get('/admin/produk', function () {
    return view('admin.pages.produk.index');
})->name('produk.index');

Route::get('/home', function () {
    return view('user.pages.home');
});