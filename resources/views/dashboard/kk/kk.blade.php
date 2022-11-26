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
                <button class="btn btn-primary" data-toggle="modal" data-target="#kkModal"><i class="fa-solid fa-circle-plus"></i><span class="px-1">Kelompok Keahlian Baru</span></button>
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
                        <td class="text-center"><img src="{{ asset('img/'.$kk->logo) }}" width="25px" alt="{{ $kk->name }}_logo"></td>
                        <td>{{ $kk->name }}</td>
                        <td>{{ $kk->code }}</td>
                        <td>{{ count($kk->users) }}</td>
                        <td>
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-primary btn-block" data-kk-id="{{ $kk->kk_id }}" data-kk="{{ $kk->name }}" data-kk-code="{{ $kk->code }}" data-kk-logo="{{ $kk->logo }}" data-toggle="modal" data-target="#editModal">
                                        <i class="fa-solid fa-pencil"></i>Edit
                                    </button>
                                </div>
                                <div class="col">
                                    <button class="btn btn-danger btn-block" data-kk-id="{{ $kk->kk_id }}" data-kk="{{ $kk->name }}" data-toggle="modal" data-target="#deleteModal">
                                        <i class="fa-solid fa-trash-can"></i>Hapus
                                    </button>
                                </div>
                            </div>
                        </td>
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

<!-- Modal create -->
<div class="modal fade" id="kkModal" tabindex="-1" aria-labelledby="kkModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="kkModalLabel">KK Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('dashboard.kk.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="nama-kk" class="col-form-label">Nama kk</label>
                        <input type="text" class="form-control" id="nama-kk" name="nama" required="required">
                    </div>
                    <div class="modal-footer pb-0">
                        <button type="button" data-dismiss="modal" class="btn btn-secondary">Batal</button>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- Modal edit -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Kelompok Keahlian</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('dashboard.kk.update') }}">
                    @csrf
                    <div class="form-group">
                        <label for="inputHeader" class="form-label">Logo</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputFileGroup">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="inputFile" aria-describedby="inputFileGroup">
                                <label class="custom-file-label" for="inputFile">Choose file</label>
                            </div>
                        </div>
                        <small class="text-info">Logo saat ini: <span class="font-italic" id="logo-kk">imagename.format</span></small>
                    </div>
                    <div class="form-group">
                        <input id="id-kk" type="hidden" name="id" value="">
                        <label for="nama-kk" class="col-form-label">Nama Kelompok Keahlian</label>
                        <input type="text" class="form-control" id="nama-kk" name="nama" required="required">
                    </div>
                    <div class="form-group">
                        <input id="code-kk" type="hidden" name="code" value="">
                        <label for="code-kk" class="col-form-label">Kode Kelompok Keahlian</label>
                        <input type="text" class="form-control" id="code-kk" name="code" required="required">
                    </div>
                    <div class="modal-footer pb-0">
                        <button type="button" data-dismiss="modal" class="btn btn-secondary">Batal</button>
                        <button type="submit" class="btn btn-success">Ubah</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- Modal delete -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-warning">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Penghapusan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="GET" action="{{ route('dashboard.kk.delete') }}">
                    @csrf
                    <div class="form-group text-center">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        <input id="id-kk" type="hidden" name="id" value="">
                        <p>Yakin ingin menghapus <span class="font-weight-bold" id="item">item</span>? Tindakan ini tidak dapat diurungkan!</p>
                    </div>
                    <div class="modal-footer pb-0">
                        <button type="button" data-dismiss="modal" class="btn btn-secondary">Batal</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('js/bs-custom-file-input-min.js') }}"></script>
<script>
    $(document).ready(function() {
        bsCustomFileInput.init()
    })
</script>

<script>
    $('#editModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('kk-id')
        var kk = button.data('kk')
        var code = button.data('kk-code')
        var logo = button.data('kk-logo')
        var modal = $(this)

        modal.find('.modal-title').text('Edit kk \"' + kk + '\"')
        modal.find('.modal-body #id-kk').val(id)
        modal.find('.modal-body #nama-kk').val(kk)
        modal.find('.modal-body #code-kk').val(code)
        modal.find('.modal-body #logo-kk').text(logo)
    })
</script>

<script>
    $('#deleteModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('kk-id')
        var kk = button.data('kk')
        var modal = $(this)

        modal.find('.modal-body #id-kk').val(id)
        modal.find('.modal-body #item').text(kk)
    })
</script>

<script>
    $(document).ready(
        $(function() {
            $('#kkdata').DataTable({});
        })
    );
</script>
@endsection