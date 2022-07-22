@extends('master')

@section('title')

@endsection

@section('content')
<!-- Header Artikel -->
@if(isset($data))
@foreach($data as $artikel)
<div class="card shadow bg-dark text-white">
    <img class="img-fluid" src="{{ asset('uploads/img/'.$artikel->header) }}" id="artikelheader" alt="Artikel Header" />
</div>
<!-- Header Artikel End -->
<!-- Konten -->
<div class="container shadow bg-white pb-4 px-md-5 my-3 my-md-5 rounded-3">
    <!-- Judul -->
    <div class="col-md-6 mx-auto py-4 justify-content-center text-center">
        <h3 class="fw-bold">
            {{ $artikel->title }}
        </h3>
    </div>
    <!-- Informasi Artikel -->
    <p class="fw-light">Penulis: <span>{{ $artikel->author->name }}</span></p>
    <p class="fw-light">Tanggal Rilis: <span>{{ $artikel->created_at }}</span></p>
    <p class="fw-light">Kategori: <span>{{ $artikel->kategori->nama }}</span></p>
    <!-- Isi -->
    {!! $artikel->body !!}
</div>
<!-- Konten End-->
@endforeach
@else
<div class="container shadow bg-white p-5 px-md-5 my-3 my-md-5 rounded-3">
    <div class="row align-items-center text-center">
        <div class="col-12">
            <i class="fa fa-triangle-exclamation"></i>
            <p>Artikel tidak ditemukan! Mungkin telah dihapus atau dipindahkan.</p>
        </div>
    </div>
</div>
@endif



<!-- Artikel Terkait -->
<div class="container shadow bg-white pb-4 px-4 px-lg-5 my-4 my-md-5 rounded-3 text-center">
    <div class="py-4">
        <h4 class="fw-bold">ARTIKEL TERKAIT</h4>
    </div>
    <div class="row align-items-start">
        <div class="col">
            <div class="card pt-0 px-0 mb-4">
                <img src="assets/img/post-dummy.png" class="card-img-top" alt="..." />
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
        <div class="col">
            <div class="card pt-0 px-0 mb-4">
                <img src="assets/img/post-dummy.png" class="card-img-top" alt="..." />
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
    <div class="row align-items-start">
        <div class="col">
            <div class="card pt-0 px-0 mb-4">
                <img src="assets/img/post-dummy.png" class="card-img-top" alt="..." />
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
        <div class="col">
            <div class="card pt-0 px-0 mb-4">
                <img src="assets/img/post-dummy.png" class="card-img-top" alt="..." />
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
<!-- Artikel Terkait End-->
@endsection