<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('assets/icons/ic-logo-ponpes.ico') }}">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific.css') }}">

    {{-- Meta Tags for WhatsApp --}}
    @if (Request::segment(1) == '')
        <meta property="og:title" content="Pesantren Darul Iman" />
        <meta name="description" content="Sekolah terbaik untuk generasi muda yang terampil, berkarakter, dan berwawasan Qur'ani" />
        <meta property="og:url" content="http://pesantrendaruliman.com" />
        <meta property="og:description" content="Pesantren Darul Iman" />
        <meta property="og:image" content="{{ asset('assets/icons/logo.ponpes.png') }}" />
        <meta property="og:type" content="article" />
        <title>Pondok Pesantren Darul Iman</title>
    @elseif (Request::segment(1) == 'detail')
        <meta property="og:title" content="{{ $artikel->judul }}" />
        <meta name="description" content="{{ $artikel->judul }}" />
        <meta property="og:url" content="http://pesantrendaruliman.com/detail/{{ $artikel->slug }}" />
        <meta property="og:description" content="{{ $artikel->judul }}" />
        <meta property="og:image" content="{{ $artikel->image ? asset('storage/artikel/' . $artikel->image) : asset('assets/icons/logo.ponpes.png') }}" />
        <meta property="og:type" content="article" />
        <title>Pondok Pesantren Darul Iman | {{ $artikel->judul }}</title>
    @endif

    <!-- Summernote CSS -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
</head>

<body>

    {{-- Navbar --}}
    @include('layouts.navbar')

    {{-- Content --}}
    @yield('content')

    <footer class="bg-primary text-white text-center text-lg-start" style="width: 100%;">
        <!-- Grid container -->
        <div class="container p-4 d-flex justify-content-center">
            <div class="row w-75">
                <!-- Column 1: Logo and Social Links -->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <div class=" d-flex align-items-center justify-content-center mb-4 mx-auto" style="width: 150px; height: 150px;">
                        <img src="{{ asset('assets/icons/ic-logo-ponpes-02.png')}}" height="70" alt="Logo" loading="lazy" />
                    </div>
                    <p>Homeless animal shelter, a budgetary unit of the Capital City of Warsaw</p>
                    <ul class="list-unstyled d-flex justify-content-center">
                        <li>
                            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                                <i class='bx bxl-facebook'></i>
                            </a>
                        </li>
                        <li>
                            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                                <i class='bx bxl-instagram'></i>
                            </a>
                        </li>
                        <li>
                            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
                                <i class='bx bxl-youtube'></i>
                            </a>
                        </li>
                    </ul>
                </div>
    
                <!-- Column 2: Contact Information -->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">KONTAK KAMI</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="#!" class="text-white">When your pet is missing</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white">Recently found</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white">How to adopt?</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white">Pets for adoption</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white">Material gifts</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white">Help with walks</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white">Volunteer activities</a>
                        </li>
                    </ul>
                </div>
    
                <!-- Column 3: Navigation Links -->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">NAVIGASI</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="#!" class="text-white">General information</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white">About the shelter</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white">Statistic data</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white">Job</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white">Tenders</a>
                        </li>
                        <li class="mb-2">
                            <a href="#!" class="text-white">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2024 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">daruliman.com</a>
        </div>
    </footer>
    
    
    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    {{-- AOS JS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    {{-- jQuery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="{{ asset('assets/js/magnific.js') }}"></script>

    <script>
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

    {{-- Summernote JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 200,
            });
        });
    </script>

</body>
</html>
