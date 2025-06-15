<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TambahController;
use App\Http\Controllers\ProdukkController;
use App\Http\Controllers\PesananController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Halaman utama (landing)
Route::get('/', [LandingPageController::class, 'index'])->name('landing-page');

// Auth - hanya untuk tamu
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate');
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'register'])->name('store-register');
});

// Logout tetap di luar agar bisa dipanggil oleh user yang login
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');

// Produk publik
Route::get('/produk', [ProdukkController::class, 'index'])->name('admin.produkk');

// Dashboard admin
Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', [DashboardController::class, 'Dashboard'])->name('admin.index');

/* ===================== ROUTE UNTUK USER UMUM ===================== */

// Form pemesanan (tidak perlu login)
Route::get('/pesanan', [PesananController::class, 'create'])->name('pesanan.create');
Route::post('/pesanan', [PesananController::class, 'store'])->name('pesanan.store');

// Halaman Contact Us
Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact-us');
Route::post('/contact-us/store', [ContactUsController::class, 'store'])->name('store-contact-us');

// Login Google
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google-login');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google-callback');

Route::get('Produk/daftar-produk', [ProdukController::class, 'index'])->name('daftar-produk');

/* ===================== ROUTE YANG HARUS LOGIN ===================== */

Route::middleware(['auth'])->group(function () {

    // Inventory
    Route::get('/inventory', [InventoryController::class, 'index'])->name('inventory');
    Route::get('/inventory/create', [InventoryController::class, 'create'])->name('create-inventory');
    Route::post('/inventory/store', [InventoryController::class, 'store'])->name('store-inventory');
    Route::get('/inventory/edit/{id}', [InventoryController::class, 'edit'])->name('edit-inventory');
    Route::post('/inventory/update/{id}', [InventoryController::class, 'update'])->name('update-inventory');
    Route::get('/inventory/delete/{id}', [InventoryController::class, 'destroy'])->name('delete-inventory');

    // Produk
    Route::get('Produk/tambah-produk', [TambahController::class, 'tambah'])->name('tambah-produk');

    // Finance
    Route::get('/finance', [FinanceController::class, 'index'])->name('finance');

    // Admin area
    Route::middleware(['is_admin'])->prefix('admin')->name('admin.')->group(function () {

        // Manajemen User
        Route::get('/user', [AdminController::class, 'user'])->name('user');
        Route::get('/user/create', [AdminController::class, 'create'])->name('create-user');
        Route::post('/user/store', [AdminController::class, 'store'])->name('store-user');
        Route::get('/user/{id}', [AdminController::class, 'show'])->name('show-user');
        Route::get('/user/edit/{user}', [AdminController::class, 'edit'])->name('edit-user');
        Route::post('/user/update/{user}', [AdminController::class, 'update'])->name('update-user');
        Route::get('/user/delete/{user}', [AdminController::class, 'destroy'])->name('delete-user');

        // Inventory & Finance admin per user
        Route::get('/user/{id}/inventory', [AdminController::class, 'inventory'])->name('admin-inventory');
        Route::get('/user/{id}/finance', [AdminController::class, 'finance'])->name('admin-finance');

        // Admin: lihat semua pesanan
        Route::get('/pesanan', [PesananController::class, 'index'])->name('pesanan.index');
    });
});
