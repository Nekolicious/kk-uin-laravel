@extends('dashboard.dashboard')

@section('title')
Admins
@endsection

@section('breadcrumb')
@parent
<li class="breadcrumb-item active">Admin</li>
@endsection

@section('content')

<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <section id="table">
        <div class="table-responsive px-2 py-4 bg-white mb-5">
            <table id="admindata" style="width: 100%" class="table table-bordered table-striped py-3">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>NIP/NIM</th>
                        <th>Nama</th>
                        <th>Angkatan</th>
                        <th>Kelompok Keahlian</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $value)
                    @if ($value->is_admin == 1)
                    <tr>
                        <td>{{ $value->created_at }}</td>
                        <td>{{ $value->nipnim }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->email }}</td>
                        <td>{{ $value->kk }}</td>
                        <td>
                            <button type="button" class="btn btn-danger">
                                Belum Disetujui
                            </button>
                        </td>
                        <td>
                            <a class="btn btn-secondary action" role="button" aria-disabled="false">Approve</a>
                            <!-- Button trigger modal -->
                        </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Tanggal</th>
                        <th>NIP/NIM</th>
                        <th>Nama</th>
                        <th>Angkatan</th>
                        <th>Kelompok Keahlian</th>
                        <th>Status</th>
                        <th>Action</th>
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
            $('#admindata').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        })
    );
</script>
@endsection