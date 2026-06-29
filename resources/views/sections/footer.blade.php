<footer class="pt-5 pb-4" style="background-color: #0f172a; color: #94a3b8;">
    <div class="container text-start">
        <div class="row">
            
            <!-- 1. Bagian Brand / Logo -->
            <div class="col-12 col-md-3 mb-4">
                <div class="d-flex align-items-center mb-3">
                    <!-- Pastikan logo.png ada di folder public -->
                    <img src="{{ asset('logo.png') }}" alt="WI-RA Logo" style="height: 45px; margin-right: 12px;">
                    <div>
                        <h5 class="mb-0 fw-bold text-white" style="font-family: 'Plus Jakarta Sans', sans-serif; letter-spacing: 1px;">WI-RA</h5>
                        <small style="font-size: 0.65rem; color: #38bdf8; letter-spacing: 0.5px;">INTERNET SERVICE PROVIDER</small>
                    </div>
                </div>
                <p style="font-size: 0.9rem; line-height: 1.6;">Solusi internet terdepan untuk menghubungkan masa depan dengan teknologi jaringan yang andal dan optimal.</p>
            </div>

            <!-- 2. Bagian Layanan -->
            <div class="col-12 col-md-3 mb-4">
                <h5 class="fw-bold text-white mb-3" style="font-size: 1.1rem;">Layanan</h5>
                <ul class="list-unstyled" style="font-size: 0.95rem;">
                    <li class="mb-2"><a href="{{ url('/layanan/murmer') }}" class="text-decoration-none" style="color: #94a3b8; transition: 0.3s;" onmouseover="this.style.color='#ffffff'" onmouseout="this.style.color='#94a3b8'">Paket Murmer</a></li>
                    <li class="mb-2"><a href="{{ url('/layanan/premium') }}" class="text-decoration-none" style="color: #94a3b8; transition: 0.3s;" onmouseover="this.style.color='#ffffff'" onmouseout="this.style.color='#94a3b8'">Paket Premium</a></li>
                    <li class="mb-2"><a href="{{ url('/layanan/sultan') }}" class="text-decoration-none" style="color: #94a3b8; transition: 0.3s;" onmouseover="this.style.color='#ffffff'" onmouseout="this.style.color='#94a3b8'">Paket Sultan</a></li>
                </ul>
            </div>

            <!-- 3. Bagian Perusahaan (Sesuai gambar) -->
            <div class="col-12 col-md-3 mb-4">
                <h5 class="fw-bold text-white mb-3" style="font-size: 1.1rem;">Perusahaan</h5>
                <ul class="list-unstyled" style="font-size: 0.95rem;">
                    <li class="mb-2"><a href="{{ url('/') }}" class="text-decoration-none" style="color: #94a3b8; transition: 0.3s;" onmouseover="this.style.color='#ffffff'" onmouseout="this.style.color='#94a3b8'">Beranda</a></li>
                    <li class="mb-2"><a href="{{ url('/#tentang') }}" class="text-decoration-none" style="color: #94a3b8; transition: 0.3s;" onmouseover="this.style.color='#ffffff'" onmouseout="this.style.color='#94a3b8'">Tentang Kami</a></li>
                    <li class="mb-2"><a href="https://portal.randuagung.com/" target="_blank" class="text-decoration-none" style="color: #94a3b8; transition: 0.3s;" onmouseover="this.style.color='#ffffff'" onmouseout="this.style.color='#94a3b8'">Portal Randuagung</a></li>
                    <li class="mb-2"><a href="https://cctv.randuagung.com" target="_blank" class="text-decoration-none" style="color: #94a3b8; transition: 0.3s;" onmouseover="this.style.color='#ffffff'" onmouseout="this.style.color='#94a3b8'">CCTV Randuagung</a></li>
                </ul>
            </div>

            <!-- 4. Bagian Dukungan / Kontak (Sesuai gambar) -->
            <div class="col-12 col-md-3 mb-4">
                <h5 class="fw-bold text-white mb-3" style="font-size: 1.1rem;">Dukungan</h5>
                <ul class="list-unstyled" style="font-size: 0.95rem;">
                    <li class="mb-2">Perum. RANDUAGUNG Indah Blok A no 1 RT 01 RW 13, Singosari, Malang</li>
                    <li class="mb-2"><a href="mailto:handy@wifiranduagung.com" class="text-decoration-none" style="color: #94a3b8; transition: 0.3s;" onmouseover="this.style.color='#ffffff'" onmouseout="this.style.color='#94a3b8'">Handy@wifiranduagung.com</a></li>
                    <li class="mb-2">+62 851-1131-3319</li>
                </ul>
            </div>
        </div>

        <!-- Garis Pemisah Tipis -->
        <hr style="border-color: #334155; opacity: 1;" class="my-3">

        <!-- Copyright -->
        <div class="row">
            <div class="col-12 text-center" style="font-size: 0.8rem; color: #64748b;">
                © {{ date('Y') }} WI-RA. All rights reserved. Developed by 
                <a href="https://github.com/x2shin" target="_blank" class="text-decoration-none" style="color: #38bdf8; transition: 0.3s;" onmouseover="this.style.color='#ffffff'" onmouseout="this.style.color='#38bdf8'">x2shin|rdms</a>
            </div>
        </div>
    </div>
</footer>