@extends('layouts.layouts')

@section('content')
    <section style="margin-top: 100px">
        <div class="container py-5">
            <h3 class="fw-bold mb-3">Halaman Dashboard Admin</h3>
            <p>Selamat datang di halaman dashboard admin</p>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card shadow-sm rounded-3 border-0">
                        <img src="{{ asset('assets/images/il-photo-04.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Blog Artikel</h5>
                          <p class="card-text">Atur dan kelola artikel kegiatan pesantren</p>
                          <a href="{{ route('blog') }}" class="btn btn-primary">Detail</a>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4">
                    <div class="card shadow-sm rounded-3 border-0">
                        <img src="{{ asset('assets/images/il-bg-foto.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Photo Kegiatan</h5>
                          <p class="card-text">Atur dan kelola photo kegiatan pesantren</p>
                          <a href="{{ route('photo') }}" class="btn btn-primary">Detail</a>
                        </div>
                      </div>
                </div>
                <div class="col-lg-4">
                    <div class="card shadow-sm rounded-3 border-0">
                        <img src="{{ asset('assets/images/il-bg-foto.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Video Kegiatan</h5>
                          <p class="card-text">Atur dan kelola video kegiatan pesantren</p>
                          <a href="{{ route('video') }}" class="btn btn-primary">Detail</a>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
@endsection