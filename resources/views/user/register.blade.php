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
    <!-- Register Page -->
    <div class="bg-white text-center">
        <section class="d-flex align-self-center">
            <div class="container-fluid h-custom p-3 mb-2">
                <div class="row justify-content-center align-items-center">
                    <div class="col col-md-8">
                        <h1 class="my-md-4 py-md-4">
                            Kelompok Keahlian<br>
                            Teknik Informatika<br>
                            UIN Sunan Gunung Djati
                        </h1>
                        <form class="p-1 mb-md-4">
                            <!-- Email input -->
                            <div class="form-outline mb-4 text-start">
                                <label class="form-label lead" for="form3Example3">Email</label>
                                <input type="email" id="form3Example3" class="form-control form-control-lg"
                                    placeholder="contoh@contoh.com" />
                            </div>

                            <!-- Nama input -->
                            <div class="form-outline mb-3 text-start">
                                <label class="form-label lead" for="form3Example4">Nama Lengkap</label>
                                <input type="text" id="form3Example4" class="form-control form-control-lg"
                                    placeholder="Masukkan nama lengkap anda" />
                            </div>

                            <!-- NIM/NIP input -->
                            <div class="form-outline mb-3 text-start">
                                <label class="form-label lead" for="form3Example4">NIM/NIP</label>
                                <input type="number" id="form3Example4" class="form-control form-control-lg"
                                    placeholder="Masukkan NIM atau NIP anda" />
                            </div>

                            <!-- No Telp input -->
                            <div class="form-outline mb-3 text-start">
                                <label class="form-label lead" for="form3Example4">Nomor Telepon</label>
                                <input type="tel" id="form3Example4" class="form-control form-control-lg"
                                    placeholder="Masukkan nomor telepon anda" />
                            </div>

                            <!-- KK input -->
                            <div class="form-outline mb-3 text-start">
                                <label class="form-label lead" for="form3Example4">Kelompok Keahlian</label>
                                <select class="form-select form-select-lg" aria-label="Default select example">
                                    <option selected disabled>Pilih Kelompok Keahlian</option>
                                    <option value="prpl">Pengembangan Rekayasa Perangkat Lunak</option>
                                    <option value="vksb">Visi Komputer dan Sistem Berintelegensia</option>
                                    <option value="mdsi">Manajemen Data dan Sistem Informasi</option>
                                    <option value="skkt">Sistem Komputer dan Komputasi Terdistribusi</option>
                                </select>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-3 text-start">
                                <label class="form-label lead" for="form3Example4">Password</label>
                                <input type="password" id="form3Example4" class="form-control form-control-lg"
                                    placeholder="Masukkan password" />
                            </div>

                            <!-- Konfirmasi Password input -->
                            <div class="form-outline mb-3 text-start">
                                <label class="form-label lead" for="form3Example4">Konfirmasi Password</label>
                                <input type="password" id="form3Example4" class="form-control form-control-lg"
                                    placeholder="Konfirmasi password" />
                            </div>

                            <div class="text-center text-lg-start mt-4 pt-2">
                                <div class="d-grid">
                                    <button type="button" class="btn btn-secondary rounded-0 fw-bold">DAFTAR</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
    </div>
    <!-- Register Page End -->
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