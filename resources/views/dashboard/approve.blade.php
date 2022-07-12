@extends('dashboard.dashboard')

@section('title')
Member Approvements
@endsection

@section('breadcrumb')
@parent
<li class="breadcrumb-item active">Pending Users</li>
@endsection

@section('content')

<div class="container-fluid">
  <!-- Small boxes (Stat box) -->
  <section id="table">
    <div class="table-responsive px-2 py-4 bg-white mb-5">
      <table id="example" style="width: 100%" class="table table-striped py-3">
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
            <td>Agus agus agus agus agus</td>
            <td>2019</td>
            <td>PRPL</td>
            <td>
              <button type="button" class="btn btn-danger">
                Belum Disetujui
              </button>
            </td>
            <td>
              <a class="btn btn-secondary action" role="button" aria-disabled="false">Approve</a>
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
              <a class="btn btn-secondary action" role="button" aria-disabled="false">Approve</a>
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
              <a class="btn btn-secondary disabled action" role="button" aria-disabled="true">Approve</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
</div><!-- /.container-fluid -->

<div class="slider-background" id="sliders-background"></div>
@endsection