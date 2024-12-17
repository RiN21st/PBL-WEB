<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User_Controller;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('Home');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/pencarian', function () {
    return view('pencarian');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', [AuthController::class, 'register']);

Route::get('/home', function () {
    return view('home'); // Ganti dengan view yang sesuai
});
Route::get('/admin', [User_Controller::class, 'index'])->name('index');

Route::resource('users', User_Controller::class);

Route::resource('/admin/{id}/edit', User_Controller::class);

Route::get('/admin/{id}/edit', [User_Controller::class, 'update'])->name('edit');

Route::put('/admin/{id}/edit', [User_Controller::class, 'update'])->name('admin.edit');

Route::delete('/users/{id}', [User_Controller::class, 'destroy'])->name('admin.index');