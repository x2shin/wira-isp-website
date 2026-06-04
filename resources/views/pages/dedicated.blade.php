@extends('layouts.main')

@section('title', 'Dedicated Internet')

@section('custom_css')
<style>
    .service-hero {
        background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
        padding: 180px 0 100px 0;
        color: white;
    }
    .badge-service {
        background: rgba(255, 255, 255, 0.15);
        border: 1px solid rgba(255, 255, 255, 0.3);
        color: white;
        font-weight: 500;
        letter-spacing: 0.5px;
        font-size: 0.8rem;
    }
    .btn-outline-light-custom {
        border: 2px solid white;
        color: white;
        background: transparent;
        transition: all 0.3s ease;
    }
    .btn-outline-light-custom:hover {
        background: white;
        color: #1e40af;
        transform: translateY(-2px);
    }
    .hover-lift {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .hover-lift:hover {
        transform: translateY(-7px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important;
    }
</style>
@endsection

@section('content')
    <div class="service-hero text-center">
        <div class="container" data-aos="fade-up">
            <span class="badge badge-service mb-4 px-4 py-2 rounded-pill">Premium Business Corporate Solution</span>
            <h1 class="fw-bold display-4 mb-3">Dedicated Internet</h1>
            <p class="fs-5 max-w-2xl mx-auto text-light text-opacity-90 mb-5">Solusi koneksi dedicated bandwidth penuh untuk perusahaan Anda</p>
            
            <div class="d-flex justify-content-center gap-3">
                <a href="#penawaran" class="btn text-white rounded-pill px-4 py-2 fw-bold shadow-sm" style="background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%); border: none;">Konsultasi Gratis</a>
                <a href="#paket-dedicated" class="btn btn-outline-light-custom rounded-pill px-4 py-2 fw-bold">Lihat Paket</a>
            </div>
        </div>
    </div>

    <section class="py-5" style="background-color: #ffffff;">
        <div class="container py-5 text-center">
            <h2 class="fw-bold mb-3" data-aos="fade-up">Kenapa Memilih Dedicated Internet?</h2>
            <p class="text-muted fs-5 mb-5" data-aos="fade-up" data-aos-delay="100">Layanan enterprise-grade dengan koneksi stabil dan dukungan penuh.</p>

            <div class="row g-4 justify-content-center mt-2">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                     <div class="card border-0 shadow-sm rounded-4 p-4 h-100 hover-lift">
                         <div class="mx-auto rounded-circle d-flex align-items-center justify-content-center mb-4" style="width: 70px; height: 70px; background: radial-gradient(circle, #f0f7ff 0%, #dbeafe 100%);">
                             <i class="fas fa-globe text-primary fs-3"></i>
                         </div>
                         <h5 class="fw-bold mb-2">Dedicated Bandwidth</h5>
                         <p class="text-muted small mb-0">Bandwidth 1:1 tanpa sharing untuk performa maksimal.</p>
                     </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                     <div class="card border-0 shadow-sm rounded-4 p-4 h-100 hover-lift">
                         <div class="mx-auto rounded-circle d-flex align-items-center justify-content-center mb-4" style="width: 70px; height: 70px; background: radial-gradient(circle, #f0f7ff 0%, #dbeafe 100%);">
                             <i class="fas fa-shield-alt text-primary fs-3"></i>
                         </div>
                         <h5 class="fw-bold mb-2">SLA Guarantee</h5>
                         <p class="text-muted small mb-0">Jaminan uptime hingga 99.5% untuk bisnis Anda.</p>
                     </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                     <div class="card border-0 shadow-sm rounded-4 p-4 h-100 hover-lift">
                         <div class="mx-auto rounded-circle d-flex align-items-center justify-content-center mb-4" style="width: 70px; height: 70px; background: radial-gradient(circle, #f0f7ff 0%, #dbeafe 100%);">
                             <i class="fas fa-bolt text-primary fs-3"></i>
                         </div>
                         <h5 class="fw-bold mb-2">High Performance</h5>
                         <p class="text-muted small mb-0">Koneksi stabil, cepat, dan handal.</p>
                     </div>
                </div>
                
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                     <div class="card border-0 shadow-sm rounded-4 p-4 h-100 hover-lift">
                         <div class="mx-auto rounded-circle d-flex align-items-center justify-content-center mb-4" style="width: 70px; height: 70px; background: radial-gradient(circle, #f0f7ff 0%, #dbeafe 100%);">
                             <i class="fas fa-clock text-primary fs-3"></i>
                         </div>
                         <h5 class="fw-bold mb-2">24/7 Support</h5>
                         <p class="text-muted small mb-0">Tim teknis siap membantu kapan saja.</p>
                     </div>
                </div>
            </div>
        </div>
    </section>

    @php
    $pakets = [
        ['label' => 'Dedicated 100 Mbps', 'speed' => '100 Mbps', 'desc' => 'Bandwidth dedicated 100 Mbps'],
        ['label' => 'Dedicated 200 Mbps', 'speed' => '200 Mbps', 'desc' => 'Bandwidth dedicated 200 Mbps'],
        ['label' => 'Dedicated 300 Mbps', 'speed' => '300 Mbps', 'desc' => 'Bandwidth dedicated 300 Mbps'],
        ['label' => 'Dedicated 400 Mbps', 'speed' => '400 Mbps', 'desc' => 'Bandwidth dedicated 400 Mbps'],
        ['label' => 'Dedicated 500 Mbps', 'speed' => '500 Mbps', 'desc' => 'Bandwidth dedicated 500 Mbps'],
        ['label' => 'Dedicated 600 Mbps', 'speed' => '600 Mbps', 'desc' => 'Bandwidth dedicated 600 Mbps'],
        ['label' => 'Dedicated 700 Mbps', 'speed' => '700 Mbps', 'desc' => 'Bandwidth dedicated 700 Mbps'],
        ['label' => 'Dedicated 800 Mbps', 'speed' => '800 Mbps', 'desc' => 'Bandwidth dedicated 800 Mbps'],
        ['label' => 'Dedicated 900 Mbps', 'speed' => '900 Mbps', 'desc' => 'Bandwidth dedicated 900 Mbps'],
        ['label' => 'Dedicated 1 Gbps', 'speed' => '1 Gbps', 'desc' => 'Bandwidth dedicated 1 Gbps'],
        ['label' => 'Order By Request', 'speed' => 'Custom', 'desc' => 'Custom Bandwidth Request'],
    ];
    @endphp

    <section id="paket-dedicated" class="py-5" style="background-color: #f8f9fa;">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold text-primary">Paket Dedicated Internet</h2>
                <p class="text-muted">Pilih paket sesuai kebutuhan perusahaan Anda.</p>
            </div>

            <div class="row g-4 justify-content-center">
                @foreach($pakets as $paket)
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 shadow-sm rounded-4 p-4 h-100 text-start hover-lift bg-white">
                        <p class="text-secondary fw-semibold mb-1 fs-6">{{ $paket['label'] }}</p>
                        <h2 class="fw-bold text-primary mb-4">{{ $paket['speed'] }}</h2>
                        
                        <ul class="list-unstyled small mb-4 flex-grow-1">
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> {{ $paket['desc'] }}</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> SLA 99.5%</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> 24/7 Support</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Static IP</li>
                        </ul>
                        
                        <a href="https://wa.me/6285111313319?text=Halo%20WI-RA,%20saya%20tertarik%20Paket%20{{ $paket['label'] }}" target="_blank" class="btn btn-success rounded-pill py-2 fw-bold w-100">
                            <i class="fab fa-whatsapp me-2"></i>Order via WhatsApp
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="penawaran" class="py-5 bg-white border-top">
        <div class="container py-5 text-center" data-aos="zoom-in">
            <h2 class="fw-bold mb-3">Request Penawaran Dedicated Internet</h2>
            <p class="text-muted mb-4">Konsultasi gratis untuk mendapatkan penawaran terbaik dari tim kami.</p>
            <a href="https://wa.me/6285111313319?text=Halo%20WI-RA,%20saya%20ingin%20request%20penawaran%20Dedicated%20Internet" target="_blank" class="btn btn-success btn-lg rounded-pill px-5 py-3 fw-bold shadow-sm">
                <i class="fab fa-whatsapp me-2 fs-5"></i> Order via WhatsApp
            </a>
        </div>
    </section>
@endsection