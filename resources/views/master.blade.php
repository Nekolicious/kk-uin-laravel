<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ config('app.name') }} || @yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
    <!-- Css/Js-->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/4d73dab561.js" crossorigin="anonymous"></script>
</head>

<body class="bg-gray">
    <!-- Navbar -->
    @include('header')
    <!-- Navbar End -->
    <!-- Header Main -->
    <header id="header" class="card shadow bg-dark text-white">
        <img class="card-img img-fluid" src="{{ asset('img/rektorat.png') }}" alt="Card image" />
        <div class="card-img-overlay d-flex flex-column justify-content-center">
            <div class="col-md-8 px-0 text-center mx-auto">
                <div>
                    <h1 class="fw-bold">
                        KELOMPOK KEAHLIAN<br />JURUSAN TEKNIK INFORMATIKA<br />UIN SUNAN
                        GUNUNG DJATI BANDUNG
                    </h1>
                    <h5 class="lead">
                        Kelompok Keahlian merupakan wadah bagi mahasiswa dan dosen untuk
                        meningkatkan kompetensi dan penelitian.
                    </h5>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Main End -->

    <!-- Aktivitas -->
    <div class="container shadow bg-white pb-4 px-md-5 my-2 my-md-4 rounded-3 text-center">
        <div class="py-4">
            <h3 class="fw-bold">AKTIVITAS</h3>
            <h5 class="fw-bold">Artikel Kegiatan Kelompok Keahlian</h5>
        </div>
        <div class="row align-items-start">
            <div class="col-xs-12 col-md-6">
                <div class="card pt-4 px-4 mb-4">
                    <img src="{{ asset('img/post-dummy.png') }}" class="card-img-top" alt="..." />
                    <div class="card-body text-start">
                        <h5 class="card-title">
                            Ini Merupakan Judul Dari Artikel di Atas Ini Merupakan Judul
                            Dari Artikel di Atas
                        </h5>
                        <span class="fw-light">3 hari yang lalu</span>
                        <a href="artikel.html" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-outline-dark fw-bold border-4 rounded-0 px-5">
            Selengkapnya
        </button>
    </div>
    <!-- Aktivitas End -->

    <!-- Header KK -->
    <header id="header" class="shadow bg-dark text-white py-4 py-md-5">
        <div class="col-md-8 text-center mx-auto">
            <h1 class="display-5 fw-bold mb-3">KELOMPOK KEAHLIAN</h1>
            <div class="row mx-2">
                <div class="col">
                    <a href="#"><img class="img-fluid" src="{{ asset('img/prpl.png') }}" /></a>
                </div>
                <div class="col">
                    <a href="#"><img class="img-fluid" src="{{ asset('img/prpl.png') }}" /></a>
                </div>
                <div class="col">
                    <a href="#"><img class="img-fluid" src="{{ asset('img/prpl.png') }}" /></a>
                </div>
                <div class="col">
                    <a href="#"><img class="img-fluid" src="{{ asset('img/prpl.png') }}" /></a>
                </div>
            </div>
        </div>
    </header>
    <!-- Header KK End-->
    <!-- Penelitian -->
    <div class="container shadow bg-white pb-4 my-2 my-md-4 rounded-3 text-start">
        <div class="py-4">
            <h3 class="fw-bold text-center">PENELITIAN</h3>
        </div>
        <div class="row">
            <div class="col-xs-6 col-md-4 mb-4">
                <div class="card bg-dark text-white rounded-0">
                    <img src="{{ asset('img/penelitian1.png') }}" class="card-img" alt="..." />
                    <div class="card-img-overlay h-100 d-flex flex-column justify-content-end">
                        <h5 class="card-title">
                            Ini Adalah Judul Penelitian Ini adalah Judul Penelitian
                        </h5>
                        <p class="card-text fw-light">
                            Ini merupakan deskripsi singkat mengenai penelitian dari
                            mahasiswa...
                        </p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-4 mb-4">
                <div class="card bg-dark text-white rounded-0">
                    <img src="{{ asset('img/penelitian2.png') }}" class="card-img" alt="..." />
                    <div class="card-img-overlay h-100 d-flex flex-column justify-content-end">
                        <h5 class="card-title">
                            Ini Adalah Judul Penelitian Ini adalah Judul Penelitian
                        </h5>
                        <p class="card-text fw-light">
                            Ini merupakan deskripsi singkat mengenai penelitian dari
                            mahasiswa...
                        </p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-4 mb-4">
                <div class="card bg-dark text-white rounded-0">
                    <img src="{{ asset('img/penelitian3.png') }}" class="card-img" alt="..." />
                    <div class="card-img-overlay h-100 d-flex flex-column justify-content-end">
                        <h5 class="card-title">
                            Ini Adalah Judul Penelitian Ini adalah Judul Penelitian
                        </h5>
                        <p class="card-text fw-light">
                            Ini merupakan deskripsi singkat mengenai penelitian dari
                            mahasiswa...
                        </p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="research-4th" class="col-xs-12 col-md-12 mb-3">
            <div class="card bg-dark text-white rounded-0">
                <img src="{{ asset('img/penelitian4.png') }}" class="card-img-top" alt="..." />
                <div class="card-img-overlay h-100 d-flex flex-column justify-content-end">
                    <h5 class="card-title">
                        Ini Adalah Judul Penelitian Ini adalah Judul Penelitian
                    </h5>
                    <p class="card-text fw-light">
                        Ini merupakan deskripsi singkat mengenai penelitian dari
                        mahasiswa...
                    </p>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>
        <div class="text-center">
            <button type="button" class="btn btn-outline-dark fw-bold border-4 rounded-0 px-5">
                Selengkapnya
            </button>
        </div>
    </div>
    <!-- Penelitian End -->
    <!-- Footer -->
    @include('footer')
    <!-- Footer End -->
</body>

</html>