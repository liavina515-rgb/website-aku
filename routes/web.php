<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    $kelompok = 8;
    $kelas = "XI PPLG A";
    return view('home', compact('kelompok', 'kelas'));
});

Route::get('/about', function () {
    return view('about');
});
