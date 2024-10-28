@extends('layouts.layouts')    

@section('content')
<section id="hero">
  <div class="container text-center text-white">
    <div class="hero-title" data-aos="fade-up">
      <div class="hero-text">Selamat Datang Di Pondok Pesantren Darul Iman</div>
      <p>Sekolah terbaik untuk generasi muda yang terampil, berkarakter dan berwawasan Qur'ani</p>
    </div>
  </div>
</section>

{{-- <section id="program" style="margin-top: -30px">
  <div class="container col-xxl-9">
    <div class="row">
      <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-down">
        <div class="bg-white rounded-3 shadow p-3 mb-2 d-flex justify-content-between align-items-center">
          <div>
            <h5>Pendidikan<br>Berkualitas</h5>
          </div>
          <img src="{{ asset('assets/icons/ic-book.png') }}" height="55" width="55" alt="Ikon Pendidikan Berkualitas">
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-down">
        <div class="bg-white rounded-3 shadow p-3 mb-2 d-flex justify-content-between align-items-center">
          <div>
            <h5>Pendidikan<br>Berkarakter</h5>
          </div>
          <img src="{{ asset('assets/icons/ic-globe.png') }}" height="55" width="55" alt="Ikon Pendidikan Berkarakter">
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-down">
        <div class="bg-white rounded-3 shadow p-3 mb-2 d-flex justify-content-between align-items-center">
          <div>
            <h5>Pendidikan<br>Muammalah</h5>
          </div>
          <img src="{{ asset('assets/icons/ic-neraca.png') }}" height="55" width="55" alt="Ikon Pendidikan Muammalah">
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-down">
        <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
          <div>
            <h5>Pendidikan<br>Teknologi</h5>
          </div>
          <img src="{{ asset('assets/icons/ic-komputer.png') }}" height="55" width="55" alt="Ikon Pendidikan Teknologi">
        </div>
      </div>
    </div>
  </div>  
</section> --}}

{{-- Join --}}
<section id="join">
  <div class="container">
    <div class="row d-flex align-items-center">
      <div class="col-lg-6" data-aos="zoom-in-right"> 
        <div class="d-flex align-items-center mb-3">
          <div class="stripe me-2"></div>
          <h5>Daftar Santri</h5>
        </div>
        <h1 class="fw-bold mb-2">Gabung bersama kami, mewujudkan generasi rabbani</h1>
        <p class="mb-3">
          Pondok Pesantren Darul Iman merupakan pesantren terbaik di Lampung,
          dengan meluluskan santri dan menjadi ustadz terkemuka mendakwahkan di pelosok nusantara.
        </p>
        <button class="btn btn-regis">Daftar Sekarang</button>
      </div>  
      <div class="col-lg-6" data-aos="zoom-in-left">
        <img src="{{ asset('assets/images/il-photo-04.png') }}" class="img-fluid" alt="Ilustrasi Santri">
      </div>
    </div>
  </div>
</section>
{{-- Join --}}

{{-- Berita --}}
<section id="berita">
  <div class="container">
    <div class="header-berita text-center mb-5">
      <h2 class="fw-bold">Berita Kegiatan Pondok Pesantren</h2>
    </div>
    
    <div class="row" data-aos="zoom-in">
    @foreach ($artikels as $item)
    <div class="col-lg-4 mb-4">
      <div class="card border-0">
        <img src="{{ asset('storage/artikel/' . $item->image) }}" class="img-fluid mb-3" alt="Berita: {{ $item->judul }}">
        <div class="konten-berita">
          <p class="mb-3 text-secondary">{{ $item->created_at->format('d/m/Y') }}</p>
          <h4 class="fw-bold mb-3">{{ $item->judul }}</h4>
          <p class="text-secondary">#pesantrenmodern</p>
          <a href="/detail/{{ $item->slug }}" class="text-decoration-none text-success">Selengkapnya</a>
        </div>
      </div>
    </div> 
    @endforeach
    </div>

    <div class="footer-berita text-center mt-1  ">
      <a href="/berita" class="btn btn-outline-custom">Berita Lainnya</a>
    </div>
  </div> 
</section>  
{{-- Berita --}}

{{-- Vidio --}}
<section id="vidio" class="mt-4">
  <div class="container py-5" data-aos="zoom-in">
    <div class="text-center">
      <iframe 
        width="560" 
        height="315" 
        src="https://www.youtube.com/embed/FKIn3wV8rn0?si=0RFkgM00rra910Uo" 
        title="YouTube Video Player" 
        frameborder="0" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
        referrerpolicy="strict-origin-when-cross-origin" 
        allowfullscreen>
      </iframe>
    </div>
  </div>
</section>
{{-- Vidio --}}

<section id="vidio_youtube" class="py-5" data-aos="zoom-in">
  <div class="container">
    <div class="header-berita text-center mb-5">
      <h2 class="fw-bold">Video Kegiatan Pondok Pesantren</h2>
    </div>
    <div class="row py-5"data-aos="zoom-in-up">

      @foreach ($videos as $item)
        <div class="col-lg-4" >
          <iframe 
            width="100%" 
            height="215" 
            src="https://www.youtube.com/embed/{{ $item->youtube_code }}" 
            title="YouTube video player" 
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            referrerpolicy="strict-origin-when-cross-origin" 
            allowfullscreen>
          </iframe>
        </div>      
      @endforeach


    </div>
    <div class="footer-berita text-center">
      <a href="#" class="btn btn-outline-success">Berita Lainnya</a>
    </div>
  </div>
</section>

{{-- Foto --}}
<section id="foto" class="section-foto parallax" >
  <div class="container" data-aos="zoom-in-up">
    <div class="d-flex justify-content-between align-items-center mb-5">
      <div class="d-flex align-items-center">
        <div class="stripe-putih me-2"></div>
        <div class="fw-bold text-white">Foto Kegiatan</div>
      </div>
      <div>
        <a href="/foto" class="btn btn-outline-white">Foto Lainnya</a>
      </div>
    </div>
    
    <div class="row">
      @foreach ($photos as $photo)  {{-- Ubah dari $photos ke $photo --}}
          <div class="col-lg-3 col-md-6 col-6">
              <a class="image-link" href="{{ asset('storage/photo/' . $photo->image) }}">
                  <img src="{{ asset('storage/photo/' . $photo->image) }}" class="img-fluid" alt="Deskripsi foto">
              </a>
              <p>{{ $photo->judul }}</p>
          </div>
      @endforeach
  </div>
  </div>
</section>
{{-- Foto --}}

{{-- Fasilitas --}}
<section id="fasilitas" class="py-5" data-aos="zoom-in-up">
  <div class="container py-5">
    <div class="text-center mb-5">
      <h3 class="fw-bold">Fasilitas Pesantren</h3>
    </div>
    <img src="{{ asset('assets/images/il-bg-video.png') }}" class="img-fluid" alt="Fasilitas Pesantren">
    <div class="text-center mt-3">
      <a href="#" class="btn btn-outline-success">Fasilitas Lainnya</a>
    </div>
  </div>
</section>
{{-- Fasilitas --}}

@endsection

   
  
      
