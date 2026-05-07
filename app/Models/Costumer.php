<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Costumer extends Model
{
    protected $table = 'costumers';
    protected $guarded = ['id_pelanggan'];
    protected $fillable = [
        'nama_pelanggan',
        'no_telepon',
        'alamat',
        'email',
        'tanggal_daftar',
    ];
    protected $keyType = 'int';
    public $incrementing = true;
}
