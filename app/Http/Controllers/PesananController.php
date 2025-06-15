<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Pesanan;


class PesananController extends Controller
{
    public function store(Request $request)
    {
        dd($request->all());

        $validated = $request->validate([
            'nama' => 'required|string',
            'telepon' => 'required|string',
            'alamat' => 'required|string',
            'produk_id' => 'required|exists:produks,id',
            'jumlah' => 'required|integer|min:1',
            'catatan' => 'nullable|string',
        ]);
    
        // Ambil produk
        $produk = Produk::findOrFail($request->produk_id);
        $total = $produk->harga * $request->jumlah;
    
        // Simpan ke database
        $pesanan = Pesanan::create([
            'nama' => $request->nama,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
            'produk_id' => $request->produk_id,
            'jumlah' => $request->jumlah,
            'harga' => $produk->harga,
            'total' => $total,
            'catatan' => $request->catatan,
        ]);
    
        // Format pesan WhatsApp
        $pesan = "Halo Admin, saya ingin memesan:\n"
            . "Nama: {$pesanan->nama}\n"
            . "Telepon: {$pesanan->telepon}\n"
            . "Alamat: {$pesanan->alamat}\n"
            . "Produk: {$produk->nama}\n"
            . "Jumlah: {$pesanan->jumlah}\n"
            . "Catatan: {$pesanan->catatan}\n"
            . "Total: Rp " . number_format($total, 0, ',', '.');
    
        // Nomor admin WhatsApp
        $noAdmin = '6281234567890'; // Ganti dengan nomor WA admin kamu
    
        // Redirect ke WA
        $urlWA = "https://wa.me/{$noAdmin}?text=" . urlencode($pesan);
        return redirect()->away($urlWA);


        Pesanan::create($request->all());
        return redirect()->route('pesanan.create')->with('success', 'Pesanan berhasil dibuat');
    }
    

    public function create()
    {
        $produks = \App\Models\ListProduk::all(); // ganti dari $listproduks ke $produks
        return view('pesanan.form', compact('produks'));
    }

        public function index()
    {
        $data = Pesanan::with('produk')->latest()->paginate(10);
        return view('admin.pesanan.index', compact('data'));
    }

}



