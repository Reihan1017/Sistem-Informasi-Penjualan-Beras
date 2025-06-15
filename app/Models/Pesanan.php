<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'telepon',
        'alamat',
        'produk_id',
        'jumlah',
        'catatan',
    ];

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'produk_id');
    }
}
