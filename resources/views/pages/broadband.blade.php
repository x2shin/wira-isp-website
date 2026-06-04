@extends('layouts.main')

@section('title', 'Broadband Internet')

@section('custom_css')
<style>
   
    .service-hero { background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%); padding: 180px 0 100px 0; color: white; }
    .badge-service { background: rgba(255, 255, 255, 0.15); border: 1px solid rgba(255, 255, 255, 0.3); color: white; font-weight: 500; font-size: 0.8rem; }
    .hover-lift { transition: transform 0.3s ease, box-shadow 0.3s ease; }
    .hover-lift:hover { transform: translateY(-7px); box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important; }
</style>
@endsection

@section('content')
    <div class="service-hero text-center">
        <div class="container" data-aos="fade-up">
            <span class="badge badge-service mb-4 px-4 py-2 rounded-pill">Home Internet Solution</span>
            <h1 class="fw-bold display-4 mb-3">Broadband Internet</h1>
            <p class="fs-5 max-w-2xl mx-auto text-light text-opacity-90 mb-5">Internet rumahan berkecepatan tinggi untuk kebutuhan harian Anda.</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="#paket-broadband" class="btn text-white rounded-pill px-4 py-2 fw-bold shadow-sm" style="background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%); border: none;">Pilih Paket <i class="fas fa-arrow-right ms-2"></i></a>
                <a href="#" class="btn btn-outline-light rounded-pill px-4 py-2 fw-bold">Cek Coverage</a>
            </div>
        </div>
    </div>

    <section class="py-5" style="background-color: #ffffff;">
        <div class="container py-5">
            <div class="row g-4 justify-content-center mt-2">
                <div class="col-lg-3 col-md-6" data-aos="fade-up">
                     <div class="card border-0 shadow-sm rounded-4 p-4 h-100 hover-lift text-center">
                         <div class="mx-auto rounded-circle d-flex align-items-center justify-content-center mb-4 border border-primary border-opacity-25" style="width: 60px; height: 60px;">
                             <i class="fas fa-download text-primary fs-4"></i>
                         </div>
                         <h5 class="fw-bold mb-2">Kecepatan Tinggi</h5>
                         <p class="text-muted small mb-0">Akses internet cepat hingga 100 Mbps, cocok untuk streaming, browsing, dan video call.</p>
                     </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                     <div class="card border-0 shadow-sm rounded-4 p-4 h-100 hover-lift text-center">
                         <div class="mx-auto rounded-circle d-flex align-items-center justify-content-center mb-4 border border-primary border-opacity-25" style="width: 60px; height: 60px;">
                             <i class="fas fa-upload text-primary fs-4"></i>
                         </div>
                         <h5 class="fw-bold mb-2">Upload Stabil</h5>
                         <p class="text-muted small mb-0">Upload file besar, foto, dan video dengan koneksi yang stabil.</p>
                     </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                     <div class="card border-0 shadow-sm rounded-4 p-4 h-100 hover-lift text-center">
                         <div class="mx-auto rounded-circle d-flex align-items-center justify-content-center mb-4 border border-primary border-opacity-25" style="width: 60px; height: 60px;">
                             <i class="fas fa-wifi text-primary fs-4"></i>
                         </div>
                         <h5 class="fw-bold mb-2">Jangkauan WiFi Luas</h5>
                         <p class="text-muted small mb-0">WiFi menjangkau seluruh ruangan di rumah Anda.</p>
                     </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                     <div class="card border-0 shadow-sm rounded-4 p-4 h-100 hover-lift text-center">
                         <div class="mx-auto rounded-circle d-flex align-items-center justify-content-center mb-4 border border-primary border-opacity-25" style="width: 60px; height: 60px;">
                             <i class="fas fa-check-circle text-primary fs-4"></i>
                         </div>
                         <h5 class="fw-bold mb-2">Unlimited Kuota</h5>
                         <p class="text-muted small mb-0">Internet tanpa FUP dan tanpa batasan kuota.</p>
                     </div>
                </div>
            </div>
        </div>
    </section>

    @php
    $broadband_pakets = [
        ['speed' => '15 Mbps', 'harga' => '125.000'],
        ['speed' => '20 Mbps', 'harga' => '160.000'],
        ['speed' => '30 Mbps', 'harga' => '175.000', 'popular' => true],
        ['speed' => '50 Mbps', 'harga' => '280.000'],
        ['speed' => '100 Mbps', 'harga' => '350.000'],
    ];
    @endphp

    <section id="paket-broadband" class="py-5" style="background-color: #f8f9fa;">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold" style="color: #4f46e5;">PROMO SPECIAL COREBEE JUNI {{ date('Y') }}</h2>
                <p class="text-muted">Pilih paket sesuai kebutuhan internet Anda</p>
            </div>

            <div class="row g-4 justify-content-center">
                @foreach($broadband_pakets as $paket)
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="card border-0 shadow-sm rounded-4 p-4 h-100 text-center hover-lift bg-white position-relative {{ isset($paket['popular']) ? 'border-primary shadow-lg' : '' }}" style="{{ isset($paket['popular']) ? 'border: 2px solid #4f46e5 !important; transform: scale(1.05); z-index: 2;' : '' }}">
                        @if(isset($paket['popular']))
                            <span class="badge position-absolute top-0 start-50 translate-middle rounded-pill px-3 py-2" style="background-color: #4f46e5;">Most Popular</span>
                        @endif
                        <h5 class="fw-bold mb-1 mt-3">Corebee</h5>
                        <h2 class="fw-bold mb-3" style="color: #4f46e5;">{{ $paket['speed'] }}</h2>
                        <h4 class="fw-bold text-dark mb-4">{{ $paket['harga'] }}</h4>
                        
                        <ul class="list-unstyled small mb-4 text-start flex-grow-1 mx-auto" style="max-width: 200px;">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Unlimited quota</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Modem dipinjamkan</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Support 24/7</li>
                        </ul>
                        
                        <a href="https://wa.me/6281234567890?text=Halo%20WI-RA,%20saya%20tertarik%20Promo%20Corebee%20{{ $paket['speed'] }}" target="_blank" class="btn btn-success rounded-pill py-2 fw-bold w-100 mt-auto">
                            <i class="fab fa-whatsapp me-2"></i>Order via WhatsApp
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            
            <div class="mt-5 text-center" data-aos="zoom-in">
                <span class="badge bg-warning text-dark mb-3 px-3 py-2 rounded-pill"><i class="fas fa-star me-1"></i> PROMO BULAN INI</span>
                <h3 class="fw-bold mb-3">Corebee Internet Fiber Super</h3>
                <p class="text-muted mb-4">Stabil, cepat, dan cocok untuk rumah & bisnis</p>
                <div class="rounded-4 overflow-hidden shadow-lg border border-4 border-white d-inline-block w-100" style="max-width: 800px; background-color: #e2e8f0; height: 300px; display: flex; align-items: center; justify-content: center;">
                    <p class="text-muted"><i class="fas fa-image fs-1 d-block mb-2"></i> Area Banner Brosur Anda (Tempatkan gambar brosur di sini)</p>
                </div>
            </div>
        </div>
    </section>
@endsection