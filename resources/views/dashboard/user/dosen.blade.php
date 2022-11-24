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
            <table id="dosendata" style="width: 100%" class="table table-bordered table-striped py-3">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>KK</th>
                        <th>Email</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $dosen)
                    <tr>
                        <td><img src="{{ asset('uploads/img/'.'$dosen->foto') }}" alt="{{ $dosen->nama }}"></td>
                        <td>{{ $dosen->user->name }}</td>
                        <td>{{ $dosen->user->nipnim  }}</td>
                        <td>{{ $dosen->user->kk->name }}</td>
                        <td>{{ $dosen->user->email }}</td>
                        <td>
                            <div class="row">
                                <div class="col mb-1">
                                    <button class="btn btn-danger btn-block" data-user-id="{{ $dosen->user_id }}" data-user="{{ $dosen->user->name }}" data-toggle="modal" data-target="#revokeModal">
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
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>Jabatan</th>
                        <th>Email</th>
                        <th>Opsi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </section>
</div><!-- /.container-fluid -->

<!-- Modal revoke -->
<div class="modal fade" id="revokeModal" tabindex="-1" aria-labelledby="revokeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-danger">
            <div class="modal-header">
                <h5 class="modal-title" id="revokeModalLabel">Revoke Izin Dosen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('dashboard.usermgmt.dosen.revoke') }}">
                    @csrf
                    <div class="form-group">
                        <input id="id-user" type="hidden" name="user_id" value="">
                        <p class="text-center">Yakin ingin mencabut izin user ini?</p>
                    </div>
                    <div class="modal-footer pb-0">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Batal</button>
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

        modal.find('.modal-title').text('Revoke Izin Dosen \"' + user + '\"?')
        modal.find('.modal-body #id-user').val(id)
    })
</script>

<script>
    $(document).ready(
        $(function() {
            $('#dosendata').DataTable({});
        })
    );
</script>
@endsection