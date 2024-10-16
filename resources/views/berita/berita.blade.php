@extends('layouts.layouts')

@section('content')
{{-- Berita --}}
<section id="berita" style="margin-top: 100px;" class="py-5">
    <div class="container">
      <div class="header-berita text-center">
        <h2 class="fw-bold">Berita Kegiatan Pondok Pesantren</h2>
      </div>
      
      <div class="row py-5" data-aos="zoom-in">
        <div class="col-lg-4">
          <div class="card border-0">
            <img src="{{ asset('assets/images/il-berita-01.png') }}" class="img-fluid mb-3" alt="Ilustrasi Berita 1">
            <div class="konten-berita">
              <p class="mb-3">30/09/2024</p>
              <h4 class="fw-bold mb-3">Pengajian Bulanan Pesantren Darul Iman</h4>
              <p class="text-secondary">#pesantrenmodern</p>
              <a href="#" class="text-decoration-none text-success">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card border-0">
            <img src="{{ asset('assets/images/il-berita-01.png') }}" class="img-fluid mb-3" alt="Ilustrasi Berita 2">
            <div class="konten-berita">
              <p class="mb-3">30/09/2024</p>
              <h4 class="fw-bold mb-3">Pengajian Bulanan Pesantren Darul Iman</h4>
              <p class="text-secondary">#pesantrenmodern</p>
              <a href="#" class="text-decoration-none text-success">Selengkapnya</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card border-0">
            <img src="{{ asset('assets/images/il-berita-01.png') }}" class="img-fluid mb-3" alt="Ilustrasi Berita 3">
            <div class="konten-berita">
              <p class="mb-3">30/09/2024</p>
              <h4 class="fw-bold mb-3">Pengajian Bulanan Pesantren Darul Iman</h4>
              <p class="text-secondary">#pesantrenmodern</p>
              <a href="#" class="text-decoration-none text-success">Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
      
      <div class="footer-berita text-center">
        <a href="#" class="btn btn-outline-custom">Berita Lainnya</a>
      </div>
    </div> 
  </section>
{{-- Berita --}}    
@endsection