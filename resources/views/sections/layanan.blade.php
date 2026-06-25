<section id="layanan" class="py-5" style="background-color: #f8fafc;">
    <div class="container py-5">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold text-primary">ZAYNET INTERNET</h2>
            <p class="text-muted">Support by INTI DATA GUNA</p>
        </div>
        
        @php
        $pakets = [
            [
                'nama' => 'PAKET MURMER',
                'speed' => '10 Mbps',
                // Terhubung ke Google Sheets
                'harga' => 'Rp ' . number_format((int)($hargaSheet['murmer'] ?? 116000), 0, ',', '.'),
                'fitur' => [
                    'Unlimited Internet',
                    'Stabil untuk Streaming',
                    'Support 24 Jam',
                    'Include PPN11% + Sewa modem 5k/bln*',
                    'Biaya Pemasangan 100K'
                ]
            ],
            [
                'nama' => 'PAKET PREMIUM',
                'speed' => '25 Mbps',
                // Terhubung ke Google Sheets
                'harga' => 'Rp ' . number_format((int)($hargaSheet['premium'] ?? 150000), 0, ',', '.'),
                'popular' => true,
                'fitur' => [
                    'Unlimited Internet',
                    'Streaming Full HD',
                    'Streaming & Gaming',
                    'Support 24 Jam',
                    'Include PPN11% + Sewa modem 5k/bln*',
                    'Biaya Pemasangan 100K'
                ]
            ],
            [
                'nama' => 'PAKET SULTAN',
                'speed' => '50 Mbps',
                // Terhubung ke Google Sheets
                'harga' => 'Rp ' . number_format((int)($hargaSheet['sultan'] ?? 200000), 0, ',', '.'),
                'fitur' => [
                    'Unlimited Internet',
                    'Ping Stabil Gaming',
                    'Streaming 4K',
                    'Prioritas Support',
                    'Include PPN11% + Sewa modem 5k/bln*',
                    'Biaya Pemasangan 100K'
                ]
            ],
        ];
        @endphp

        <div class="row g-4 justify-content-center">
            @foreach($pakets as $paket)
            <div class="col-lg-4 col-md-6" data-aos="fade-up">
                <div class="card border-0 shadow-sm rounded-4 p-4 h-100 text-center bg-white position-relative {{ isset($paket['popular']) ? 'border-primary shadow-lg' : '' }}" style="transition: transform 0.3s; {{ isset($paket['popular']) ? 'border: 2px solid #4f46e5 !important; transform: scale(1.05); z-index: 2;' : '' }}" onmouseover="this.style.transform='translateY(-7px)'" onmouseout="this.style.transform='{{ isset($paket['popular']) ? 'scale(1.05)' : 'translateY(0)' }}'">
                    @if(isset($paket['popular']))
                        <span class="badge position-absolute top-0 start-50 translate-middle rounded-pill px-3 py-2" style="background-color: #4f46e5;">Most Popular</span>
                    @endif
                    <h6 class="fw-bold mb-1 mt-3 text-dark">{{ $paket['nama'] }}</h6>
                    <h2 class="fw-bold mb-3" style="color: #4f46e5;">{{ $paket['speed'] }}</h2>
                    <h4 class="fw-bold text-dark mb-4">{{ $paket['harga'] }}</h4>
                    
                    <ul class="list-unstyled small mb-4 text-start flex-grow-1 mx-auto" style="max-width: 250px;">
                        @foreach($paket['fitur'] as $fitur)
                            <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> {{ $fitur }}</li>
                        @endforeach
                    </ul>
                    
                    <a href="https://wa.me/6285111313319?text=Halo%20WI-RA,%20saya%20tertarik%20{{ $paket['nama'] }}%20{{ $paket['speed'] }}" target="_blank" class="btn btn-success rounded-pill py-2 fw-bold w-100 mt-auto">
                        <i class="fab fa-whatsapp me-2"></i>Order via WhatsApp
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>