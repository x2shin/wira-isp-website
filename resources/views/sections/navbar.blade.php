<style>
    .navbar-custom { background-color: transparent; padding: 20px 0; transition: all 0.3s ease-in-out; width: 100%; z-index: 1030; }
    .navbar-scrolled { background: linear-gradient(90deg, #0f172a 0%, #1e3a8a 100%) !important; padding: 12px 0; box-shadow: 0 4px 15px rgba(0,0,0,0.5); }
    
    .brand-container { display: flex; flex-direction: column; justify-content: center; line-height: 1.1; }
    .brand-name { font-family: 'Plus Jakarta Sans', sans-serif; font-size: 1.8rem; font-weight: 500; color: #ffffff; margin-bottom: 2px; letter-spacing: 1.5px; }
    .brand-tagline { font-family: 'Plus Jakarta Sans', sans-serif; font-size: 0.75rem; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; color: #38bdf8; }
    .brand-sub { font-family: 'Plus Jakarta Sans', sans-serif; font-size: 0.55rem; font-weight: 400; text-transform: uppercase; letter-spacing: 2px; color: #e2e8f0; margin-top: 2px; }
    
    .navbar-brand { transition: all 0.3s ease-in-out; }
    .navbar-brand:hover { transform: scale(1.05); }
    
    .navbar-scrolled .brand-name { font-size: 1.5rem; }
    .navbar-scrolled .brand-tagline { font-size: 0.65rem; }
    .navbar-scrolled .brand-sub { font-size: 0.45rem; }
    
    .navbar-custom .nav-link { color: #e2e8f0; font-weight: 500; margin: 0 4px; padding: 8px 16px !important; border-radius: 8px; transition: all 0.3s ease; }
    .navbar-custom .nav-link:hover, .navbar-custom .nav-link.active { background-color: rgba(14, 165, 233, 0.2); color: #38bdf8 !important; }
    
    .dropdown-menu-dark { background-color: #1e293b; border: 1px solid rgba(255, 255, 255, 0.15); border-radius: 10px; padding: 8px 0; box-shadow: 0 10px 25px rgba(0,0,0,0.5); }
    .dropdown-menu-dark .dropdown-item { color: #e2e8f0; transition: all 0.2s ease; font-weight: 500; }
    .dropdown-menu-dark .dropdown-item:hover { background-color: transparent; color: #38bdf8 !important; }
    
    .btn-hubungi { background: linear-gradient(135deg, #38bdf8 0%, #0ea5e9 100%); color: white; border-radius: 25px; padding: 8px 24px; font-weight: 600; border: none; transition: all 0.3s ease; }
    .btn-hubungi:hover { background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%); color: white; transform: translateY(-2px); }

    @media all and (min-width: 992px) {
        .navbar .nav-item.dropdown { padding-bottom: 10px; margin-bottom: -10px; }
        .navbar .nav-item.dropdown:hover .dropdown-menu { display: block; animation: fadeIn 0.2s ease-in-out; }
        .navbar .dropdown-menu { margin-top: 0; }
    }
    
    @keyframes fadeIn { from { opacity: 0; transform: translateY(10px); } to { opacity: 1; transform: translateY(0); } }

    @media (max-width: 991px) {
        .navbar-collapse { background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 100%); padding: 20px; border-radius: 15px; margin-top: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.5); }
        .navbar-custom .nav-link { padding: 12px 20px !important; margin: 5px 0; width: 100%; text-align: left; }
        .navbar-nav .dropdown-menu { background-color: rgba(255, 255, 255, 0.05) !important; border: none; margin-left: 20px; margin-right: 20px; }
    }
</style>

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top" id="mainNavbar">
    <div class="container" data-aos="fade-down" data-aos-duration="1000">
        
        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
            <img src="{{ asset('logo.png') }}" alt="Logo" width="55" height="55" class="rounded-circle me-3 border border-2 border-primary shadow">
            <div class="brand-container">
                <span class="brand-name">WI-RA</span>
                <span class="brand-tagline">WiFi Randuagung</span>
                <span class="brand-sub">Internet Service Provider</span>
            </div>
        </a>
        
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Beranda</a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Layanan</a>
                    <ul class="dropdown-menu dropdown-menu-dark border-0 shadow">
                        <li><a class="dropdown-item py-2" href="{{ url('/layanan/murmer') }}">Paket Murmer</a></li>
                        <li><a class="dropdown-item py-2" href="{{ url('/layanan/premium') }}">Paket Premium</a></li>
                        <li><a class="dropdown-item py-2" href="{{ url('/layanan/sultan') }}">Paket Sultan</a></li>
                        
                        <li><hr class="dropdown-divider border-secondary opacity-25"></li>
                        
                        <li>
                            <a class="dropdown-item py-2 text-info" href="https://portal.randuagung.com/" target="_blank">
                                Portal Randuagung <i class="fas fa-external-link-alt ms-2" style="font-size: 0.75rem;"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/tentang') }}">Tentang</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/kontak') }}">Kontak</a>
                </li>
                
                <li class="nav-item dropdown ms-lg-4 mt-3 mt-lg-0">
                    <a class="btn btn-hubungi w-100 text-center text-white text-decoration-none dropdown-toggle px-4 py-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Hubungi Kami
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark border-0 shadow mt-2">
                        <li>
                            <a class="dropdown-item py-2 d-flex align-items-center" href="https://wa.me/6285111313319?text=Halo%20WI-RA,%20saya%20ingin%20berkonsultasi%20mengenai%20layanan%20internet" target="_blank">
                                <i class="fab fa-whatsapp me-3 fs-5 text-success"></i> WhatsApp
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item py-2 d-flex align-items-center" href="https://mail.google.com/mail/?view=cm&fs=1&to=Handy@wifiranduagung.com" target="_blank">
                                <i class="fas fa-envelope me-3 fs-5 text-info"></i> Email (Gmail)
                            </a>
                        </li>
                    </ul>
                </li>
                
            </ul>
        </div>
    </div>
</nav>

<script>
    document.addEventListener("DOMContentLoaded", function(){
        const navbar = document.getElementById('mainNavbar');
        
        if (window.scrollY > 50) {
            navbar.classList.add('navbar-scrolled');
        }

        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                navbar.classList.add('navbar-scrolled');
            } else {
                navbar.classList.remove('navbar-scrolled');
            }
        });
    });
</script>