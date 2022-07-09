@extends('master')

@section('title')
Register
@endsection

@php
    $usesearch = false
@endphp

@section('content')
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
                        @if($errors->any())
                        @foreach($errors->all() as $err)
                        <p class="alert alert-danger">{{ $err }}</p>
                        @endforeach
                        @endif
                        <form class="p-1 mb-md-4" method="POST" action="{{ route('register.action') }}">
                            @csrf
                            <!-- Email input -->
                            <div class="form-outline mb-4 text-start">
                                <label class="form-label lead" for="form3Example3">Email</label>
                                <input type="email" id="form3Example3" class="form-control form-control-lg"
                                    placeholder="contoh@contoh.com" name="email" value="{{ old('email') }}" />
                            </div>

                            <!-- Nama input -->
                            <div class="form-outline mb-3 text-start">
                                <label class="form-label lead" for="form3Example4">Nama Lengkap</label>
                                <input type="text" id="form3Example4" class="form-control form-control-lg"
                                    placeholder="Masukkan nama lengkap anda" name="name" value="{{ old('name') }}" />
                            </div>

                            <!-- NIM/NIP input -->
                            <div class="form-outline mb-3 text-start">
                                <label class="form-label lead" for="form3Example4">NIM/NIP</label>
                                <input type="number" id="form3Example4" class="form-control form-control-lg"
                                    placeholder="Masukkan NIM atau NIP anda" name="nipnim" value="{{ old('nipnim') }}" />
                            </div>

                            <!-- No Telp input -->
                            <div class="form-outline mb-3 text-start">
                                <label class="form-label lead" for="form3Example4">Nomor Telepon</label>
                                <input type="tel" id="form3Example4" class="form-control form-control-lg"
                                    placeholder="Masukkan nomor telepon anda" name="notelp" value="{{ old('notelp') }}" />
                            </div>

                            <!-- KK input -->
                            <div class="form-outline mb-3 text-start">
                                <label class="form-label lead" for="form3Example4">Nomor Telepon</label>
                                <input type="text" id="form3Example4" class="form-control form-control-lg"
                                    placeholder="Masukkan nomor KK" name="kk" value="{{ old('kk') }}" />
                            </div>
                            {{-- <div class="form-outline mb-3 text-start">
                                <label class="form-label lead" for="form3Example4">Kelompok Keahlian</label>
                                <select class="form-select form-select-lg" aria-label="Default select example">
                                    <option selected disabled>Pilih Kelompok Keahlian</option>
                                    <option value="prpl">Pengembangan Rekayasa Perangkat Lunak</option>
                                    <option value="vksb">Visi Komputer dan Sistem Berintelegensia</option>
                                    <option value="mdsi">Manajemen Data dan Sistem Informasi</option>
                                    <option value="skkt">Sistem Komputer dan Komputasi Terdistribusi</option>
                                </select>
                            </div> --}}

                            <!-- Password input -->
                            <div class="form-outline mb-3 text-start">
                                <label class="form-label lead" for="form3Example4">Password</label>
                                <input type="password" id="form3Example4" class="form-control form-control-lg"
                                    placeholder="Masukkan password" name="password" />
                            </div>

                            <!-- Konfirmasi Password input -->
                            <div class="form-outline mb-3 text-start">
                                <label class="form-label lead" for="form3Example4">Konfirmasi Password</label>
                                <input type="password" id="form3Example4" class="form-control form-control-lg"
                                    placeholder="Konfirmasi password" name="password_confirmation" />
                            </div>


                            <div class="btn-box mt-4 pt-2">
                                <div class="d-grid">
                                <button class="btn btn-secondary rounded-0 fw-bold">Buat Akun</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    <!-- Register Page End -->
@endsection