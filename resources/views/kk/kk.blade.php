@extends('master')

@section('title')
Kelompok Keahlian
@endsection

@section('content')
<!-- Dosen -->
<div class="container shadow bg-white pb-4 px-md-5 my-4 my-md-4 rounded-3 text-center">
    <div class="py-4">
        <h3 class="fw-bold">PROFIL DOSEN</h3>
    </div>
    <div class="row align-items-start">
        <div class="col-xs-12 col-md-6 my-2">
            <div class="card">
                <div class="container text-start">
                    <div class="row">
                        <div class="col d-flex align-items-center">
                            <img src="assets/img/profil-dosen.png" class="d-block img-fluid"/>
                        </div>
                        <div class="col">
                            <span class="lead fs-6">Nama : </span>
                            <p class="text-end m-0">Lorem Ipsum</p>
                            <span class="lead fs-6">NIP : </span>
                            <p class="text-end m-0">123123123</p>
                            <span class="lead fs-6">Jabatan : </span>
                            <p class="text-end m-0">Dosen</p>
                            <span class="lead fs-6">Email : </span>
                            <p class="text-end m-0">Dosen@email.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-outline-dark fw-bold border-4 rounded-0 px-5 mt-3">
        Selengkapnya
    </button>
</div>
<!-- Roadmap -->
<header id="header" class="card shadow text-white">
    <img class="card-img img-fluid" src="assets/img/roadmap.png" alt="Card image" />
    <div class="card-img-overlay d-flex flex-column justify-content-center">
        <div class="col-md-8 px-0 text-center mx-auto">
            <div>
                <h1 class="fw-bold">ROADMAP PENELITIAN</h1>
                <h5 class="lead">
                    Roadmap Penelitian yang dilakukan oleh Kelompok Keahlian Jurusan
                    Teknik Informatika
                </h5>
                <button type="button" class="btn btn-outline-light fw-bold border-4 rounded-0 px-5">
                    Selengkapnya
                </button>
            </div>
        </div>
    </div>
</header>
<!-- Roadmap End -->
<div class="container shadow bg-white pb-4 px-4 px-lg-5 my-4 my-md-5 rounded-3 text-center">
    <div class="py-4">
        <h4 class="fw-bold">ARTIKEL TERKAIT</h4>
    </div>
    <div class="row align-items-start">
        <div class="col-12 col-md-6">
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
        <div class="col-12 col-md-6">
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
        <div class="col-12 col-md-6">
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
        <div class="col-12 col-md-6">
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
<!-- Jurnal -->
<div class="text-center my-4">
    <h3 class="fw-bold text-center">JURNAL KK-PRPL</h3>
    <div class="jurnal-item container my-4">
        <div class="row">
            <div class="col-sm-12 col-md-4 my-2">
                <img src="assets/img/jurnal1.png" alt="" class="img-fluid" />
                <div class="text-start">
                    <h5 class="fw-bold">
                        The unseen of spending three years at Pixelgrade
                    </h5>
                    <p>
                        Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                        amet sint. Velit officia consequat duis enim velit mollit.
                        Exercitation veniam consequat sunt nostrud...
                    </p>
                    <button type="button" class="btn btn-outline-dark fw-bold border-4 rounded-0 px-2">More...</button>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 my-2">
                <img src="assets/img/jurnal2.png" alt="" class="img-fluid" />
                <div class="text-start">
                    <h5 class="fw-bold">
                        The unseen of spending three years at Pixelgrade
                    </h5>
                    <p>
                        Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                        amet sint. Velit officia consequat duis enim velit mollit.
                        Exercitation veniam consequat sunt nostrud...
                    </p>
                    <button type="button" class="btn btn-outline-dark fw-bold border-4 rounded-0 px-2">More...</button>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 my-2">
                <img src="assets/img/jurnal3.png" alt="" class="img-fluid" />
                <div class="text-start">
                    <h5 class="fw-bold">
                        The unseen of spending three years at Pixelgrade
                    </h5>
                    <p>
                        Amet minim mollit non deserunt ullamco est sit aliqua dolor do
                        amet sint. Velit officia consequat duis enim velit mollit.
                        Exercitation veniam consequat sunt nostrud...
                    </p>
                    <button type="button" class="btn btn-outline-dark fw-bold border-4 rounded-0 px-2">More...</button>
                </div>
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-outline-dark fw-bold border-4 rounded-0 px-5">
        Lihat Jurnal Lainnya
    </button>
</div>
<!-- Jurnal End -->
@endsection