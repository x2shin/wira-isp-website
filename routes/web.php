<?php

use Illuminate\Support\Facades\Route;

// 1. Halaman Utama (Beranda)
Route::get('/', function () {
    return view('welcome');
});

// 2. Halaman Tentang & Kontak
Route::get('/tentang', function () {
    return view('pages.tentang');
});

Route::get('/kontak', function () {
    return view('pages.kontak');
});

// 3. Halaman Layanan Zaynet (Sudah Diperbarui)
Route::get('/layanan/murmer', function () {
    return view('pages.murmer');
});

Route::get('/layanan/premium', function () {
    return view('pages.premium');
});

Route::get('/layanan/sultan', function () {
    return view('pages.sultan');
});

// 4. Halaman Layanan Lainnya
Route::get('/layanan/managed', function () {
    return view('pages.managed');
});