<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
     return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

use App\Http\Controllers\ProdukController;
Route::get('/produk', [ProdukController::class, 'index'])
->name('produk');

Route::get('/produk/{id}', [ProdukController::class, 'show'])
->name('produk.show');

Route::get('/produk/{id}', [ProdukController::class,'show'])
->name('produk.show');
