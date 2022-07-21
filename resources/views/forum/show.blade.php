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
        <div class="line"></div>
        <div class="forum-item">
          <h5>{{ $post->title }}</h5>
          <p>
            {{ $post->body }}
          </p>
          </div>
          @include('forum.commentsDisplay', ['comments' => $post->comments, 'post_id' => $post->id])
          
          @auth
        <h4>Add comment</h4>
        <form method="post" action="{{ route('comments.store') }}">
            @csrf
            <div class="form-group">
                <textarea class="form-control" name="body"></textarea>
                <input type="hidden" name="post_id" value="{{ $post->id }}" />
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Add Comment" />
            </div>
        </form>
        @endauth
          <div class="line"></div>
        </div>
      </div>
    </div>
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
