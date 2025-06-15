<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function Dashboard()
    {
        return view('admin.index', [
            // data yang ingin dikirim ke view, misalnya:
            'title' => 'Dashboard'
        ]);
        
    }
}
