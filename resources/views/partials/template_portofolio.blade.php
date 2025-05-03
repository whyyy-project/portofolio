<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('judul', 'Wahyu Nur Cahyo | Portofolio')</title>
    
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

    <!-- Main CSS File -->
    <link href="{{ url('') }}/assets/css/main.css" rel="stylesheet">
    @yield('css')
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



    <header class="header dark-background d-flex flex-column mobile-header">
        <div class="profile-img">
            <img src="{{ url('') }}/assets/img/profil.jpg" alt="" class="img-fluid rounded-circle" alt="Wahyu Nur Cahyo">
        </div>

        <a href="{{ url('/') }}" class="logo d-flex align-items-center justify-content-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="sitename">Wahyu Nur Cahyo</h1>
        </a>

        <div class="social-links text-center">
            <a href="https://www.tiktok.com/@cumatukangketik" target="_blank" class="tiktok"><i
                    class="bi bi-tiktok"></i></a>
            <a href="https://www.instagram.com/cumatukangketik" target="_blank" class="social-links"><i
                    class="bi bi-instagram"></i></a>
            <a href="https://www.linkedin.com/in/wahyu-nur-cahyo-75b502268" target="_blank" class="linkedin"><i
                    class="bi bi-linkedin"></i></a>
            <a href="https://www.facebook.com/share/12HZPePEgML/" target="_blank" class="facebook"><i
                    class="bi bi-facebook"></i></a>
            <a href="https://github.com/whyyy-project" target="_blank" class="twitter"><i class="bi bi-github"></i></a>
        </div>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ url('/') }}#hero"><i class="bi bi-house navicon"></i>Home</a></li>
                <li><a href="{{ url('/') }}#about"><i class="bi bi-person navicon"></i> About</a></li>
                <li><a href="{{ url('/') }}#resume"><i class="bi bi-file-earmark-text navicon"></i> Resume</a></li>
                <li><a href="{{ url('/') }}#portfolio" class="@yield('portofolio', '')"><i class="bi bi-images navicon"></i> Portfolio</a></li>
                <li><a href="{{ url('/') }}#contact"><i class="bi bi-envelope navicon"></i> Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Pindahkan navmenu ke luar header -->
    <nav id="navmenu-mobile" class="navmenu-mobile d-xl-none">
        <ul>
            <li><a href="{{ url('/') }}#hero"><i class="bi bi-house navicon"></i><span>Home</span></a></li>
            <li><a href="{{ url('/') }}#about"><i class="bi bi-person navicon"></i><span>About</span></a></li>
            <li><a href="{{ url('/') }}#resume"><i class="bi bi-file-earmark-text navicon"></i><span>Resume</span></a></li>
            <li><a href="{{ url('/') }}#portfolio" class="@yield('portofolio', '')"><i class="bi bi-images navicon"></i><span>Portfolio</span></a></li>
            <li><a href="{{ url('/') }}#contact"><i class="bi bi-envelope navicon"></i><span>Contact</span></a></li>
        </ul>
    </nav>

@yield('content')

    <footer id="footer" class="footer position-relative light-background">

        <div class="container">
            <div class="copyright text-center ">
                <p>© {{ date('Y') }} <span>Copyright</span> <strong class="px-1 sitename">Whyyy-Project</strong>
                    <span>All Rights
                        Reserved</span>
                </p>
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a
                    href="https://themewagon.com">ThemeWagon</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>



    <!-- Preloader -->
    {{-- <div id="preloader"></div> --}}

    <!-- Vendor JS Files -->
    <script src="{{ url('') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    {{-- <script src="{{ url('') }}/assets/vendor/php-email-form/validate.js"></script> --}}
    <script src="{{ url('') }}/assets/vendor/aos/aos.js"></script>
    <script src="{{ url('') }}/assets/vendor/typed.js/typed.umd.js"></script>
    <script src="{{ url('') }}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ url('') }}/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="{{ url('') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ url('') }}/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="{{ url('') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ url('') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="{{ url('') }}/assets/js/main.js"></script>
@stack('scripts')
</body>

</html>