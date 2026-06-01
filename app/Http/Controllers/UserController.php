<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class UserController extends Controller
{
    // 1. Halaman Beranda Utama (/)
    public function beranda()
    {
        $produk = Product::all();
        $totalProduk = $produk->count();
        
        // Mengarah ke resources/views/welcome.blade.php
        return view('welcome', compact('produk', 'totalProduk'));
    }

    // 2. Halaman Daftar Produk (/toko)
    public function produk()
    {
        $produk = Product::all();
        
        // Mengarah ke resources/views/toko.blade.php
        // Note: Pastikan kamu sudah membuat file toko.blade.php di luar folder admin
        return view('toko', compact('produk'));
    }

    // 3. Menampilkan Halaman Form Pesan (/pesan/{id})
    public function formPesan($id)
    {
        // Menggunakan query where jika primary key di database-mu adalah id_produk
        $produk = Product::where('id_produk', $id)->firstOrFail(); 
        
        // Mengarah ke resources/views/pesan.blade.php
        // Note: Pastikan kamu sudah membuat file pesan.blade.php di luar folder admin
        return view('pesan', compact('produk'));
    }

    // 4. Memproses Data Pesanan dari Form
    public function prosesPesan(Request $request, $id)
    {
        // Validasi inputan dari form pesan user
        $request->validate([
            'jumlah_pesanan' => 'required|integer|min:1',
        ]);

        $produk = Product::where('id_produk', $id)->firstOrFail();

        // [Opsional] Tulis logika penyimpanan data pesanan ke database kamu di sini jika ada
        // ...

        // Setelah sukses, redirect ke route 'user.produk' (/toko) yang sudah kita buat di web.php
        return redirect()->route('user.produk')->with('success', 'Pesanan Anda berhasil diproses!');
    }
}