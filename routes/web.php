<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController; // Pastikan ini sudah ada

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Halaman Umum (Bisa Diakses Tanpa Login)
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


