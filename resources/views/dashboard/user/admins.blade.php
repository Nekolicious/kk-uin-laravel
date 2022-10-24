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
                        <th>Email</th>
                        <th>Kelompok Keahlian</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $value)
                    <tr>
                        <td>{{ $value->created_at }}</td>
                        <td>{{ $value->nipnim }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->email }}</td>
                        <td class="text-uppercase">{{ $value->kk->code }}</td>
                        <td>
                            <div class="row">
                                <div class="col mb-1">
                                    <button class="btn btn-danger btn-block" data-user-id="{{ $value->user_id }}" data-user="{{ $value->name }}" data-toggle="modal" data-target="#revokeModal">
                                        <i class="fa-solid fa-xmark"></i><span class="px-1">Revoke</span>
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>Tanggal</th>
                        <th>NIP/NIM</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Kelompok Keahlian</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </section>
</div><!-- /.container-fluid -->

<div class="slider-background" id="sliders-background"></div>

<!-- Modal revoke -->
<div class="modal fade" id="revokeModal" tabindex="-1" aria-labelledby="revokeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-danger">
            <div class="modal-header">
                <h5 class="modal-title" id="revokeModalLabel">Revoke Izin Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('dashboard.usermgmt.admins.revoke') }}">
                    @csrf
                    <div class="form-group">
                        <input id="id-user" type="hidden" name="user_id" value="">
                        <p class="text-center">Yakin ingin mencabut izin user ini?</p>
                    </div>
                    <div class="modal-footer pb-0">
                        <button type="submit" class="btn btn-warning">Ya</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $('#revokeModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('user-id')
        var user = button.data('user')
        var modal = $(this)

        modal.find('.modal-title').text('Revoke Izin Admin \"' + user + '\"?')
        modal.find('.modal-body #id-user').val(id)
    })
</script>

<script>
    $(document).ready(
        $(function() {
            $('#admindata').DataTable({});
        })
    );
</script>
@endsection