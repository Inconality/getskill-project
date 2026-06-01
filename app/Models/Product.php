<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // 1. Beritahu Laravel bahwa primary key tabel ini adalah id_produk, bukan id
    protected $primaryKey = 'id_produk';

    // Pastikan juga kolom ini sudah masuk di fillable jika kamu melakukan insert data
    protected $fillable = [
        'nama_produk', 
        'harga', 
        'stok', 
        'deskripsi', 
        'gambar'
    ];
}