<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Pesanan;
use App\Models\ListProduk;



class PesananController extends Controller
{

    public function index()
{
    
    $data = \App\Models\Pesanan::with('produk')->latest()->paginate(10);
    return view('admin.pesanan.index', compact('data'));
}

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
            'produk_id' => 'required|exists:listproduks,id',
            'jumlah' => 'required|numeric|min:1',
            'catatan' => 'nullable',
        ]);
    
        $produk = ListProduk::findOrFail($request->produk_id);
        $total = $produk->harga * $request->jumlah;
        
        $pesanan = Pesanan::create([
            'nama' => $request->nama,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
            'produk_id' => $request->produk_id,
            'jumlah' => $request->jumlah,
            'catatan' => $request->catatan,
            'harga' => $produk->harga,      // Tambahkan ini
            'total' => $total,              // Tambahkan ini juga
        ]);
        
    
        $total = $produk->harga * $request->jumlah;
    
        $pesan = "*Pesanan Baru*\n\n" .
            "*Nama:* {$request->nama}\n" .
            "*No HP:* {$request->telepon}\n" .
            "*Alamat:* {$request->alamat}\n\n" .
            "*Produk:* {$produk->nama_produk}\n" .
            "*Harga per-Kg:* Rp " . number_format($produk->harga, 0, ',', '.') . "\n" .
            "*Jumlah:* {$request->jumlah} Kg\n" .
            "*Total yang Harus Dibayar Sebesar:* Rp " . number_format($total, 0, ',', '.') . "\n\n" .
            "*Catatan:* {$request->catatan}\n\n" .
            "*Sistem Pembayaran Bayar di Tempat (COD)*";

        $waUrl = "https://api.whatsapp.com/send?phone=6285117222655&text=" . urlencode($pesan);
    
        return redirect($waUrl);
    }

}



