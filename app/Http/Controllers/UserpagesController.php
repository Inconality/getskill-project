<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserpagesController extends Controller
{
    function home(){
        return view('user.pages.home');
    }
    function produk(){
        return view('user.pages.produk');
    }
    function tentang(){
        return view('user.pages.tentang');
    }
    function kontak(){
        return view('user.pages.kontak');
    }

}
