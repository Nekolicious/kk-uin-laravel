@extends('master')

@section('title')
Home
@endsection

@section('content')
<!-- Header Main -->
<header id="header" class="card shadow bg-dark text-white">
    <img class="card-img img-fluid" src="{{ asset('img/rektorat.png') }}" alt="Card image" />
    <div class="card-img-overlay d-flex flex-column justify-content-center">
        <div class="col-md-8 px-0 text-center mx-auto">
            <div>
                <h1 id="kk-title" class="fw-bold">
                    KELOMPOK KEAHLIAN<br />JURUSAN TEKNIK INFORMATIKA<br />UIN SUNAN
                    GUNUNG DJATI BANDUNG
                </h1>
                <h5 id="kk-title" class="lead">
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
        @foreach($artikel as $data)
        <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="card pt-4 px-4 mb-4">
                <img id="artikelimg" src="{{ asset('/uploads/img/'.$data->header) }}" class="card-img-top" alt="..." />
                <div class="card-body text-start">
                    <h5 class="card-title">
                        {{ $data->title }}
                    </h5>
                    <span class="fw-light"></span>
                    <a href="{{ route('artikel', ['slug'=>$data->slug]) }}" class="stretched-link"></a>
                </div>
            </div>
        </div>
        @endforeach
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
            @foreach($kk as $data)
            <div class="col">
                <input type="hidden" name="{{ $data->kk_id }}">
                <a href="#"><img class="img-fluid" src="{{ asset('img/'.$data->logo) }}" alt="{{ $data->code }}" /></a>
            </div>
            @endforeach
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
        <div class="col-xs-6 col-md-4 mb-4" id="research">
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
    <div class="text-center">
        <button type="button" class="btn btn-outline-dark fw-bold border-4 rounded-0 px-5">
            Selengkapnya
        </button>
    </div>
</div>
<!-- Penelitian End -->
@endsection