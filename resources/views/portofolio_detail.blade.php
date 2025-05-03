@extends('partials.template_portofolio')

@section('judul', 'Detail ' . $item->title)
@section('portofolio', 'active ')

@section('css')
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    <main class="main">
        <!-- Page Title -->
        <div class="page-title dark-background">
            <div class="container d-lg-flex justify-content-between align-items-center">
                <h1 class="mb-2 mb-lg-0">{{ $item->title }}</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="current">Portfolio Details</li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- Portfolio Details Section -->
        <section id="portfolio-details" class="portfolio-details section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">

                    <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  }
                }
              </script>
                    {{-- SLIDER GAMBAR --}}
                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper">

                            <div class="swiper-wrapper align-items-center">
                                @foreach ($item->gambar as $img)
                                    <div class="swiper-slide">
                                        <div class="image-container">
                                            <img src="{{ asset('assets/img/portofolio/' . $img) }}" class="img-fluid"
                                                alt="Wahyu Nur Cahyo {{ $item->title }}">
                                        </div>
                                    </div>
                                @endforeach
                            </div>


                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    {{-- INFO PROYEK --}}
                    <div class="col-lg-4">
                        <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
                            <h3>Informasi Proyek</h3>
                            <ul>
                                <li><strong>Kategori</strong>: {{ $item->category }}</li>
                                <li><strong>Team</strong>: {{ $item->instansi }}</li>
                                <li><strong>Instansi</strong>: {{ $item->client }}</li>
                                <li><strong>Tanggal</strong>:
                                    {{ $item->date }}</li>
                                @if ($item->url)
                                    <li><strong>Link</strong>: <a href="{{ $item->url }}"
                                            target="_blank">{{ $item->url }}</a></li>
                                @endif
                            </ul>
                        </div>

                    </div>
                    <div class="row">

                      <div class="col-12 px-4">
                        
                        <div class="portfolio-description text-justify" data-aos="fade-up" data-aos-delay="300">
                          <h4>{{ $item->head_desc }}</h4>
                            <p>{!! nl2br(e($item->desc)) !!}</p>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
    <style>
        .image-container {
            aspect-ratio: 4 / 3;
            overflow: hidden;
            width: 100%;
            border-radius: 8px;
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }
    </style>
    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script>
        AOS.init();
        new Swiper('.swiper', JSON.parse(document.querySelector('.swiper-config')?.textContent || '{}'));
    </script>
@endpush
