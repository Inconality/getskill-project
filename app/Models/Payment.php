<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';
    protected $guarded = ['id_pembayaran'];
    protected $fillable = [
        'metode',
        'tanggal_bayar',
    ];
    protected $keyType = 'int';
    public $incrementing = true;
}