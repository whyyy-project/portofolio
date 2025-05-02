<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title', 'Portofolio | Wahyu Nur Cahyo')</title>
    
    <!-- Meta SEO -->
    <meta name="description" content="Portofolio pribadi Wahyu Nur Cahyo, seorang Web Developer dari Bojonegoro, Jawa Timur yang berfokus pada Laravel, CodeIgniter, dan Tailwind CSS.">
    <meta name="author" content="Wahyu Nur Cahyo">
    <meta name="keywords" content="Wahyu Nur Cahyo, portfolio web developer, Laravel, CodeIgniter, PHP, Tailwind CSS, proyek web, developer Indonesia">

    <!-- Open Graph (Facebook, LinkedIn, dll) -->
    <meta property="og:title" content="Wahyu Nur Cahyo | Portfolio Web Developer & Teknologi">
    <meta property="og:description" content="Portofolio pribadi Wahyu Nur Cahyo, Web Developer fokus Laravel, CI4, Tailwind. Temukan proyek, pengalaman, dan keahliannya.">
    <meta property="og:image" content="{{ url('') }}/assets/img/profil.jpg">
    <meta property="og:url" content="{{ url('') }}">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Wahyu Nur Cahyo | Portfolio Web Developer & Teknologi">
    <meta name="twitter:description" content="Portofolio pribadi Wahyu Nur Cahyo, Web Developer fokus Laravel, CI4, Tailwind. Temukan proyek, pengalaman, dan keahliannya.">
    <meta name="twitter:image" content="{{ url('') }}/assets/img/profil.jpg">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ url('') }}/favicon.ico" type="image/x-icon">
    <link rel="icon" href="{{ url('') }}/assets/img/icon.png" type="image/png">
    <link rel="icon" href="{{ url('') }}/assets/img/icon.png" type="image/png">
    <link rel="apple-touch-icon" href="{{ url('') }}/assets/img/icon.png">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Poppins&family=Raleway&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ url('') }}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ url('') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ url('') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- Main CSS File -->
    <link href="{{ url('') }}/assets/css/main.css" rel="stylesheet">
</head>


<body class="index-page">

    @if (session('success'))
        <div class="custom-alert" id="successNotification">
            <div class="custom-alert-img"></div>
            <div class="custom-alert-textbox">
                <div class="custom-alert-textcontent">
                    <p class="custom-alert-title">Berhasil!</p>
                </div>
                <p class="custom-alert-message">{{ session('success') }}</p>
            </div>
        </div>
        <script>
            window.addEventListener('DOMContentLoaded', () => {
                const notif = document.getElementById('successNotification');
                if (notif) {
                    setTimeout(() => {
                        notif.style.opacity = '0';
                        notif.style.transform = 'translateX(100%)';
                        setTimeout(() => notif.remove(), 1000);
                    }, 15000);
                }
            });
        </script>
    @endif


 @yield('content')

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    {{-- <script src="assets/vendor/php-email-form/validate.js"></script> --}}
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/typed.js/typed.umd.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
