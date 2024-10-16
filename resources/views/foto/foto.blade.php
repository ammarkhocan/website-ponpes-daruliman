@extends('layouts.layouts')

@section('content')
{{-- Foto --}}
<section id="foto" style="margin-top:100px" class="section-foto parallax" data-aos="zoom-in-up">
  <div class="container">
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
      <div class="col-lg-3 col-md-6 col-6">
        <a class="image-link" href="{{ asset('assets/images/il-photo-02.png') }}">
          <img src="{{ asset('assets/images/il-photo-03.png') }}" class="img-fluid" alt="Deskripsi foto">
        </a>
      </div>
      <div class="col-lg-3 col-md-6 col-6">
        <a class="image-link" href="{{ asset('assets/images/il-photo-02.png') }}">
          <img src="{{ asset('assets/images/il-photo-03.png') }}" class="img-fluid" alt="Deskripsi foto">
        </a>
      </div>
      <div class="col-lg-3 col-md-6 col-6">
        <a class="image-link" href="{{ asset('assets/images/il-photo-02.png') }}">
          <img src="{{ asset('assets/images/il-photo-03.png') }}" class="img-fluid" alt="Deskripsi foto">
        </a>
      </div>
      <div class="col-lg-3 col-md-6 col-6">
        <a class="image-link" href="{{ asset('assets/images/il-photo-02.png') }}">
          <img src="{{ asset('assets/images/il-photo-03.png') }}" class="img-fluid" alt="Deskripsi foto">
        </a>
      </div>
    </div>
  </div>
</section>
{{-- Foto --}}
@endsection