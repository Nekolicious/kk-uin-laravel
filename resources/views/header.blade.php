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
@php
    $usesearch = true
@endphp