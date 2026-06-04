@extends('layouts.main')

@section('title', 'Hubungi Kami')

@section('custom_css')
<style>
    .page-hero { background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%); padding: 150px 0 80px 0; color: white; }
    .form-control, .form-select { border-radius: 10px; padding: 12px 15px; border: 1px solid #cbd5e1; }
    .form-control:focus, .form-select:focus { border-color: #3b82f6; box-shadow: 0 0 0 0.25rem rgba(59, 130, 246, 0.25); }
    .contact-info-icon { width: 40px; height: 40px; background-color: #e0f2fe; color: #0284c7; border-radius: 50%; display: flex; align-items: center; justify-content: center; }
</style>
@endsection

@section('content')
    <div class="page-hero text-center">
        <div class="container" data-aos="fade-up">
            <h1 class="fw-bold display-5 mb-3">Hubungi Kami</h1>
            <p class="fs-5 max-w-2xl mx-auto text-light text-opacity-90">Siap membantu Anda mendapatkan koneksi internet terbaik. Tim customer service kami siap melayani 24/7.</p>
        </div>
    </div>

    <section class="py-5" style="background-color: #f8fafc;">
        <div class="container py-5">
            <div class="row g-5">
                
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 bg-white">
                        <h4 class="fw-bold mb-2">Konsultasi Gratis</h4>
                        <p class="text-muted small mb-4">Isi form berikut untuk mendapatkan konsultasi gratis mengenai kebutuhan internet Anda</p>
                        
                        <form id="formKonsultasi">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label small fw-semibold">Nama Lengkap</label>
                                    <input type="text" id="inputNama" class="form-control" placeholder="Masukkan nama Anda">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-semibold">No. Telepon / WA</label>
                                    <input type="text" id="inputWa" class="form-control" placeholder="08xxx">
                                </div>
                                <div class="col-12">
                                    <label class="form-label small fw-semibold">Email</label>
                                    <input type="email" id="inputEmail" class="form-control" placeholder="contoh@gmail.com">
                                </div>
                                <div class="col-12">
                                    <label class="form-label small fw-semibold">Jenis Layanan</label>
                                    <select id="inputLayanan" class="form-select">
                                        <option value="Belum Menentukan" selected>Pilih layanan yang diinginkan</option>
                                        <option value="Broadband Internet">Broadband Internet</option>
                                        <option value="Dedicated Internet">Dedicated Internet</option>
                                        <option value="SOHO">SOHO</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label small fw-semibold">Pesan</label>
                                    <textarea id="inputPesan" class="form-control" rows="4" placeholder="Ceritakan kebutuhan internet Anda..."></textarea>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="button" onclick="kirimDataKeWA()" class="btn w-100 rounded-3 py-3 fw-bold text-white shadow-sm" style="background: linear-gradient(90deg, #38bdf8, #0284c7); border: none;">
                                        Kirim Pesan <i class="fab fa-whatsapp ms-2 fs-5"></i>
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left">
                    <div class="ps-lg-4">
                        <div class="mb-5">
                            <h4 class="fw-bold mb-4">Informasi Kontak</h4>
                            
                            <div class="d-flex align-items-start mb-4">
                                <div class="contact-info-icon me-3 mt-1"><i class="fas fa-phone-alt"></i></div>
                                <div>
                                    <h6 class="fw-bold mb-1">Telepon & WhatsApp</h6>
                                    <p class="text-muted mb-0">0851-1131-3319 (Customer Service)</p>
                                </div>
                            </div>
                            
                            <div class="d-flex align-items-start mb-4">
                                <div class="contact-info-icon me-3 mt-1"><i class="fas fa-envelope"></i></div>
                                <div>
                                    <h6 class="fw-bold mb-1">Email Kami</h6>
                                    <p class="text-muted mb-0">Handy@wifiranduagung.com</p>
                                </div>
                            </div>
                            
                            <div class="d-flex align-items-start mb-4">
                                <div class="contact-info-icon me-3 mt-1"><i class="fas fa-map-marker-alt"></i></div>
                                <div>
                                    <h6 class="fw-bold mb-1">Alamat Kantor</h6>
                                    <p class="text-muted mb-0">Perum. RANDUAGUNG Indah Blok A no 1 RT 01 RW 13, Singosari, Malang</p>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-4 overflow-hidden shadow-sm" style="height: 250px;">
                           <iframe src="https://maps.google.com/maps?q=Perum.%20RANDUAGUNG%20Indah%20Blok%20A,%20Singosari,%20Malang&t=&z=15&ie=UTF8&iwloc=&output=embed" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script>
        function kirimDataKeWA() {
            // Ambil data dari form
            var nama = document.getElementById('inputNama').value;
            var wa = document.getElementById('inputWa').value;
            var email = document.getElementById('inputEmail').value;
            var layanan = document.getElementById('inputLayanan').value;
            var pesan = document.getElementById('inputPesan').value;

            // Validasi: Cegah form terkirim jika Nama, WA, atau Pesan kosong
            if(nama.trim() === '' || wa.trim() === '' || pesan.trim() === '') {
                alert('Tolong lengkapi Nama, No. WhatsApp, dan Pesan Anda terlebih dahulu ya!');
                return;
            }

            // Susun template pesan
            var textWa = "Halo tim WI-RA, saya ingin berkonsultasi mengenai layanan internet.%0A%0A" +
                         "*Nama:* " + nama + "%0A" +
                         "*No WA:* " + wa + "%0A" +
                         "*Email:* " + (email ? email : "-") + "%0A" +
                         "*Layanan:* " + layanan + "%0A" +
                         "*Pesan:* " + pesan;

            // Buat URL API WhatsApp
            var urlWa = "https://wa.me/6285111313319?text=" + textWa;
            
            // Buka tab WhatsApp
            window.open(urlWa, '_blank');
        }
    </script>
@endsection