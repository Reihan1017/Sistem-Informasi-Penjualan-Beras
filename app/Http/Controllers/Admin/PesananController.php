<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pesanan; 

class PesananController extends Controller
{
    public function index()
    {
        $data = Pesanan::all(); // atau pakai paginate() kalau mau paging
        return view('admin.pesanan.index', compact('data'));
    }
}



