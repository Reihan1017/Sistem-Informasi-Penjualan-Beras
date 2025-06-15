<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        return view('Produk/daftar-produk',  [
            'title' => 'Abah Beras'
        ]);
    
    }




}
