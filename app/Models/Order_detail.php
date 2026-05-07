<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    protected $table = 'order_details';
    protected $guarded = ['id_detail'];
    protected $fillable = [
        'harga_satuan',
        'jumlah',
        'subtotal',
    ];
    protected $keyType = 'int';
    public $incrementing = true;

    
}
