@extends('dashboard.dashboard')

@section('title')
Users
@endsection

@section('breadcrumb')
@parent
<li class="breadcrumb-item active">User</li>
@endsection

@section('content')
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <section id="table">
        <div class="table-responsive px-2 py-4 bg-white mb-5">
            <table id="userdata" style="width: 100%" class="table table-bordered table-striped py-3">
                <thead>
                    <tr>
                        <th>Tanggal/Waktu Terdaftar</th>
                        <th>NIP/NIM</th>
                        <th>Nama</th>
                        <th>Kelompok Keahlian</th>
                        <th>Email</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $key => $value)
                    <tr>
                        <td>{{ $value->created_at }}</td>
                        <td>{{ $value->nipnim }}</td>
                        <td class="text-capitalize">{{ $value->name }}</td>
                        <td class="text-uppercase">{{ $value->kk }}</td>
                        <td>{{ $value->email }}</td>
                        <td>
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-primary btn-block"><i class="fa-solid fa-pencil"></i><span class="px-1">Edit</span></button>
                                </div>
                                <div class="col">
                                    <button class="btn btn-danger btn-block"><i class="fa-solid fa-trash-can"></i><span class="px-1">Hapus</span></button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Tanggal/Waktu Terdaftar</th>
                        <th>NIP/NIM</th>
                        <th>Nama</th>
                        <th>Kelompok Keahlian</th>
                        <th>Email</th>
                        <th>Opsi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </section>
</div><!-- /.container-fluid -->
@endsection

@section('script')
<script>
    $(document).ready(
        $(function() {
            $('#userdata').DataTable({
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