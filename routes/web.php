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

Route::get('/layanan/dedicated', function () {
    return view('pages.dedicated');
});

Route::get('/layanan/soho', function () {
    return view('pages.soho');
});

Route::get('/layanan/broadband', function () {
    return view('pages.broadband');
});

Route::get('/layanan/managed', function () {
    return view('pages.managed');
});
