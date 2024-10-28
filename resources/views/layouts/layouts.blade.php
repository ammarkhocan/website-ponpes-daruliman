<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('assets/icons/ic-logo-ponpes.ico') }}">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

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

    <footer>
        <div class="container">
          <div class="row">
            <div class="col-md-5">
              <div class="footer-col">
                <div class="brand">
                  <img
                    src="{{ asset('assets/icons/logo-ponpes.png')}}"
                    height="70"
                    alt="Logo"
                    loading="lazy"
                  />
                  <h1>Pondok Pesantren Darul Iman</h1>
                </div>
                <p class="tentang">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe,
                  quas. Voluptas earum ducimus provident? Accusantium enetur quis
                  corrupti quaerat eos nobis minus asperiores in excepturi, error
                  vitae ut, corporis ab.
                </p>
                <ul class="sosmed">
                  <li>
                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                  </li>
                  <li>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                  </li>
                  <li>
                    <a href=""><i class="fa-brands fa-youtube"></i></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="footer-col">
                <h2>Kontak Kami</h2>
                <p class="alamat">
                  Jln Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                  Hic, voluptas!
                </p>
                <ul class="kontak">
                  <li>
                    <i class="fa-solid fa-envelope"></i>Email :
                    ponpesdaruliman@gmail.com
                  </li>
                  <li>
                    <i class="fa-solid fa-phone"></i> Telp/Fax : 0892 - 1233 -
                    1233
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-3">
              <div class="footer-col">
                <h2>Navigasi</h2>
                <ul class="footer-nav">
                  <li>
                    <a href="">Profil</a>
                  </li>
                  <li>
                    <a href="">Visi dan Misi</a>
                  </li>
                  <li>
                    <a href="">Struktur Organisasi</a>
                  </li>
                  <li>
                    <a href="">Sumber Daya Manusia</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container text-center">
              <h6>Hak Cipta dilindungi. © 2024 <a href="">markhodev</a></h6>
            </div>
          </div>
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
