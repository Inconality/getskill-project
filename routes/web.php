<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('admin.pages.home.index');
});

Route::get('/produk', function () {
    return view('admin.pages.produk.index');
})->name('produk.index');