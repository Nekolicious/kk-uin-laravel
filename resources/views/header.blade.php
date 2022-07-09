<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
        <a class="navbar-brand px-lg-5" href="{{ route('home') }}">Kelompok Keahlian</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 pe-lg-5">
                <li class="nav-item px-lg-3">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Beranda</a>
                </li>
                <li class="nav-item px-lg-3">
                    <a class="nav-link" href="{{-- route('forum') --}}">Forum Diskusi</a>
                </li>
                <li class="nav-item dropdown px-lg-3" style="max-width: 280px">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Kelompok Keahlian
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item text-wrap py-2" href="{{ route('kk') }}">Pengembangan Rekayasa Perangkat Lunak</a>
                        </li>
                        <li>
                            <a class="dropdown-item text-wrap py-2" href="{{ route('kk') }}">Visi Komputer dan Sistem Berintelegensia</a>
                        </li>
                        <li>
                            <a class="dropdown-item text-wrap py-2" href="{{ route('kk') }}">Manajemen Data dan Sistem Informasi</a>
                        </li>
                        <li>
                            <a class="dropdown-item text-wrap py-2" href="{{ route('kk') }}">Sistem Komputer dan Komputasi
                                Terdistribusi</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item px-lg-3">
                    <a class="nav-link" href="{{ route('register') }}">Daftar</a>
                </li>
                <li class="nav-item px-lg-3">
                    <a href="{{-- route('login') --}}" class="btn btn-secondary nav-link text-white active px-lg-4 rounded-0" role="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Masuk</a>
                </li>
            </ul>
        </div>
    </div>
</nav>