<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
    protected $table = 'pesanans';
    protected $fillable = [
        'kode_buy',
        'jumlah_pesanan',
        'jenis_pesanan',

    ];
}
