<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\model\produk;

class TambahController extends Controller
{
    public function tambah()
    {
        return view('produk.tambah-produk', [
            'title' => 'Add Product'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProdukRequest $request)
    {
        Produk::create([
            'id' => $request->id,
            'user_id' => Auth::user()->id,
            'nama_barang' => $request->nama_barang,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
        ]);

        return redirect('/Produk');
    }

}
