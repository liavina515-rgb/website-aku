<?php

use Illuminate\Support\Facades\Route;

Route::get('/profil', function () {
    $nama = 'revina';
    $kelas = 'XI PPLG A';
    return view('profil', compact('nama'));
});
