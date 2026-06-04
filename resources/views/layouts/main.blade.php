<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WI-RA | @yield('title', 'WiFi Randuagung')</title>

    <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        html, body { font-family: 'Plus Jakarta Sans', sans-serif; overflow-x: hidden; width: 100%; max-width: 100vw; position: relative; margin: 0; padding: 0; scroll-behavior: smooth; scroll-padding-top: 100px; }
        
        .navbar-custom { background-color: transparent; padding: 20px 0; position: fixed; top: 0; width: 100%; z-index: 1000; transition: all 0.3s ease-in-out; }
        .navbar-scrolled { background: linear-gradient(90deg, #0f172a 0%, #1e3a8a 100%) !important; padding: 12px 0; box-shadow: 0 4px 15px rgba(0,0,0,0.5); }
        .navbar-solid { background: linear-gradient(90deg, #0f172a 0%, #1e3a8a 100%) !important; padding: 12px 0; box-shadow: 0 4px 15px rgba(0,0,0,0.5); }

        .brand-container { display: flex; flex-direction: column; justify-content: center; line-height: 1.1; }
        .brand-name { font-family: 'Plus Jakarta Sans', sans-serif; font-size: 1.8rem; font-weight: 500; color: #ffffff; margin-bottom: 2px; letter-spacing: 1.5px; }
        .brand-tagline { font-family: 'Plus Jakarta Sans', sans-serif; font-size: 0.75rem; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; color: #38bdf8; }
        .brand-sub { font-family: 'Plus Jakarta Sans', sans-serif; font-size: 0.55rem; font-weight: 400; text-transform: uppercase; letter-spacing: 2px; color: #e2e8f0; margin-top: 2px; }

        .navbar-brand { transition: all 0.3s ease-in-out; }
        .navbar-brand:hover { animation: zoomInOut 1.5s infinite ease-in-out; }
        @keyframes zoomInOut { 0% { transform: scale(1); } 50% { transform: scale(1.05); } 100% { transform: scale(1); } }

        .navbar-scrolled .brand-name, .navbar-solid .brand-name { font-size: 1.5rem; }
        .navbar-scrolled .brand-tagline, .navbar-solid .brand-tagline { font-size: 0.65rem; }
        .navbar-scrolled .brand-sub, .navbar-solid .brand-sub { font-size: 0.45rem; }
        
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

    @yield('custom_css')

</head>
<body>

    @include('sections.navbar')

    <main>
        @yield('content')
    </main>

    @include('sections.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ once: true, offset: 50 });
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) { document.querySelector('.navbar-custom').classList.add('navbar-scrolled'); } 
            else { document.querySelector('.navbar-custom').classList.remove('navbar-scrolled'); }
        });
    </script>
</body>
</html>