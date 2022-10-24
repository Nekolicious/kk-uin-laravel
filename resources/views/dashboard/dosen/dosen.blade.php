@extends('dashboard.dashboard')

@section('title')
Dosen
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
                <a href="{{ route('dashboard.dosen.create') }}">
                    <button class="btn btn-primary"><i class="fa-solid fa-circle-plus"></i><span class="px-1">Tambah Dosen</span></button>
                </a>
            </div>
            <table id="dosendata" style="width: 100%" class="table table-bordered table-striped py-3">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>KK</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $dosen)
                    <tr>
                        <td><img src="{{ asset('uploads/img/'.'$dosen->foto') }}" alt="{{ $dosen->nama }}"></td>
                        <td>{{ $dosen->user->name }}</td>
                        <td>{{ $dosen->user->nipnim  }}</td>
                        <td>{{ $dosen->user->kk->name }}</td>
                        <td>{{ $dosen->email }}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>Jabatan</th>
                        <th>Email</th>
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
            $('#dosendata').DataTable({
            });
        })
    );
</script>
@endsection