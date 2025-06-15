<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukkController extends Controller
{
    public function index()
    {
        return view('admin/produkk',  [
            'title' => 'Abah Beras'
        ]);
    
    }
    
}
