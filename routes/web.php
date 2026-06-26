<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File; 

function getHarga() {
    // Menentukan lokasi file JSON (di dalam folder storage/app/harga.json)
    $path = storage_path('app/harga.json');

    // Jika file json tidak ditemukan, gunakan harga default ini agar web tidak error
    if (!File::exists($path)) {
        return [
            'murmer' => 150000, 
            'premium' => 250000, 
            'sultan' => 350000
        ];
    }

    // Membaca isi file JSON dan mengubahnya menjadi array
    $json = File::get($path);
    return json_decode($json, true);
}

// Route untuk test (Buka di browser: localhost:8000/test-harga)
Route::get('/test-harga', function () {
    $harga = getHarga();
    return "<h3>Status: BACA JSON SUKSES!</h3>" . 
           "Harga Murmer: Rp " . number_format($harga['murmer'], 0, ',', '.') . "<br>" .
           "Harga Premium: Rp " . number_format($harga['premium'], 0, ',', '.') . "<br>" .
           "Harga Sultan: Rp " . number_format($harga['sultan'], 0, ',', '.');
});

// Route Utama
Route::get('/', function () { return view('welcome', ['hargaSheet' => getHarga()]); });
Route::get('/tentang', function () { return view('pages.tentang', ['hargaSheet' => getHarga()]); });
Route::get('/kontak', function () { return view('pages.kontak', ['hargaSheet' => getHarga()]); });
Route::get('/layanan/murmer', function () { return view('pages.murmer', ['hargaSheet' => getHarga()]); });
Route::get('/layanan/premium', function () { return view('pages.premium', ['hargaSheet' => getHarga()]); });
Route::get('/layanan/sultan', function () { return view('pages.sultan', ['hargaSheet' => getHarga()]); });
Route::get('/layanan/managed', function () { return view('pages.managed', ['hargaSheet' => getHarga()]); });