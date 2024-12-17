<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User_Controller;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('Home');
})->name('Home');;
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/pencarian', function () {
    return view('pencarian');
})->name('pencarian');

Route::get('/Landingpage', function () {
    return view('Landingpage');
})->name('Landingpage');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', [AuthController::class, 'register']);

Route::get('/home', function () {
    return view('home'); // Ganti dengan view yang sesuai
});
Route::get('/admin', [User_Controller::class, 'index'])->name('admin.users.index');

Route::delete('/admin{id}', [User_Controller::class, 'destroy'])->name('admin.user.destroy');


