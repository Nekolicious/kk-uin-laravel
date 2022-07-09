<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ config('app.name') }}</title>
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
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand px-lg-5" href="#">Kelompok Keahlian</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 pe-lg-5">
                    <li class="nav-item px-lg-3">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item px-lg-3">
                        <a class="nav-link" href="#">Forum Diskusi</a>
                    </li>
                    <li class="nav-item dropdown px-lg-3" style="max-width: 280px;">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Kelompok Keahlian
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-wrap py-2" href="#">Pengembangan Rekayasa Perangkat
                                    Lunak</a></li>
                            <li><a class="dropdown-item text-wrap py-2" href="#">Visi Komputer dan Sistem
                                    Berintelegensia</a></li>
                            <li><a class="dropdown-item text-wrap py-2" href="#">Manajemen Data dan Sistem Informasi</a>
                            </li>
                            <li><a class="dropdown-item text-wrap py-2" href="#">Sistem Komputer dan Komputasi
                                    Terdistribusi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item px-lg-3"><a href="#"
                            class="btn btn-secondary nav-link text-white active px-lg-4 rounded-0" role="button"
                            aria-pressed="true">Daftar</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
    <!-- Register Success -->
    <div class="bg-white text-center">
        
    </div>
    <!-- Register Success End -->
    <!-- Footer -->
    <footer class="lead shadow text-center text-lg-start bg-light">
        <!-- Copyright -->
        <div class="text-center p-2 p-md-4 text-white bg-secondary">
            &#169;2022 Copyright Kelompok Keahlian. All Rights Reserved.
        </div>
        <!-- Copyright End -->
    </footer>
    <!-- Footer End -->
</body>

</html>