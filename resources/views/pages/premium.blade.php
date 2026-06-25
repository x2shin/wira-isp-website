@extends('layouts.main')

@section('title', 'Paket Premium')

@section('custom_css')
<style>
    /* Background diubah menjadi warna gelap (#0f172a) */
    .page-wrapper { min-height: 100vh; display: flex; align-items: center; justify-content: center; background-color: #0f172a; padding-top: 80px; padding-bottom: 40px; }
    
    .dark-paket-card { background-color: #1a2235; border-radius: 1.5rem; padding: 2.5rem; color: white; width: 100%; max-width: 420px; box-shadow: 0 20px 40px rgba(0,0,0,0.4); text-align: left; position: relative; border: 2px solid #38bdf8; }
    .badge-populer-dark { background-color: #f59e0b; color: white; font-weight: 700; border-radius: 20px; padding: 5px 15px; font-size: 0.75rem; position: absolute; top: -15px; right: 25px; letter-spacing: 0.5px; box-shadow: 0 4px 6px rgba(0,0,0,0.3); }
    .dark-paket-card .paket-title { font-size: 1.7rem; font-weight: 700; margin-bottom: 1rem; letter-spacing: 0.5px; text-transform: uppercase; }
    .dark-paket-card .speed-number { font-size: 4.5rem; font-weight: 700; color: #3b82f6; line-height: 1; }
    .dark-paket-card .speed-unit { font-size: 1.5rem; color: #3b82f6; font-weight: 500; margin-left: 5px; }
    .dark-paket-card .price-text { font-size: 2.5rem; font-weight: 700; margin-top: 0.5rem; margin-bottom: 2rem; }
    .dark-paket-card .feature-list { list-style: none; padding: 0; margin: 0; }
    .dark-paket-card .feature-list li { padding: 1.2rem 0; border-bottom: 1px solid rgba(255, 255, 255, 0.08); font-size: 1.05rem; color: #f8fafc; }
    .dark-paket-card .feature-list li:last-child { border-bottom: none; margin-bottom: 1.5rem; }
    .dark-paket-card .btn-pesan { background-color: #3b82f6; color: white; font-weight: 700; border-radius: 1rem; padding: 1.2rem; width: 100%; display: inline-block; text-align: center; text-decoration: none; transition: all 0.3s; font-size: 1.1rem; }
    .dark-paket-card .btn-pesan:hover { background-color: #2563eb; transform: scale(1.02); color: white; }
</style>
@endsection

@section('content')
    <div class="page-wrapper">
        <div class="container" data-aos="zoom-in">
            <div class="dark-paket-card mx-auto">
                <span class="badge-populer-dark">POPULER</span>
                <div class="paket-title">PAKET PREMIUM</div>
                <div>
                    <span class="speed-number">25</span> <span class="speed-unit">Mbps</span>
                </div>
                <div class="price-text">Rp{{ number_format($hargaSheet['premium'], 0, ',', '.') }}</div>
                
                <ul class="feature-list">
                    <li>✓ Unlimited Internet</li>
                    <li>✓ Streaming Full HD</li>
                    <li>✓ Streaming & Gaming</li>
                    <li>✓ Support 24 Jam</li>
                    <li>✓ Include PPN11% + Sewa modem 5k/bln*</li>
                    <li>✓ Biaya Pemasangan 100K</li>
                </ul>
                
                <a href="https://wa.me/6285111313319?text=Halo%20WI-RA,%20saya%20tertarik%20PAKET%20PREMIUM%2025%20Mbps" target="_blank" class="btn-pesan">
                    <i class="fas fa-comment-dots me-2"></i> PESAN SEKARANG
                </a>
            </div>
        </div>
    </div>
@endsection