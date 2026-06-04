<section id="beranda" class="hero-section position-relative d-flex align-items-center justify-content-center text-center overflow-hidden">
    <div class="overlay"></div>

    <i class="fas fa-wifi floating-icon icon-1"></i>
    <i class="fas fa-globe floating-icon icon-2"></i>
    <i class="fas fa-network-wired floating-icon icon-3"></i>
    <i class="fas fa-server floating-icon icon-4"></i>
    <i class="fas fa-wifi floating-icon icon-5"></i>
    <i class="fas fa-satellite-dish floating-icon icon-6"></i>
    <i class="fas fa-microchip floating-icon icon-7"></i>
    <i class="fas fa-network-wired floating-icon icon-8"></i>
    
    <div class="container position-relative" style="z-index: 2; padding-top: 200px; padding-bottom: 280px;">
        <h1 class="hero-title mb-4" data-aos="fade-up" data-aos-duration="1000">
            Solusi Internet<br>Terdepan untuk<br><span style="color: #38bdf8;">Bisnis Anda</span>
        </h1>
        <p class="hero-subtitle mb-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            Menghubungkan masa depan dengan teknologi jaringan terdepan, memberikan konektivitas yang andal dan performa optimal untuk mendukung transformasi digital perusahaan Anda.
        </p>
        
        <div class="d-flex justify-content-center gap-4 mt-5" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
            <a href="{{ url('/layanan/murmer') }}" class="btn btn-mulai text-decoration-none shadow-lg">Mulai Sekarang</a>
            <a href="{{ url('/tentang') }}" class="btn btn-pelajari text-decoration-none">Pelajari Lebih Lanjut</a>
        </div>
    </div>

    <div class="hero-bottom-gradient"></div>
</section>

<style>
    .hero-section {
        background: url('https://images.unsplash.com/photo-1558346490-a72e53ae2d4f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80') center/cover no-repeat fixed;
        position: relative;
        min-height: 100vh;
        width: 100%;
    }
    .hero-section .overlay {
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        background: linear-gradient(135deg, rgba(11, 17, 32, 0.85) 0%, rgba(30, 58, 138, 0.75) 100%);
        z-index: 1;
    }
    .hero-bottom-gradient {
        position: absolute; bottom: 0; left: 0; width: 100%; height: 250px;
        background: linear-gradient(to bottom, rgba(11, 17, 32, 0) 0%, rgba(15, 23, 42, 0.9) 40%, #e2e8f0 100%);
        z-index: 1; pointer-events: none;
    }
    .hero-title { font-size: 4.5rem; font-weight: 800; color: white; line-height: 1.2; letter-spacing: -1.5px; }
    .hero-subtitle { font-size: 1.25rem; color: #e2e8f0; font-weight: 400; max-width: 800px; margin: 0 auto; line-height: 1.7; }
    
    .btn-mulai { background: linear-gradient(90deg, #0ea5e9, #a855f7, #0ea5e9); background-size: 200% auto; color: white; border: none; padding: 16px 40px; border-radius: 50px; font-weight: 700; transition: all 0.3s ease; font-size: 1.1rem; animation: shimmer 3s linear infinite, glowPulse 2s infinite alternate; box-shadow: 0 0 15px rgba(168, 85, 247, 0.6); }
    .btn-mulai:hover { transform: translateY(-4px) scale(1.05); color: white; box-shadow: 0 0 25px rgba(168, 85, 247, 0.9); }
    
    .btn-pelajari { background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(10px); border: 2px solid rgba(56, 189, 248, 0.6); color: white; padding: 16px 40px; border-radius: 50px; font-weight: 700; transition: all 0.3s ease; font-size: 1.1rem; box-shadow: 0 0 15px rgba(56, 189, 248, 0.3); position: relative; overflow: hidden; }
    .btn-pelajari::before { content: ''; position: absolute; top: 0; left: -100%; width: 50%; height: 100%; background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent); transform: skewX(-20deg); animation: sweep 3s infinite; }
    .btn-pelajari:hover { background: rgba(56, 189, 248, 0.15); border-color: #38bdf8; color: #ffffff; transform: translateY(-4px); box-shadow: 0 0 20px rgba(56, 189, 248, 0.6); }

    @keyframes shimmer { to { background-position: 200% center; } }
    @keyframes glowPulse { 0% { box-shadow: 0 0 10px rgba(168, 85, 247, 0.5); } 100% { box-shadow: 0 0 25px rgba(14, 165, 233, 0.9), 0 0 10px rgba(14, 165, 233, 0.6) inset; } }
    @keyframes sweep { 0% { left: -100%; } 50% { left: 200%; } 100% { left: 200%; } }

    .floating-icon { position: absolute; color: rgba(56, 189, 248, 0.15); animation: floatUp ease-in-out infinite; bottom: -15%; z-index: 1; text-shadow: 0 0 25px rgba(56, 189, 248, 0.5); }
    @keyframes floatUp { 0% { transform: translateY(10vh) translateX(0) rotate(0deg) scale(0.8); opacity: 0; } 20% { opacity: 1; } 50% { transform: translateY(-50vh) translateX(40px) rotate(180deg) scale(1); } 80% { opacity: 1; } 100% { transform: translateY(-120vh) translateX(-40px) rotate(360deg) scale(1.1); opacity: 0; } }
    
    .icon-1 { left: 10%; animation-duration: 18s; animation-delay: 0s; font-size: 3rem; filter: blur(2px); }
    .icon-2 { left: 25%; animation-duration: 22s; animation-delay: 4s; font-size: 2.5rem; filter: blur(1px); }
    .icon-3 { left: 55%; animation-duration: 28s; animation-delay: 2s; font-size: 5rem; filter: blur(5px); }
    .icon-4 { left: 80%; animation-duration: 24s; animation-delay: 6s; font-size: 3.5rem; filter: blur(3px); }
    .icon-5 { left: 15%; animation-duration: 16s; animation-delay: 8s; font-size: 2rem; filter: blur(0px); }
    .icon-6 { left: 70%; animation-duration: 26s; animation-delay: 1s; font-size: 4rem; filter: blur(4px); }
    .icon-7 { left: 85%; animation-duration: 20s; animation-delay: 5s; font-size: 2.5rem; filter: blur(1px); }
    .icon-8 { left: 40%; animation-duration: 25s; animation-delay: 7s; font-size: 3rem; filter: blur(2px); }

    @media (max-width: 768px) {
        .hero-title { font-size: 3rem; }
        .hero-subtitle { font-size: 1.1rem; padding: 0 15px; }
        .hero-section .container { padding-top: 150px; padding-bottom: 220px; }
        .btn-mulai, .btn-pelajari { padding: 14px 30px; font-size: 1rem; width: 100%; display: block; margin-bottom: 10px; }
        .d-flex.gap-4 { flex-direction: column; gap: 10px !important; }
    }
</style>