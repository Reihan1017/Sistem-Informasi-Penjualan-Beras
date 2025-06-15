<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    // Sesuaikan dengan nama tabel yang ada
    protected $table = "listproduks";

    protected $fillable = [
        'jenis_beras',
        'harga_jual',
        'kategori',
        'jumlah_stok',
    ];
}
