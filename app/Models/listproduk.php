<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListProduk extends Model
{
    use HasFactory;

    protected $table = 'listproduks';

    protected $fillable = [
        'nama_produk',
        'harga',
    ];
}
