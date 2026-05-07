<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded = ['id_produk'];
    protected $fillable = [
        'nama_produk',
        'harga',
        'deskripsi',
    ];
    protected $keyType = 'int';
    public $incrementing = true;
}
