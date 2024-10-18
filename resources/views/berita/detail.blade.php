@extends('layouts.layouts')

@section('content')
<section id="detil" class="py-5" style="margin-top:100px">
    <div class="container col-xxl-8">
        <div class="mb-3">
            <a href="/">Home</a> <a href="/berita">Berita</a> Pengajian Bulanan Pesantren Darul Iman
        </div>
        <img src="{{ asset('storage/artikel/' . $artikel->image) }}" class="img-fluid mb-3" alt="">
            <div class="konten-berita">
              <p class="mb-3">{{ $artikel->created_at->format('d/m/Y') }}</p>
              <h4 class="fw-bold mb-3">{{ $artikel->judul}}</h4>
              <p class="text-secondary">{!! $artikel->desc !!}</p>
            </div>
    </div>
</section>
@endsection