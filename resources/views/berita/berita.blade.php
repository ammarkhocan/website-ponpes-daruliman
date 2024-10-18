@extends('layouts.layouts')

@section('content')
{{-- Berita --}}
<section id="berita" style="margin-top: 100px;" class="py-5">
    <div class="container">
      <div class="header-berita text-center">
        <h2 class="fw-bold">Berita Kegiatan Pondok Pesantren</h2>
      </div>
      
      <div class="row py-5" data-aos="zoom-in">
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
    </div> 
  </section>
{{-- Berita --}}    
@endsection