<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pengguna/page/index');
});

Route::get('/about', function () {
    return view('pengguna/page/about');
});

Route::get('/alat', function () {
    return view('pengguna/page/alat_pertanian');
});

Route::get('/informasi', function () {
    return view('pengguna/page/informasi');
});

Route::get('/pengurus', function () {
    return view('pengguna/page/data_pengurus_desa');
});

Route::get('/galeri', function () {
    return view('pengguna/page/galeri');
});

Route::get('/fasilitas', function () {
    return view('pengguna/page/fasilitas');
});

Route::get('/contact', function () {
    return view('pengguna/page/contact');
});




