<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class UserController extends Controller
{
    public function beranda()
    {
        $produk = Product::all();
        $totalProduk = $produk->count();
        return view('welcome', compact('produk', 'totalProduk'));
    }

    public function produk()
    {
        $produk = Product::all();
        return view('welcome_produk', compact('produk'));
    }
    public function tentang(){
        return view('welcome_tentang');
    }
    public function kontak(){
        return view('welcome_kontak');
    }
    public function formPesan($id)
    {
        $produk = Product::where('id_produk', $id)->firstOrFail(); 
        return view('pesan', compact('produk'));
    }

    public function prosesPesan(Request $request, $id)
    {
        $request->validate([
            'jumlah_pesanan' => 'required|integer|min:1',
        ]);

        $produk = Product::where('id_produk', $id)->firstOrFail();

        return redirect()->route('user.produk')->with('success', 'Pesanan Anda berhasil diproses!');
    }
}