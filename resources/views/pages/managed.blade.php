@extends('layouts.main')

@section('title', 'Managed Service')

@section('custom_css')
<style>
    .service-hero { background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%); padding: 180px 0 100px 0; color: white; }
    .badge-service { background: rgba(255, 255, 255, 0.15); border: 1px solid rgba(255, 255, 255, 0.3); color: white; font-weight: 500; font-size: 0.8rem; }
    .btn-outline-light-custom { border: 2px solid white; color: white; background: transparent; transition: all 0.3s ease; }
    .btn-outline-light-custom:hover { background: white; color: #1e40af; transform: translateY(-2px); }
    .btn-whatsapp-hover { transition: transform 0.2s; }
    .btn-whatsapp-hover:hover { transform: scale(1.05); }
</style>
@endsection

@section('content')
    <div class="service-hero text-center">
        <div class="container" data-aos="fade-up">
            <span class="badge badge-service mb-4 px-4 py-2 rounded-pill">Layanan TI Terkelola</span>
            <h1 class="fw-bold display-4 mb-3">Managed Service</h1>
            <p class="fs-5 max-w-2xl mx-auto text-light text-opacity-90 mb-5">Solusi pengelolaan lengkap untuk Jaringan, Server, dan SecureView perusahaan Anda dengan sistem pemantauan dan dukungan 24/7.</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="#konsultasi" class="btn text-white rounded-pill px-4 py-2 fw-bold shadow-sm" style="background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%); border: none;">Konsultasi Gratis <i class="fas fa-arrow-right ms-2"></i></a>
                <a href="#konsultasi" class="btn btn-outline-light-custom rounded-pill px-4 py-2 fw-bold">Jadwalkan Demo</a>
            </div>
        </div>
    </div>

    <section class="py-5" style="background-color: #ffffff;">
        <div class="container py-5 text-center">
            <h2 class="fw-bold mb-3" data-aos="fade-up">Fokus Kami dalam Layanan Managed Service</h2>
            <p class="text-muted fs-5 mb-5 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100">Kami menangani pengelolaan menyeluruh mulai dari jaringan, server hingga sistem keamanan berbasis SecureView.</p>

            <div class="row g-4 justify-content-center mt-2">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                     <div class="card border-0 shadow-sm rounded-4 p-5 h-100 bg-light text-center">
                         <i class="fas fa-network-wired text-indigo fs-1 mb-4" style="color: #4f46e5;"></i>
                         <h4 class="fw-bold mb-3">Pengelolaan Jaringan</h4>
                         <p class="text-muted small mb-0">Pemantauan dan pengelolaan jaringan 24/7 untuk menjamin koneksi yang stabil dan aman.</p>
                     </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                     <div class="card border-0 shadow-sm rounded-4 p-5 h-100 bg-light text-center">
                         <i class="fas fa-server text-indigo fs-1 mb-4" style="color: #4f46e5;"></i>
                         <h4 class="fw-bold mb-3">Pengelolaan Server</h4>
                         <p class="text-muted small mb-0">Pemeliharaan server fisik maupun virtual untuk menjamin performa, keamanan, dan backup rutin.</p>
                     </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                     <div class="card border-0 shadow-sm rounded-4 p-5 h-100 bg-light text-center">
                         <i class="fas fa-desktop text-indigo fs-1 mb-4" style="color: #4f46e5;"></i>
                         <h4 class="fw-bold mb-3">Pengelolaan SecureView</h4>
                         <p class="text-muted small mb-0">Integrasi dan pengawasan sistem kamera, alert otomatis, dan dukungan sistem keamanan terpadu.</p>
                     </div>
                </div>
            </div>
        </div>
    </section>

    <section id="konsultasi" class="py-5" style="background-color: #f8f9fa; padding-bottom: 100px !important;">
        <div class="container py-5 text-center">
            <h2 class="fw-bold mb-3" data-aos="fade-up">Paket Layanan Sesuai Permintaan</h2>
            <p class="text-muted mb-5" data-aos="fade-up">Layanan dikhususkan untuk kebutuhan perusahaan Anda. Semua fitur dapat disesuaikan dan dikombinasikan.</p>
            
            <div class="card border-0 shadow-lg rounded-5 p-4 p-md-5 mx-auto bg-white" style="max-width: 800px;" data-aos="zoom-in">
                
                <div class="mb-5">
                    <span class="badge rounded-pill px-4 py-2 mb-4" style="background-color: #e0f2fe; color: #3b82f6; font-weight: 600; font-size: 0.9rem;">
                        Layanan Managed Service
                    </span>
                    <h2 class="fw-bold" style="color: #4f46e5;">Manajemen Infrastruktur TI Terpadu</h2>
                    <h3 class="fw-bold mt-3" style="color: #1e293b;">Harga disesuaikan dengan kebutuhan</h3>
                </div>
                
                <div class="mx-auto mb-5" style="max-width: 600px;">
                    <ul class="list-unstyled text-start">
                        <li class="d-flex align-items-start mb-4">
                            <i class="fas fa-check-circle fs-5 mt-1 me-3" style="color: #10b981;"></i>
                            <span class="fs-6" style="color: #475569;">Pengelolaan Jaringan (Monitoring, Konfigurasi, Troubleshooting)</span>
                        </li>
                        <li class="d-flex align-items-start mb-4">
                            <i class="fas fa-check-circle fs-5 mt-1 me-3" style="color: #10b981;"></i>
                            <span class="fs-6" style="color: #475569;">Pengelolaan Server (Performance, Backup, Keamanan)</span>
                        </li>
                        <li class="d-flex align-items-start mb-4">
                            <i class="fas fa-check-circle fs-5 mt-1 me-3" style="color: #10b981;"></i>
                            <span class="fs-6" style="color: #475569;">Pengelolaan SecureView (Monitoring Kamera & Sistem Keamanan)</span>
                        </li>
                        <li class="d-flex align-items-start mb-4">
                            <i class="fas fa-check-circle fs-5 mt-1 me-3" style="color: #10b981;"></i>
                            <span class="fs-6" style="color: #475569;">Tim teknis profesional & dukungan 24/7</span>
                        </li>
                        <li class="d-flex align-items-start mb-3">
                            <i class="fas fa-check-circle fs-5 mt-1 me-3" style="color: #10b981;"></i>
                            <span class="fs-6" style="color: #475569;">Penawaran & layanan berdasarkan hasil konsultasi</span>
                        </li>
                    </ul>
                </div>
                
                <div class="text-center">
                    <a href="https://wa.me/6285111313319?text=Halo%20tim%20WI-RA,%20saya%20tertarik%20dan%20ingin%20konsultasi%20mengenai%20layanan%20*Managed%20Service*.%20Bisa%20dibantu?" target="_blank" class="btn btn-whatsapp-hover rounded-pill px-5 py-3 fw-bold text-white shadow-sm w-100 mx-auto" style="background-color: #10b981; border: none; font-size: 1.1rem; max-width: 400px;">
                        <i class="fab fa-whatsapp me-2 fs-4 align-middle"></i> Order via WhatsApp
                    </a>
                    <p class="small mt-4 mb-0" style="color: #64748b; font-style: italic;">
                        *Detail layanan akan dibahas lebih lanjut setelah sesi konsultasi.
                    </p>
                </div>

            </div>
        </div>
    </section>
@endsection