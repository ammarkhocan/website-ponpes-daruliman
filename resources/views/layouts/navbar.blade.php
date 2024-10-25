{{-- Navbar --}}
<nav class="navbar navbar-expand-lg py-3 fixed-top {{ Request::segment(1) != 'home' ? 'bg-white shadow text-dark' : '' }}">
    <div class="container">
    <a class="navbar-brand" href="/">
        <img src="{{ asset('assets/icons/ic-logo-ponpes-02.png')}}" height="55" width="195" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">HOME</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#join">PROFIL</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#berita">BERITA</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#">PRESTASI</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#">GALLERY</a>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link active" href="#">kontak</a>
        </li> --}}
        </ul>
        <div class="d-flex">
        @auth
        <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="btn btn-dark">Logout</button>
        </form>
        @else

        
        <button class="btn btn-danger">Register</button>
        @endauth
        
        </div>
    </div>
    </div>
</nav>
{{-- Navbar --}}