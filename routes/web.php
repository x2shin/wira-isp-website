<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

function getHarga() {
    $csvUrl = 'https://docs.google.com/spreadsheets/d/e/2PACX-1vS9QPkL0X1KPlLlbGUL3hmTffkSc153oMS5guNIrHd5PBw14CsxF8-UweqIeX7DzYT3r9hgDbIh33jj/pub?output=csv&refresh=' . time();

    return Cache::remember('harga_paket_wira', 1, function () use ($csvUrl) {
        $data = ['murmer' => 150000, 'premium' => 250000, 'sultan' => 350000];
        try {
            // DITAMBAHKAN withoutVerifying() AGAR BISA TEMBUS DI LOCALHOST
            $response = Http::withoutVerifying()->timeout(5)->get($csvUrl);
            
            if ($response->successful()) {
                $baris = explode("\n", trim(str_replace("\r", "", $response->body())));
                array_shift($baris);
                foreach ($baris as $b) {
                    $k = str_getcsv($b);
                    if (isset($k[0], $k[1])) {
                        $data[trim(strtolower($k[0]))] = preg_replace('/[^0-9]/', '', $k[1]);
                    }
                }
            }
        } catch (\Exception $e) {}
        return $data;
    });
}

Route::get('/test-harga', function () {
    $harga = getHarga();
    return "<h3>Status: KONEKSI SUKSES!</h3>" . 
           "Harga Murmer: Rp " . number_format($harga['murmer'], 0, ',', '.') . "<br>" .
           "Harga Premium: Rp " . number_format($harga['premium'], 0, ',', '.') . "<br>" .
           "Harga Sultan: Rp " . number_format($harga['sultan'], 0, ',', '.');
});

Route::get('/', function () { return view('welcome', ['hargaSheet' => getHarga()]); });
Route::get('/tentang', function () { return view('pages.tentang', ['hargaSheet' => getHarga()]); });
Route::get('/kontak', function () { return view('pages.kontak', ['hargaSheet' => getHarga()]); });
Route::get('/layanan/murmer', function () { return view('pages.murmer', ['hargaSheet' => getHarga()]); });
Route::get('/layanan/premium', function () { return view('pages.premium', ['hargaSheet' => getHarga()]); });
Route::get('/layanan/sultan', function () { return view('pages.sultan', ['hargaSheet' => getHarga()]); });
Route::get('/layanan/managed', function () { return view('pages.managed', ['hargaSheet' => getHarga()]); });