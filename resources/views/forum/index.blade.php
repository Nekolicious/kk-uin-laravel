<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Forum Diskusi | KK-UINSGD</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Css/Js-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <script src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/main.css" />
    <!-- Font Awesome -->
    <script
      src="https://kit.fontawesome.com/4d73dab561.js"
      crossorigin="anonymous"
    ></script>
  </head>

  <body class="bg-gray">
    <!-- Navbar -->
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
                @guest
                <li class="nav-item px-lg-3">
                    <a class="nav-link" href="{{ route('register') }}">Daftar</a>
                </li>
                <li class="nav-item px-lg-3">
                    <a href="#" class="btn btn-secondary nav-link text-white active px-lg-4 rounded-0" role="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Masuk</a>
                </li>
                @endguest

                @auth
                <li class="nav-item dropdown px-lg-3">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="profile.html">Profile</a>
                        </li>
                        @if (Auth::user()->is_admin)
                        <li>
                            <a class="dropdown-item" href="{{ route('dashboard')}}">Dashboard</a>
                        </li>
                        @endif
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}">Log Out</a>
                        </li>
                    </ul>
                    <!-- <a href="#"><img src="images/profile-logo.png" alt="" /></a> -->
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
{{-- Login modal --}}
@if(session('success'))
<p class="alert alert-success">{{ session('success') }}</p>
@endif
@if($errors->any())
@foreach($errors->all() as $err)
<p class="alert alert-danger">{{ $err }}</p>
@endforeach
@endif
<!-- Login Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('login.action') }}" class="p-2">
                    @csrf
                    <!-- NIM/NIP input -->
                    <div class="form-outline mb-4 text-start">
                        <label class="form-label lead" for="form3Example3">NIM/NIP</label>
                        <input type="number" id="form3Example3" class="form-control form-control-lg" placeholder="Masukkan NIM atau NIP anda" name="nipnim" value="{{ old('nipnim') }}" />
                    </div>
                    <!-- Password input -->
                    <div class="form-outline mb-3 text-start">
                        <label class="form-label lead" for="form3Example4">Password</label>
                        <input type="password" id="form3Example4" class="form-control form-control-lg" placeholder="Masukkan password" name="password" />
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Checkbox -->
                        <div class="form-check mb-0">
                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                            <label class="form-check-label" for="form2Example3">
                                Ingat saya
                            </label>
                        </div>
                        <a href="#!" class="text-body">Lupa password?</a>
                    </div>

                    <div class="btn-box text-center text-lg-start mt-4 pt-2">
                        <div class="d-grid">
                            <button class="btn btn-secondary rounded-0 fw-bold">sign in</button>
                        </div>
                    </div>

                    <p class="small fw-bold mt-2 pt-1 mb-0">
                        Belum punya akun? <a href="{{ route('register') }}" class="link-danger">Daftar</a>
                    </p>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
<!-- Login Modal End-->
    <!-- Search Forum -->
    <div class="bg-white py-3 py-md-5 text-center">
      <div>
        <h3 class="fw-bold">FORUM DISKUSI</h3>
      </div>
      <div class="input-group input-group-sm mb-3 px-2 px-md-5">
        <input
          type="search"
          id="form1"
          placeholder="Cari pembahasan di forum diskusi"
          class="form-control rounded-0"
          style="background-color: rgb(221, 221, 221)"
        />
        <button type="button" class="btn btn-secondary rounded-0">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
    <!-- Search Forum End -->
    <!-- Forum Content -->
    <div class="forum-content">
      <div class="container-fluid">
        <div class="row g-3 align-items-center">
            <div class="col-8">
                @auth
                <button type="button" class="btn btn-secondary">
                Tambah Diskusi
                </button>
                @endauth
            </div>
            <div class="col-4">
                <div class="row justify-content-end">
                    <div class="col-auto">
                        <label for="inputFilter" class="col-form-label fw-bold"
                        >Urutkan:
                        </label>
                    </div>
                    <div class="col-auto">
                        <select
                        class="form-select filter"
                        aria-label="Default select example"
                        style="background-color: transparent"
                        >
                        <option value="1">Terkini</option>
                        <option value="2">Terpopuler</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="line"></div>
        <div class="forum-item">
          <h5>Web Development: Membuat Rest API dengan NodeJS</h5>
          <p>
            Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet
            sint. Velit officia consequat duis enim velit mollit. Exercitation
            veniam consequat sunt nostrud amet.
          </p>
          <div class="row">
            <div class="col-2">
              Suka <img src="assets/img/Like-Icon.svg" alt="" />
            </div>
            <div class="col-2">
              Membalas <img src="assets/img/Comment-Icon.svg" alt="" />
            </div>
            <div class="col-8">
              <div class="text-end">
                Lihat Diskusi <img src="assets/img/arrow-right.svg" alt="" />
              </div>
            </div>
          </div>
          <div class="line"></div>
        </div>
        <div class="forum-item">
          <h5>Web Development: Membuat Rest API dengan NodeJS</h5>
          <p>
            Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet
            sint. Velit officia consequat duis enim velit mollit. Exercitation
            veniam consequat sunt nostrud amet.
          </p>
          <div class="row">
            <div class="col-2">
              Suka <img src="assets/img/Like-Icon.svg" alt="" />
            </div>
            <div class="col-2">
              Membalas <img src="assets/img/Comment-Icon.svg" alt="" />
            </div>
            <div class="col-8">
              <div class="text-end">
                Lihat Diskusi <img src="assets/img/arrow-right.svg" alt="" />
              </div>
            </div>
          </div>
          <div class="line"></div>
        </div>
        <div class="forum-item">
          <h5>Web Development: Membuat Rest API dengan NodeJS</h5>
          <p>
            Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet
            sint. Velit officia consequat duis enim velit mollit. Exercitation
            veniam consequat sunt nostrud amet.
          </p>
          <div class="row">
            <div class="col-2">
              Suka <img src="assets/img/Like-Icon.svg" alt="" />
            </div>
            <div class="col-2">
              Membalas <img src="assets/img/Comment-Icon.svg" alt="" />
            </div>
            <div class="col-8">
              <div class="text-end">
                Lihat Diskusi <img src="assets/img/arrow-right.svg" alt="" />
              </div>
            </div>
          </div>
          <div class="line"></div>
        </div>
      </div>
    </div>
    <!-- Forum Content End -->
    <!-- Login Modal End-->
    <!-- Footer -->
    <footer class="shadow text-center text-lg-start bg-light">
      <!-- Copyright -->
      <div class="lead text-center p-2 p-md-4 text-white bg-secondary">
        &#169;2022 Copyright Kelompok Keahlian. All Rights Reserved.
      </div>
      <!-- Copyright End -->
    </footer>
    <!-- Footer End -->
  </body>
</html>
