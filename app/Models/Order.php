<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $guarded = ['id_pesanan'];
    protected $fillable = [
        'tanggal_pesanan',
        'total_harga',
    ];
    protected $keyType = 'int';
    public $incrementing = true;

}
