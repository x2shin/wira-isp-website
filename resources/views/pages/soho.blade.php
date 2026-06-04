@extends('layouts.main')

@section('title', 'SOHO Internet')

@section('custom_css')
<style>
    
    .service-hero { background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%); padding: 180px 0 100px 0; color: white; }
    .badge-service { background: rgba(255, 255, 255, 0.15); border: 1px solid rgba(255, 255, 255, 0.3); color: white; font-weight: 500; font-size: 0.8rem; }
    .btn-outline-light-custom { border: 2px solid white; color: white; background: transparent; transition: all 0.3s ease; }
    .btn-outline-light-custom:hover { background: white; color: #1e40af; transform: translateY(-2px); }
    .hover-lift { transition: transform 0.3s ease, box-shadow 0.3s ease; }
    .hover-lift:hover { transform: translateY(-7px); box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important; }
</style>
@endsection

@section('content')
    <div class="service-hero text-center">
        <div class="container" data-aos="fade-up">
            <span class="badge badge-service mb-4 px-4 py-2 rounded-pill">Small Office Home Office</span>
            <h1 class="fw-bold display-4 mb-3">SOHO Internet</h1>
            <p class="fs-5 max-w-2xl mx-auto text-light text-opacity-90 mb-5">Solusi internet untuk kantor kecil dan home office Anda dengan performa optimal dan harga terjangkau.</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="#penawaran" class="btn text-white rounded-pill px-4 py-2 fw-bold shadow-sm" style="background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%); border: none;">Konsultasi Gratis</a>
                <a href="#paket-soho" class="btn btn-outline-light-custom rounded-pill px-4 py-2 fw-bold">Lihat Paket</a>
            </div>
        </div>
    </div>

    <section class="py-5" style="background-color: #ffffff;">
        <div class="container py-5 text-center">
            <h2 class="fw-bold mb-3" data-aos="fade-up">Kenapa Memilih SOHO Internet?</h2>
            <p class="text-muted fs-5 mb-5" data-aos="fade-up" data-aos-delay="100">Layanan internet khusus UMKM dan kantor kecil dengan performa tinggi dan SLA yang dapat diandalkan.</p>

            <div class="row g-4 justify-content-center mt-2">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                     <div class="card border-0 shadow-sm rounded-4 p-4 h-100 hover-lift">
                         <div class="mx-auto rounded-circle d-flex align-items-center justify-content-center mb-4" style="width: 70px; height: 70px; background: radial-gradient(circle, #f0fdfa 0%, #ccfbf1 100%);">
                             <i class="fas fa-store text-teal fs-3" style="color: #0d9488;"></i>
                         </div>
                         <h5 class="fw-bold mb-2">Small Office Ready</h5>
                         <p class="text-muted small mb-0">Ideal untuk bisnis kecil dengan kebutuhan koneksi cepat dan stabil.</p>
                     </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                     <div class="card border-0 shadow-sm rounded-4 p-4 h-100 hover-lift">
                         <div class="mx-auto rounded-circle d-flex align-items-center justify-content-center mb-4" style="width: 70px; height: 70px; background: radial-gradient(circle, #f0fdfa 0%, #ccfbf1 100%);">
                             <i class="fas fa-briefcase text-teal fs-3" style="color: #0d9488;"></i>
                         </div>
                         <h5 class="fw-bold mb-2">Business Grade</h5>
                         <p class="text-muted small mb-0">Dukungan dan koneksi setara enterprise dengan harga UMKM.</p>
                     </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                     <div class="card border-0 shadow-sm rounded-4 p-4 h-100 hover-lift">
                         <div class="mx-auto rounded-circle d-flex align-items-center justify-content-center mb-4" style="width: 70px; height: 70px; background: radial-gradient(circle, #f0fdfa 0%, #ccfbf1 100%);">
                             <i class="fas fa-wifi text-teal fs-3" style="color: #0d9488;"></i>
                         </div>
                         <h5 class="fw-bold mb-2">WiFi Profesional</h5>
                         <p class="text-muted small mb-0">Router WiFi disediakan dan dikelola oleh tim kami.</p>
                     </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                     <div class="card border-0 shadow-sm rounded-4 p-4 h-100 hover-lift">
                         <div class="mx-auto rounded-circle d-flex align-items-center justify-content-center mb-4" style="width: 70px; height: 70px; background: radial-gradient(circle, #f0fdfa 0%, #ccfbf1 100%);">
                             <i class="fas fa-headset text-teal fs-3" style="color: #0d9488;"></i>
                         </div>
                         <h5 class="fw-bold mb-2">Support 24/7</h5>
                         <p class="text-muted small mb-0">Tim teknis kami siap membantu kapan pun Anda butuh.</p>
                     </div>
                </div>
            </div>
        </div>
    </section>

    @php
    $soho_pakets = [
        ['label' => 'SOHO 100 Mbps', 'speed' => '100 Mbps'],
        ['label' => 'SOHO 200 Mbps', 'speed' => '200 Mbps', 'popular' => true],
        ['label' => 'SOHO 300 Mbps', 'speed' => '300 Mbps'],
        ['label' => 'SOHO 400 Mbps', 'speed' => '400 Mbps'],
        ['label' => 'SOHO 500 Mbps', 'speed' => '500 Mbps'],
        ['label' => 'SOHO 600 Mbps', 'speed' => '600 Mbps'],
        ['label' => 'SOHO 700 Mbps', 'speed' => '700 Mbps'],
        ['label' => 'SOHO 800 Mbps', 'speed' => '800 Mbps'],
        ['label' => 'SOHO 900 Mbps', 'speed' => '900 Mbps'],
        ['label' => 'SOHO 1 Gbps', 'speed' => '1 Gbps'],
        ['label' => 'SOHO Request Bandwidth', 'speed' => 'By Request'],
    ];
    @endphp

    <section id="paket-soho" class="py-5" style="background-color: #f8f9fa;">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold" style="color: #0f766e;">Pilih Paket Unlimited Anda</h2>
                <p class="text-muted">Solusi internet cepat dan stabil untuk kebutuhan bisnis rumahan atau kantor kecil Anda.</p>
            </div>

            <div class="row g-4 justify-content-center">
                @foreach($soho_pakets as $paket)
                <div class="col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="card border-0 shadow-sm rounded-4 p-4 h-100 text-center hover-lift bg-white position-relative {{ isset($paket['popular']) ? 'border-primary' : '' }}" style="{{ isset($paket['popular']) ? 'border: 2px solid #0f766e !important;' : '' }}">
                        @if(isset($paket['popular']))
                            <span class="badge position-absolute top-0 start-50 translate-middle rounded-pill px-3 py-2" style="background-color: #0f766e;">Most Popular</span>
                        @endif
                        <p class="text-secondary fw-semibold mb-1 mt-3">{{ $paket['label'] }}</p>
                        <h2 class="fw-bold mb-3" style="color: #0f766e;">{{ $paket['speed'] }}</h2>
                        <p class="text-muted small mb-4">Contact Me</p>
                        
                        <ul class="list-unstyled small mb-4 text-start flex-grow-1 mx-auto" style="max-width: 200px;">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Bandwidth Guaranteed</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> WiFi Router Included</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Support 24/7</li>
                        </ul>
                        
                        <a href="https://wa.me/6281234567890?text=Halo%20WI-RA,%20saya%20tertarik%20Paket%20{{ $paket['label'] }}" target="_blank" class="btn btn-success rounded-pill py-2 fw-bold w-100 mt-auto">
                            <i class="fab fa-whatsapp me-2"></i>Order via WhatsApp
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection