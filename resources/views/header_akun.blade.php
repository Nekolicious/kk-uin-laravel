<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ config('app.name') }} | @yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
    <!-- Css/Js-->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/4d73dab561.js" crossorigin="anonymous"></script>
</head>
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
                <li class="nav-item dropdown profile px-lg-3">
                  <a
                    class="nav-link dropdown-toggle"
                    href="#"
                    id="navbarDropdownMenuLink"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    {{ Auth::user()->name }}
                  </a>
                  <ul
                    class="dropdown-menu"
                    aria-labelledby="navbarDropdownMenuLink"
                  >
                    <li>
                      <a class="dropdown-item" href="profile.html">Profile</a>
                    </li>
                    <li>
                        @auth
                            <a class="dropdown-item" href="{{ route('logout') }}">Log Out</a>
                        @endauth
                        @guest
                            <a class="dropdown-item" href="{{ route('logout') }}">Log Out</a>
                        @endguest
                    </li>
                  </ul>
                  <a href="#"><img src="images/profile-logo.png" alt="" /></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@php
    $usesearch = true
@endphp