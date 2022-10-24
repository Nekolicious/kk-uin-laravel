@extends('dashboard.dashboard')

@section('title')
Kelompok Keahlian
@endsection

@section('breadcrumb')
@parent
<li class="breadcrumb-item active">Dosen</li>
@endsection

@section('content')
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <section id="table">
        <div class="table-responsive px-2 py-4 bg-white mb-5">
            <div class="mb-3">
                <a href="{{ route('dashboard.kk.create') }}">
                    <button class="btn btn-primary"><i class="fa-solid fa-circle-plus"></i><span class="px-1">Tambah KK</span></button>
                </a>
            </div>
            <table id="kkdata" style="width: 100%" class="table table-bordered table-striped py-3">
                <thead>
                    <tr>
                        <th>Logo</th>
                        <th>Nama</th>
                        <th>Kode</th>
                        <th>Anggota</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $kk)
                    <tr>
                        <input type="hidden" value="{{ $kk->kk_id }}" name="kk_id">
                        <td>{{-- $kk->img --}}</td>
                        <td>{{ $kk->name }}</td>
                        <td>{{ $kk->code }}</td>
                        <td>{{ count($kk->users) }}</td>
                        <td>COMING SOON</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Logo</th>
                        <th>Nama</th>
                        <th>Kode</th>
                        <th>Anggota</th>
                        <th>Opsi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </section>
</div><!-- /.container-fluid -->

<div class="slider-background" id="sliders-background"></div>
@endsection

@section('script')
<script>
    $(document).ready(
        $(function() {
            $('#kkdata').DataTable({});
        })
    );
</script>
@endsection