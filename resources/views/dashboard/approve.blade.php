<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }} | @yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
</head>
<body>
    <div class="wrapper">
      <nav class="navbar navbar-expand-md navbar-light bg-light py-1">
        <div class="container-fluid">
          <button class="btn btn-default" id="btn-slider" type="button">
            <i class="fa fa-bars fa-lg" aria-hidden="true"></i>
          </button>
          <ul class="nav ms-auto">
            <li class="nav-item dropstart">
              <a
                class="nav-link text-dark ps-3 pe-1"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
              >
                <img src="./images/user/user.png" alt="user" class="img-user" />
              </a>
              <div
                class="dropdown-menu mt-2 pt-0"
                aria-labelledby="navbarDropdown"
              >
                <a class="dropdown-item" href="#">
                  <i class="fa fa-user fa-lg me-3" aria-hidden="true"></i
                  >Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fa fa-cog fa-lg me-3" aria-hidden="true"></i>Setting
                </a>
                <hr class="dropdown-divider" />
                <a class="dropdown-item" href="#">
                  <i class="fa fa-sign-out fa-lg me-2" aria-hidden="true"></i
                  >LogOut
                </a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="slider" id="sliders">
        <div class="slider-body px-1">
          <nav class="nav flex-column">
            <a class="nav-link px-3" href="index.html">Dashboard </a>
            <a class="nav-link px-3 active" href="mahasiswa.html">Mahasiswa </a>
            <a class="nav-link px-3" href="dosen.html">Dosen</a>
            <a class="nav-link px-3" href="activity.html">Kegiatan </a>
            <a class="nav-link px-3" href="account.html">Akun Saya </a>
            <a class="nav-link px-3" href="../index.html">Keluar </a>
          </nav>
        </div>
      </div>

      <div class="main-pages">
        <div class="container">
          <h3>Mahasiswa</h3>
          <section id="table">
            <div class="table-responsive px-2 py-4 bg-white mb-5">
              <table
                id="example"
                style="width: 100%"
                class="table table-striped py-3"
              >
                <thead>
                  <tr>
                    <th>Tanggal</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Angkatan</th>
                    <th>Kelompok Keahlian</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>15/05/2022</td>
                    <td>1197050001</td>
                    <td>Agus</td>
                    <td>2019</td>
                    <td>PRPL</td>
                    <td>
                      <button type="button" class="btn btn-danger">
                        Belum Disetujui
                      </button>
                    </td>
                    <td>
                      <a
                        class="btn btn-secondary action"
                        role="button"
                        aria-disabled="false"
                        >Approve</a
                      >
                    </td>
                  </tr>
                  <tr>
                    <td>15/05/2022</td>
                    <td>1197050001</td>
                    <td>Agus</td>
                    <td>2019</td>
                    <td>PRPL</td>
                    <td>
                      <button type="button" class="btn btn-danger">
                        Belum Disetujui
                      </button>
                    </td>
                    <td>
                      <a
                        class="btn btn-secondary action"
                        role="button"
                        aria-disabled="false"
                        >Approve</a
                      >
                    </td>
                  </tr>
                  <tr>
                    <td>15/05/2022</td>
                    <td>1197050001</td>
                    <td>Agus</td>
                    <td>2019</td>
                    <td>PRPL</td>
                    <td>
                      <button type="button" class="btn btn-success">
                        Disetujui
                      </button>
                    </td>
                    <td>
                      <a
                        class="btn btn-secondary disabled action"
                        role="button"
                        aria-disabled="true"
                        >Approve</a
                      >
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </section>
        </div>
      </div>
    </div>

    <div class="slider-background" id="sliders-background"></div>
    <script src="./dist/js/jquery.js"></script>
    <script src="./assets/app/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="./dist/js/index.js"></script>
  </body>
</html>