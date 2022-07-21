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
    @include('header')
    <!-- Navbar End -->
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
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModalForum">
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
        @foreach ($posts as $post)
        <div class="forum-item">
          <h5>{{ $post->title }}</h5>
          <p>
            {{ $post->body }}
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
        @endforeach
      </div>
    </div>
    <!-- Forum Modal -->
    <div class="modal fade" id="exampleModalForum" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Buat Diskusi Baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('posts.store') }}">
                        <div class="form-group">
                            @csrf
                            <label class="label">Judul Diskusi: </label>
                            <input type="text" name="title" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label class="label">Isi Diskusi: </label>
                            <textarea name="body" rows="4" cols="30" class="form-control" required></textarea>
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" class="btn btn-secondary" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Forum Modal End-->
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
