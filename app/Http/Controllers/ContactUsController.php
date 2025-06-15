<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use App\Models\Produk;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produks = Produk::all(); // ambil semua data dari listproduks
    
        return view('contact-us', [
            'title' => 'Pesan Sekarang',
            'produks' => $produks
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ContactUs::create($request->all());

        return redirect('/');
    }
}
