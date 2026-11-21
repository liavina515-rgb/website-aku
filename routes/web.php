<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

Route::get('/', function () {
     return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::resource('/produk', 'App\\Http\\Controllers\\ProdukController');

use App\Http\Controllers\KategoriController;
Route::resource('/kategori', KategoriController::class);
