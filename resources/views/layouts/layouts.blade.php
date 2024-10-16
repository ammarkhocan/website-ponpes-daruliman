<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('assets/icons/ic-logo-ponpes.ico') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

        {{-- AOS --}}
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        {{-- Magnific --}}
        <link rel="stylesheet" href="{{ asset('assets/css/magnific.css') }}">
        <title>Pondok Pesantren Darul Iman</title>

        <!-- Summernote CSS -->
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    </head>

    <body>

        {{-- Navbar --}}
        @include('layouts.navbar')

        {{-- Content --}}
        @yield('content')


              {{-- Footer --}}
      <section id="footer" class="bg-white">
        <div class="container py-4">
            <footer>
                <div class="row">
                    {{-- Kolom 1 Navigasi --}}
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="fw-bold mb-3">Navigasi</h5>
                        <div class="d-flex">
                            <ul class="nav flex-column me-5">
                                <li class="nav-item mb-2">
                                    <a href="/berita" class="nav-link p-0 text-muted">Berita Pesantren</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="/berita" class="nav-link p-0 text-muted">Kegiatan Pesantren</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="/berita" class="nav-link p-0 text-muted">Gallery Pesantren</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="/berita" class="nav-link p-0 text-muted">Kegiatan Sosial</a>
                                </li>
                            </ul>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2">
                                    <a href="#" class="nav-link p-0 text-muted">Alumni</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="#" class="nav-link p-0 text-muted">Info PSB</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="#" class="nav-link p-0 text-muted">Prestasi</a>
                                </li>
                                <li class="nav-item mb-2">
                                    <a href="#" class="nav-link p-0 text-muted">Video Kegiatan</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    {{-- Kolom 2 Media Sosial --}}
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="fw-bold mb-3">Follow Kami</h5>
                        <div class="d-flex">
                            <a href="https://www.instagram.com/ponpes.daruliman/" target="_blank" class="text-decoration-none text-dark">
                                <img src="{{ asset('assets/icons/instagram.svg') }}" height="30" width="30" class="me-4">
                            </a>
                            <a href="https://wa.me/6285769515062" target="_blank" class="text-decoration-none text-dark">
                                <img src="{{ asset('assets/icons/whatsapp.svg') }}" height="30" width="30" class="me-4">
                            </a>
                        </div>
                    </div>

                    {{-- Kolom 3 Kontak --}}
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="fw-bold mb-3">Kontak Kami</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-muted">infoponpes.src.id</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-muted">0813-xxxx-xxxx</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-muted">0813-xxxx-xxxx</a>
                            </li>
                        </ul>
                    </div>

                    {{-- Kolom 4 Alamat --}}
                    <div class="col-12 col-md mb-3">
                        <h5 class="fw-bold mb-3">Alamat Sekolah</h5>
                        <p>Pondok Pesantren Darul Iman, samping kopra, Kampung Umbul Kates, Desa Tanjung Sari 5, Natar. Unnamed Road, Tanjungsari, Kec. Natar, Kabupaten Lampung Selatan, Lampung 35362, Indonesia</p>
                    </div>
                </div>
            </footer>
        </div>
    </section>

    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    {{-- AOS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    {{-- JQuery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="{{ asset('assets/js/magnific.js') }}"></script>

    <script>
        const navbar = document.querySelector('.fixed-top');
        window.onscroll = () => {
        };

        // Initialize AOS
        AOS.init();

        // Magnific Popup
        $(document).ready(function () {
            $('.image-link').magnificPopup({
                type: 'image',
                retina: {
                    ratio: 1,
                    replaceSrc: function (item, ratio) {
                        return item.src.replace(/\.\w+$/, function (m) {
                            return '@2x' + m;
                        });
                    }
                }
            });
        });
    </script>   
</html>