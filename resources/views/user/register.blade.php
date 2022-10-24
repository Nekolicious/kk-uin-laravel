@extends('master')

@section('title')
Register
@endsection

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
                    {{-- @if($errors->any())
                    @foreach($errors->all() as $err)
                    <p class="alert alert-danger">{{ $err }}</p>
                    @endforeach
                    @endif --}}
                    <form class="p-1 mb-md-4 needs-validation" method="POST" action="{{ route('register.action') }}" novalidate>
                        @csrf
                        <!-- Email input -->
                        <div class="form-outline mb-4 text-start">
                            <label class="form-label lead" for="form3Example3">Email</label>
                            <input type="email" id="form3Example3" class="form-control form-control-lg" placeholder="contoh@contoh.com" name="email" value="{{ old('email') }}" required />
                            <div class="invalid-feedback">Harap masukkan email yang valid.</div>
                        </div>

                        <!-- Nama input -->
                        <div class="form-outline mb-3 text-start">
                            <label class="form-label lead" for="form3Example4">Nama Lengkap</label>
                            <input type="text" id="form3Example4" class="form-control form-control-lg" placeholder="Masukkan nama lengkap anda" name="name" value="{{ old('name') }}" required />
                            <div class="invalid-feedback">Harap masukkan nama yang valid.</div>
                        </div>

                        <!-- NIM/NIP input -->
                        <div class="form-outline mb-3 text-start">
                            <label class="form-label lead" for="form3Example4">NIM/NIP</label>
                            <input type="number" id="form3Example4" class="form-control form-control-lg" placeholder="Masukkan NIM atau NIP anda" name="nipnim" value="{{ old('nipnim') }}" required />
                            <div class="invalid-feedback">Harap masukkan nim atau nip yang valid.</div>
                        </div>

                        <!-- No Telp input -->
                        <div class="form-outline mb-3 text-start">
                            <label class="form-label lead" for="form3Example4">Nomor Telepon</label>
                            <input type="tel" id="form3Example4" class="form-control form-control-lg" placeholder="Masukkan nomor telepon anda" name="notelp" value="{{ old('notelp') }}" required />
                            <div class="invalid-feedback">Harap masukkan nomor telepon yang valid.</div>
                        </div>

                        <!-- KK input -->
                        <div class="form-outline mb-3 text-start">
                            <label class="form-label lead" for="form3Example4">Kelompok Keahlian</label>
                            <select class="form-select form-select-lg" aria-label="Default select example" name="kk_id" required>
                                <option selected disabled value="">Pilih Kelompok Keahlian...</option>
                                @foreach ($data as $kk)
                                <option value="{{ $kk->kk_id }}">{{ $kk->name }}</option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback">Harap pilih kk yang valid.</div>
                        </div>

                        <!-- Status input -->
                        <div class="form-outline mb-3 text-start">
                            <label class="form-label lead" for="form3Example4">Status</label>
                            <select class="form-select form-select-lg" aria-label="Default select example" name="status" required>
                                <option selected disabled value="">Pilih Status...</option>
                                <option value="1">Dosen</option>
                                <option value="0">Mahasiswa</option>
                            </select>
                            <div class="invalid-feedback">Harap pilih status yang valid.</div>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3 text-start">
                            <label class="form-label lead" for="form3Example4">Password</label>
                            <input type="password" id="form3Example4" class="form-control form-control-lg" placeholder="Masukkan password" name="password" required />
                            <div class="invalid-feedback">Harap masukkan password.</div>
                        </div>

                        <!-- Konfirmasi Password input -->
                        <div class="form-outline mb-3 text-start">
                            <label class="form-label lead" for="form3Example4">Konfirmasi Password</label>
                            <input type="password" id="form3Example4" class="form-control form-control-lg" placeholder="Konfirmasi password" name="password_confirmation" required />
                            <div class="invalid-feedback">Harap masukkan konfirmasi password.</div>
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

@section('hidesearch')
<script>
    (function() {
        'use strict'

        var forms = document.querySelectorAll('.needs-validation')

        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>

<script>
    var x = document.getElementById("footersearch");
    x.style.display = "none";
</script>
@endsection