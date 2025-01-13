<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Register_Controller;
use App\Http\Controllers\Auth\Login_Controller;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\Pencarian_Controller;
use App\Http\Controllers\Auth\Profile_Controller;
use App\Http\Controllers\HistoriTokoController;
use App\Http\Controllers\Produk_Controller;

Route::get('/', function () {
    return view('Home');
});

Route::get('/login', [Login_Controller::class, 'showLoginForm'])->name('login');
Route::post('/login', [Login_Controller::class, 'login']);
Route::post('/logout', [Login_Controller::class, 'logout'])->name('logout');

Route::get('/register', [Register_Controller::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [Register_Controller::class, 'register']);

Route::get('/home', function () {
    return view('home'); // Ganti dengan view yang sesuai
});

Route::get('/account/settings', [AccountController::class, 'settings'])->name('settings');
Route::post('/account/settings', [AccountController::class, 'update'])->name('update');

// Route untuk halaman pencarian
Route::get('/pencarian', [Produk_Controller::class, 'index'])->name('pencarian.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile/edit', [Profile_Controller::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [Profile_Controller::class, 'update'])->name('profile.update');
});


// Route untuk menampilkan toko terakhir dilihat
Route::get('/histori-toko', [HistoriTokoController::class, 'index'])
    ->name('histori.toko')
    ->middleware('auth'); // Hanya bisa diakses oleh pengguna yang login

    Route::delete('/hapus-histori', [HistoriTokoController::class, 'hapusHistori'])->name('hapus.histori');


    // routes/web.php



    // Route untuk pencarian produk
Route::get('/cari-produk', [Produk_Controller::class, 'cariProduk'])->name('cari-produk');

// Route untuk menampilkan histori toko
Route::get('/histori-toko', [Produk_Controller::class, 'tampilHistori'])->name('histori-toko');

// Route untuk menghapus histori toko
Route::delete('/hapus-histori/{id}', [Produk_Controller::class, 'hapusHistori'])->name('hapus-histori');
