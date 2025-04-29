<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Wahyu Nur Cahyo | Portofolio</title>
    
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
            <img src="{{ url('') }}/assets/img/profil.jpg" alt="" class="img-fluid rounded-circle" alt="Foto Wahyu Nur Cahyo">
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
            <a href="https://x.com/whyyyproject" target="_blank" class="twitter"><i class="bi bi-twitter-x"></i></a>
        </div>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i>Home</a></li>
                <li><a href="#about"><i class="bi bi-person navicon"></i> About</a></li>
                <li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i> Resume</a></li>
                <li><a href="#portfolio"><i class="bi bi-images navicon"></i> Portfolio</a></li>
                <li><a href="#contact"><i class="bi bi-envelope navicon"></i> Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Pindahkan navmenu ke luar header -->
    <nav id="navmenu-mobile" class="navmenu-mobile d-xl-none">
        <ul>
            <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i><span>Home</span></a></li>
            <li><a href="#about"><i class="bi bi-person navicon"></i><span>About</span></a></li>
            <li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i><span>Resume</span></a></li>
            <li><a href="#portfolio"><i class="bi bi-images navicon"></i><span>Portfolio</span></a></li>
            <li><a href="#contact"><i class="bi bi-envelope navicon"></i><span>Contact</span></a></li>
        </ul>
    </nav>


    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

            <img src="{{ url('') }}/assets/img/background.jpg" alt="" data-aos="fade-in"
                class="hero-img">

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <h2>Wahyu Nur Cahyo</h2>

                <p>I'm <span class="typed" data-typed-items="Freelancer, Programmer, Web Developer"></span><span
                        class="typed-cursor typed-cursor--blink" aria-hidden="true"></span><span
                        class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
            </div>

        </section><!-- /Hero Section -->
        {{-- profile section --}}
        <section class="section mobile-section dark-background flex-column align-items-center justify-content-center">
            <div class="profile-img w-100 d-flex justify-content-center align-items-center mb-5">
                <img src="{{ url('') }}/assets/img/profil.jpg" alt="" class="img-fluid rounded-circle"
                    width="200px;" alt="Foto Wahyu Nur Cahyo">
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
                <a href="https://x.com/whyyyproject" target="_blank" class="twitter"><i
                        class="bi bi-twitter-x"></i></a>
            </div>
        </section>
        <!-- About Section -->
        <section id="about" class="about section light-backgorund">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up" style="margin-bottom:-40px;">
                <h2>About</h2>
                <div class="text-justify">
                    <p>
                        Halo! Saya Wahyu Nur Cahyo, seorang web developer asal Bojonegoro yang berfokus pada pengembangan aplikasi berbasis CodeIgniter 4, PHP basic, dan Laravel. Saya terbiasa menggunakan Tailwind dan Bootstrap untuk membangun tampilan web yang modern, responsif, dan efisien.
                    </p>
                    <i>
                        Dengan pengalaman lebih dari 1 tahun, saya telah membantu berbagai klien lokal mengembangkan sistem informasi, landing page, hingga dashboard yang mendukung operasional mereka secara digital. Saya dikenal sebagai developer yang telaten, senang belajar hal baru, dan fokus pada hasil kerja yang rapi dan optimal.
                    </i>
                </div>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-2 justify-content-center">
                    <div class="col-lg-4">
                        <img src="{{ url('') }}/assets/img/profil.jpg" class="img-fluid" alt="Foto Wahyu Nur Cahyo" style="border-top-right-radius: 10px; border-bottom-left-radius: 10px;">
                    </div>
                    <div class="col-lg-8 content">
                        <p class="fst-italic py-3">
                            Berikut merupakan data pribadi saya :
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Tanggal Lahir:</strong> <span>24
                                            Desember 2000</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                                        <span><a href="https://portofolio.sirese.biz.id/"
                                                class="text-decoration-none text-dark">portofolio.sirese.biz.id</a></span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Telepon/WhatsApp:</strong>
                                        <span>+62 813 8129 3323</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Kota:</strong> <span>Bojonegoro,
                                            Jawa Timur, Indonesia</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                  @php
                                  use Carbon\Carbon;
                              
                                  // Contoh tanggal lahir
                                  $tanggalLahir = '2000-12-24';
                              
                                  // Hitung usia
                                  $usia = Carbon::parse($tanggalLahir)->age;
                              @endphp
                                    <li><i class="bi bi-chevron-right"></i> <strong>Usia:</strong> <span>{{ $usia }}
                                            Tahun</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Pendidikan:</strong>
                                        <span>S1 Teknik Informatika</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                        <span>wahyu.nur.cahyo.id@gmail.com</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Status Pernikahan:</strong>
                                        <span>Belum Menikah</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <p class="py-3 text-justify">
                            Saya percaya bahwa teknologi bukan hanya soal kode, tapi juga solusi. Jika Anda membutuhkan
                            partner teknis yang bisa diajak berdiskusi dan membangun solusi digital bersama, jangan ragu
                            untuk menghubungi saya.
                        </p>
                    </div>
                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Resume Section -->
        <section id="resume" class="resume section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Resume</h2>
                <p>
                    Berbagai pengalaman yang telah saya jalani selama ini
                </p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="resume-title">Pendidikan</h3>
                        <div class="resume-item">
                            <h4>Rekayasa Perangkat Lunak</h4>
                            <h5>2016 - 2019</h5>
                            <p><em>SMK Negeri 1 Purwosari, Bojonegoro, Jawa Timur</em></p>
                            <p class="text-justify">
                                Di SMK Negeri 1 Purwosari, saya mengambil jurusan Rekayasa Perangkat Lunak yang
                                memperkenalkan saya pada dunia pemrograman untuk pertama kalinya. Meskipun saya
                                menghadapi keterbatasan dalam hal perangkat keras, seperti laptop atau komputer yang
                                kurang memadai untuk pengembangan perangkat lunak, saya tetap berusaha semaksimal
                                mungkin untuk mempelajari dasar-dasar pemrograman. Di sini saya mulai mengembangkan
                                minat yang mendalam terhadap teknologi dan pemrograman, dan terus mengasah keterampilan
                                saya meskipun menghadapi banyak tantangan. Pengalaman ini membentuk dasar pengetahuan
                                saya yang kemudian saya kembangkan lebih lanjut di tingkat pendidikan tinggi.
                            </p>
                        </div><!-- Edn Resume Item -->
                        <div class="resume-item">
                            <h4>S1 Teknik Informatika</h4>
                            <h5>2020 - 2021 (Semester 1-2)</h5>
                            <p><em>Universitas Islam Lamongan, Lamongan, Jawa Timur</em></p>
                            <p class="text-justify">
                                Pada awalnya, saya memulai pendidikan di Universitas Islam Lamongan di Program Studi
                                Teknik Informatika. Namun, setelah menjalani dua semester, saya memutuskan untuk pindah
                                universitas. Keputusan ini diambil karena beberapa pertimbangan, termasuk biaya hidup
                                yang lebih tinggi dan kurangnya fokus pada materi pemrograman yang mendalam. Sebagian
                                besar materi lebih berfokus pada teori umum dan kurang mengakomodasi kebutuhan saya
                                untuk mendalami aspek praktis pemrograman. Saya juga menghadapi kesulitan dalam
                                menyesuaikan diri dengan metode pengajaran yang ada, yang akhirnya mendorong saya untuk
                                mencari lingkungan pendidikan yang lebih mendukung tujuan karier saya di bidang
                                teknologi dan pemrograman.
                            </p>
                        </div><!-- Edn Resume Item -->

                        <div class="resume-item">
                            <h4>S1 Teknik Informatika</h4>
                            <h5>2021 - 2024 (Semester 3 - Lulus)</h5>
                            <p><em>Universitas Nahdlatul Ulama Sunan Giri, Bojonegoro, Jawa Timur</em></p>
                            <p class="text-justify">
                                Setelah memulai pendidikan di Universitas Islam Lamongan, saya melanjutkan studi di
                                Universitas Nahdlatul Ulama Sunan Giri Bojonegoro dengan membawa konversi nilai dari
                                kampus sebelumnya. Keputusan untuk pindah universitas diambil dengan pertimbangan yang
                                matang, termasuk biaya hidup yang lebih terjangkau dan adanya program studi yang lebih
                                mendalami materi pemrograman. Di universitas ini, saya dapat menggali lebih dalam
                                tentang dunia pemrograman dan teknologi informasi, serta mengikuti berbagai mata kuliah
                                yang memperkuat pengetahuan praktis dan teori saya dalam pengembangan perangkat lunak.
                                Berkat ketekunan dan dedikasi dalam belajar, saya berhasil lulus dengan predikat IPK
                                3.75, yang menjadi bukti komitmen saya terhadap pendidikan dan pengembangan diri di
                                bidang ini.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6 lh-sm" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="resume-title">Pengalaman Kerja</h3>

                        <div class="resume-item">
                            <h4>Warehouse Operator</h4>
                            <h5>2019 - 2020</h5>
                            <p><em>PT. Astra Honda Motor, Bekasi, Jawa Barat</em></p>
                            <ul>
                                <li>Melakukan inventarisasi stok sebelum proses produksi dimulai.</li>
                                <li>Melaksanakan pemeriksaan kualitas (quality check) barang sebelum masuk ke lini
                                    produksi.</li>
                                <li>Menyiapkan barang sesuai dengan perencanaan produksi harian.</li>
                                <li>Menerapkan sistem FIFO (First In, First Out) untuk menjaga kualitas dan efisiensi
                                    alur barang.</li>
                                <li>Melakukan inventarisasi stok setelah proses produksi selesai.</li>
                                <li>Melaksanakan kegiatan stock opname secara berkala sesuai dengan jadwal yang telah
                                    ditentukan.</li>
                            </ul>
                        </div><!-- Edn Resume Item -->
                        <div class="resume-item">
                            <h4>Internship</h4>
                            <h5>2023</h5>
                            <p><em>Dinas Kebudayaan dan Pariwisata, Bojonegoro, Jawa Timur</em></p>
                            <ul>
                                <li>Membantu menyusun laporan RAB keuangan untuk berbagai kegiatan yang diselenggarakan
                                    oleh dinas</li>
                                <li>Menyusun proposal kegiatan yang mendukung perencanaan acara kebudayaan dan
                                    pariwisata.</li>
                                <li>Membuat surat undangan untuk peserta dan pemangku kepentingan terkait acara.</li>
                                <li>Memberikan dukungan IT untuk memastikan kelancaran kegiatan yang melibatkan
                                    perangkat keras dan perangkat lunak.</li>
                                <li>Terlibat sebagai panitia kegiatan lapangan untuk memastikan pelaksanaan acara
                                    berjalan dengan lancar, termasuk koordinasi logistik dan keperluan lainnya.</li>
                            </ul>
                        </div><!-- Edn Resume Item -->
                        <div class="resume-item">
                            <h4>Freelance Web Developer</h4>
                            <h5>2024 - Sekarang</h5>
                            <p><em>Mudaraga Team, Nawala Dev, Whyyy-Project</em></p>
                            <ul>
                                <li>Mengkustomisasi template untuk memenuhi kebutuhan UI/UX sesuai project.</li>
                                <li>Menyesuaikan warna, layout, navigasi, dan komponen UI agar sesuai branding client.
                                </li>
                                <li>Merancang arsitektur halaman, routing, dan struktur database.</li>
                                <li>Mengembangkan website berbasis CodeIgniter 4 dengan server-side rendering.</li>
                                <li>Membangun fitur seperti form, login system, manajemen konten, dan dashboard.</li>
                                <li>Melakukan pengujian multi-perangkat untuk memastikan performa dan kompatibilitas.
                                </li>
                                <li>Melakukan deployment baik secara localserver maupun web server menggunakan FTP, Git,
                                    atau upload langsung.</li>
                                <li>Memberikan layanan maintenance berkala: backup, update, troubleshooting, dan
                                    optimasi.</li>
                            </ul>
                        </div><!-- Edn Resume Item -->

                    </div>

                </div>

            </div>

        </section><!-- /Resume Section -->

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Portfolio</h2>
                <p>Berikut merupakan portofolio saya yang memuat rangkuman pengalaman kerja dan proyek pengembangan web
                    yang telah saya jalani.</p>
            </div><!-- End Section Title -->

            <div class="container">
              @foreach($portofolio as $data)
                <div class="isotope-layout" data-default-filter="*" data-layout="masonry"
                    data-sort="original-order">

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/{{ $data->gambar[0] }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>{{ $data->tittle }}</h4>
                                    <p>{{ $data->sort_desc }}</p>
                                    <a href="{{ url('') }}/assets/img/portfolio/{{ $data->gambar[0] }}" title="{{ $data->tittle }}"
                                        data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="{{ url('/detail/'.$data->slug) }}" title="More Details"
                                        class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                    </div><!-- End Portfolio Container -->

                </div>
                @endforeach

            </div>

        </section><!-- /Portfolio Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up" style="margin-bottom:-10px;">
                <h2>Contact</h2>
                <p>Saya terbuka untuk berbagai peluang kerja. Silakan hubungi saya jika Anda tertarik untuk merekrut
                    saya.</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-5">

                        <div class="info-wrap">
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h3>Address</h3>
                                    <p>Desa Turi, RT/RW 002/001, Kec Tambakrejo, Kab Bojonegoro, Jawa Timur 62166</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-telephone flex-shrink-0"></i>
                                <div>
                                    <h3>Call Us</h3>
                                    <p>+62 813 8129 3323</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h3>Email Us</h3>
                                    <p>wahyu.nur.cahyo.id@gmail.com</p>
                                </div>
                            </div><!-- End Info Item -->
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7915.120485662386!2d111.68933013768456!3d-7.29076927873079!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79d7120ca2b7dd%3A0xd0dd56d8d8cd6c77!2sTuri%2C%20Tambakrejo%2C%20Bojonegoro%20Regency%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1744567479358!5m2!1sen!2sid"
                                style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>


                    <div class="col-lg-7">
                        <form action="{{ route('contact.send') }}" method="POST" class="php-email-form"
                            data-aos="fade-up" data-aos-delay="200">
                            @csrf
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <label for="name-field" class="pb-2">Your Name</label>
                                    <input type="text" name="name" id="name-field" class="form-control"
                                        required>
                                </div>

                                <div class="col-md-6">
                                    <label for="email-field" class="pb-2">Your Email</label>
                                    <input type="email" name="email" id="email-field" class="form-control"
                                        required>
                                </div>

                                <div class="col-md-12">
                                    <label for="subject-field" class="pb-2">Subject</label>
                                    <input type="text" name="subject" id="subject-field" class="form-control"
                                        required>
                                </div>

                                <div class="col-md-12">
                                    <label for="message-field" class="pb-2">Message</label>
                                    <textarea name="message" id="message-field" class="form-control" rows="10" required></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <button type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    {{-- <div class="col-lg-7">
                        <form id="contact-form" action="javascript:void(0);" class="php-email-form"
                            data-aos="fade-up" data-aos-delay="200">
                            @csrf
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <label for="name-field" class="pb-2">Your Name</label>
                                    <input type="text" name="name" id="name-field" class="form-control"
                                        required>
                                </div>

                                <div class="col-md-6">
                                    <label for="email-field" class="pb-2">Your Email</label>
                                    <input type="email" name="email" id="email-field" class="form-control"
                                        required>
                                </div>

                                <div class="col-md-12">
                                    <label for="subject-field" class="pb-2">Subject</label>
                                    <input type="text" name="subject" id="subject-field" class="form-control"
                                        required>
                                </div>

                                <div class="col-md-12">
                                    <label for="message-field" class="pb-2">Message</label>
                                    <textarea name="message" id="message-field" class="form-control" rows="10" required></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <button type="submit" id="submit-btn">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <script>
                        document.getElementById('submit-btn').addEventListener('click', function() {
                            var name = document.getElementById('name-field').value;
                            var email = document.getElementById('email-field').value;
                            var subject = document.getElementById('subject-field').value;
                            var message = document.getElementById('message-field').value;

                            var mailtoLink = 'mailto:wahyu.nur.cahyo.id@gmail.com' +
                                '?subject=' + encodeURIComponent(subject) +
                                '&body=' + encodeURIComponent('Nama : ' + name + '\nEmail : ' + email + '\n\n' + message);

                            window.location.href = mailtoLink;
                        });
                    </script> --}}

                </div>

            </div>

        </section><!-- /Contact Section -->

    </main>

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
