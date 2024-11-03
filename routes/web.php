<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

Route::get('/', function () {
    return view('home', [
        'barang' => App\Models\Barang::all() // Ambil semua data barang
    ]); 
});

Route::resource('barang', BarangController::class);
Route::resource('barang', BarangController::class);