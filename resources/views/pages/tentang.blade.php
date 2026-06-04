@extends('layouts.main')

@section('title', 'Tentang Kami')

@section('custom_css')
<style>
    .page-hero { background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%); padding: 150px 0 80px 0; color: white; }
    .icon-list-box { display: flex; align-items: flex-start; gap: 15px; margin-bottom: 25px; }
    .icon-list-box .icon { width: 45px; height: 45px; background: #e0f2fe; color: #0284c7; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; flex-shrink: 0; }
    .hover-lift { transition: transform 0.3s ease; }
    .hover-lift:hover { transform: translateY(-5px); }
    #tentang .hover-lift:hover { transform: translateY(-8px); box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important; }
</style>
@endsection

@section('content')
    <div class="page-hero text-center">
        <div class="container" data-aos="fade-up">
            <h1 class="fw-bold display-5 mb-3">Tentang Kami</h1>
            <p class="fs-5 max-w-2xl mx-auto text-light text-opacity-90">WIFI RANDUAGUNG hadir menghadirkan layanan internet terbaik, cepat, dan terjangkau untuk seluruh warga Randuagung.</p>
        </div>
    </div>

    <section id="tentang" class="py-5" style="background-color: #f8fafc;">
        <div class="container py-5">
            <div class="row justify-content-center mb-5 mt-2" data-aos="fade-up">
                <div class="col-lg-9 text-center position-relative">
                    <i class="fas fa-quote-left position-absolute" style="font-size: 8rem; color: #f1f5f9; top: -40px; left: -20px; z-index: 0; transform: rotate(-10deg);"></i>
                    <div class="position-relative" style="z-index: 1;">
                        <h2 class="fw-bolder mb-5 display-5" style="color: #0f172a; letter-spacing: -1px;">
                            WIFI <span style="background: linear-gradient(135deg, #0ea5e9, #3b82f6); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">RANDUAGUNG</span>
                        </h2>
                        <div class="p-4 p-md-5 rounded-4 shadow-sm bg-white" style="border: 1px solid rgba(226, 232, 240, 0.8);">
                            <p class="lead fw-normal mb-4" style="color: #334155; line-height: 1.8; font-size: 1.25rem;">
                                Selamat datang di <strong style="color: #0ea5e9; font-weight: 700;">WIFI RANDUAGUNG</strong>, penyedia layanan internet lokal yang hadir untuk memberikan akses WiFi <span class="text-dark fw-bold border-bottom border-info border-2">cepat, stabil, dan terjangkau</span> bagi seluruh warga Randuagung.
                            </p>
                            <div class="mx-auto mb-4" style="width: 60px; height: 4px; background: linear-gradient(90deg, #0ea5e9, #3b82f6); border-radius: 2px;"></div>
                            <p class="mb-4" style="color: #64748b; line-height: 1.9; font-size: 1.05rem;">
                                Kami percaya bahwa internet bukan lagi kebutuhan tambahan, melainkan bagian penting dari kehidupan sehari-hari. Mulai dari belajar, bekerja, berkomunikasi, menjalankan usaha, hingga menikmati hiburan digital, semuanya membutuhkan koneksi yang dapat diandalkan. Karena itu, WIFI RANDUAGUNG berkomitmen menghadirkan layanan internet berkualitas dengan harga yang ramah untuk masyarakat.
                            </p>
                            <p class="mb-0" style="color: #64748b; line-height: 1.9; font-size: 1.05rem;">
                                Dengan dukungan teknologi jaringan yang terus kami kembangkan serta pelayanan yang responsif, kami berusaha memberikan pengalaman internet yang nyaman dan tanpa ribet. Kami juga terus memperluas jangkauan layanan agar semakin banyak warga Randuagung dapat menikmati akses internet yang cepat dan stabil.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-5 align-items-center mb-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <h3 class="fw-bold mb-4" style="color: #0f172a;">Mengapa Memilih Kami</h3>
                    <p class="text-muted mb-4">Kami percaya bahwa internet adalah bagian penting dari kehidupan sehari-hari. Oleh karena itu, kami memberikan layanan terbaik untuk Anda.</p>
                    <div class="icon-list-box">
                        <div class="icon"><i class="fas fa-globe"></i></div>
                        <div>
                            <h5 class="fw-bold mb-1">Konektivitas Handal</h5>
                            <p class="text-muted small mb-0">Jaringan berkualitas tinggi dengan jangkauan luas di seluruh wilayah Randuagung.</p>
                        </div>
                    </div>
                    <div class="icon-list-box">
                        <div class="icon"><i class="fas fa-tachometer-alt"></i></div>
                        <div>
                            <h5 class="fw-bold mb-1">Kecepatan Stabil</h5>
                            <p class="text-muted small mb-0">Layanan internet cepat dan stabil, ideal untuk belajar, bisnis, dan rumah.</p>
                        </div>
                    </div>
                    <div class="icon-list-box mb-0">
                        <div class="icon"><i class="fas fa-wallet"></i></div>
                        <div>
                            <h5 class="fw-bold mb-1">Harga Terjangkau</h5>
                            <p class="text-muted small mb-0">Solusi internet ekonomis tanpa mengorbankan kualitas jaringan Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="card border-0 shadow-sm rounded-4 h-100 p-5 text-center bg-white hover-lift">
                        <div class="mx-auto mb-4 d-flex align-items-center justify-content-center rounded-circle" style="width: 80px; height: 80px; background-color: #f1f5f9; border: 2px solid #e2e8f0;">
                            <i class="fas fa-award fs-1 text-primary"></i>
                        </div>
                        <h3 class="fw-bold mb-3" style="color: #0f172a;">Visi Kami</h3>
                        <p class="text-muted" style="line-height: 1.8; font-size: 1.1rem;">
                            "Menjadi penyedia layanan internet terpercaya yang mendorong kemajuan digital masyarakat Randuagung melalui koneksi yang cepat, stabil, dan terjangkau."
                        </p>
                    </div>
                </div>
            </div>

            <div class="row g-4 mb-5">
                <div class="col-12" data-aos="fade-up">
                    <div class="card border-0 shadow-sm rounded-4 h-100 p-5 bg-white">
                        <div class="d-flex align-items-center mb-4">
                            <div class="me-3 d-flex align-items-center justify-content-center rounded-circle" style="width: 55px; height: 55px; background-color: #e0f2fe;">
                                <i class="fas fa-rocket fs-4 text-primary"></i>
                            </div>
                            <h3 class="fw-bold mb-0" style="color: #0f172a;">Misi Kami</h3>
                        </div>
                        <ul class="list-unstyled mb-0 row">
                            <div class="col-md-6">
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="fas fa-check-circle text-primary mt-1 me-3 fs-5"></i> 
                                    <span class="text-muted" style="line-height: 1.6;">Menyediakan layanan internet berkualitas dengan harga yang ekonomis.</span>
                                </li>
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="fas fa-check-circle text-primary mt-1 me-3 fs-5"></i> 
                                    <span class="text-muted" style="line-height: 1.6;">Memberikan koneksi yang cepat dan stabil untuk kebutuhan rumah, pendidikan, dan usaha.</span>
                                </li>
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="fas fa-check-circle text-primary mt-1 me-3 fs-5"></i> 
                                    <span class="text-muted" style="line-height: 1.6;">Memberikan pelayanan pelanggan yang responsif dan ramah.</span>
                                </li>
                            </div>
                            <div class="col-md-6">
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="fas fa-check-circle text-primary mt-1 me-3 fs-5"></i> 
                                    <span class="text-muted" style="line-height: 1.6;">Terus mengembangkan jaringan untuk menjangkau lebih banyak wilayah di Randuagung.</span>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="fas fa-check-circle text-primary mt-1 me-3 fs-5"></i> 
                                    <span class="text-muted" style="line-height: 1.6;">Mendukung pertumbuhan masyarakat yang lebih produktif dan terhubung secara digital.</span>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center" data-aos="fade-up">
                <div class="col-lg-10">
                    <div class="rounded-4 p-4 text-center shadow-sm" style="background: linear-gradient(90deg, #e0f2fe 0%, #f8fafc 100%); border-left: 5px solid #0284c7;">
                        <h5 class="fw-bold mb-2" style="color: #0f172a;">WIFI RANDUAGUNG <span class="fw-normal text-muted">— Internet Cepat dan Murah untuk Warga Randuagung.</span></h5>
                        <p class="text-primary fw-medium mb-0 fs-5">Terhubung lebih mudah, lebih cepat, dan lebih hemat.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5" style="background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);">
        <div class="container py-5 text-center" data-aos="zoom-in">
            <h2 class="fw-bold text-white mb-4">Siap Menjadi Bagian dari Masa Depan Digital?</h2>
            <p class="text-light text-opacity-75 mb-5 fs-5">Bergabunglah bersama ribuan pelanggan kami dan nikmati layanan internet yang andal & cepat.</p>
            <a href="{{ url('/kontak') }}" class="btn btn-light rounded-pill px-5 py-3 fw-bold shadow">Hubungi Kami Sekarang</a>
        </div>
    </section>
@endsection