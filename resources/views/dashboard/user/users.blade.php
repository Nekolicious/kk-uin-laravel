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
                        <input type="hidden" value="{{ $value->user_id }}" name="user_id">
                        <td>{{ $value->created_at }}</td>
                        <td>{{ $value->nipnim }}</td>
                        <td class="text-capitalize">{{ $value->name }}</td>
                        <td class="text-uppercase">{{ $value->kk->code }}</td>
                        <td>{{ $value->email }}</td>
                        <td>
                            <div class="row">
                                <div class="col mb-1">
                                    <button class="btn btn-primary btn-block"><i class="fa-solid fa-pencil"></i><span class="px-1">Edit</span></button>
                                </div>
                                <div class="col mb-1">
                                    <button class="btn btn-danger btn-block"><i class="fa-solid fa-trash-can"></i><span class="px-1">Hapus</span></button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-1">
                                    @if($value->is_admin == 1)
                                    <button class="btn btn-success btn-block" disabled><i class="fas fa-check"></i><span class="px-1">Admin</span></button>
                                    @else
                                    <form action="{{ route('dashboard.usermgmt.admins.grant') }}" method="post">
                                        @csrf
                                        <input type="hidden" value="{{ $value->user_id }}" name="user_id">
                                        <button class="btn btn-warning btn-block" type="submit"><i class="fas fa-exclamation-triangle"></i><span class="px-1">Jadikan Admin</span></button>
                                    </form>
                                    @endif
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
            $('#userdata').DataTable({});
        })
    );
</script>
@endsection