@extends('dashboard.dashboard')

@section('title')
Kategori
@endsection

@section('breadcrumb')
@parent
<li class="breadcrumb-item active">Kategori</a></li>
@endsection

@section('content')
<div class="container-fluid">

    <section id="table">
        <div class="table-responsive px-2 py-4 bg-white mb-5">
            <div class="mb-3">
                <button class="btn btn-primary" data-toggle="modal" data-target="#kategoriModal"><i class="fa-solid fa-circle-plus"></i><span class="px-1">Kategori Baru</span></button>
            </div>
            <table id="kategoridata" style="width: 100%" class="table table-bordered table-striped py-3">
                <thead>
                    <tr>
                        <th class="col-6">Nama</th>
                        <th class="col-3">Jumlah Artikel</th>
                        <th class="col-3" colspan="2">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $kategori)
                    <tr>
                        <input type="hidden" id="id-kategori" name="id" value="{{ $kategori->kategori_id }}">
                        <td>{{ $kategori->nama }}</td>
                        <td>0</td>
                        <td>
                            <button class="btn btn-primary btn-block" data-kategori="{{ $kategori->nama }}" data-toggle="modal" data-target="#editModal">
                                <i class="fa-solid fa-pencil"></i>Edit
                            </button>
                        </td>
                        <td>
                            <button class="btn btn-danger btn-block" data-kategori="{{ $kategori->nama }}" data-toggle="modal" data-target="#deleteModal">
                                <i class="fa-solid fa-trash-can"></i>Hapus
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</div> <!-- .container-fluid -->

<!-- Modal create -->
<div class="modal fade" id="kategoriModal" tabindex="-1" aria-labelledby="kategoriModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="kategoriModalLabel">Kategori Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('dashboard.kategori.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="nama-kategori" class="col-form-label">Nama Kategori</label>
                        <input type="text" class="form-control" id="nama-kategori" name="nama" required="required">
                    </div>
                    <div class="modal-footer pb-0">
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
                <h5 class="modal-title" id="editModalLabel">Edit Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('dashboard.kategori.update') }}">
                    @csrf
                    <div class="form-group">
                        <input id="id-kategori" type="hidden" name="id" value="">
                        <label for="nama-kategori" class="col-form-label">Nama Kategori</label>
                        <input type="text" class="form-control" id="nama-kategori" name="nama" required="required">
                    </div>
                    <div class="modal-footer pb-0">
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
                <form method="GET" action="{{ route('dashboard.kategori.delete') }}">
                    @csrf
                    <div class="form-group text-center">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        <input id="id-kategori" type="hidden" name="id" value="">
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
<script>
    $('#editModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = $('#id-kategori').val()
        var kategori = button.data('kategori')
        var modal = $(this)

        modal.find('.modal-title').text('Edit kategori \"' + kategori + '\"')
        modal.find('.modal-body #id-kategori').val(id)
        modal.find('.modal-body #nama-kategori').val(kategori)
    })
</script>

<script>
    $('#deleteModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = $('#id-kategori').val()
        var kategori = button.data('kategori')
        var modal = $(this)

        modal.find('.modal-body #id-kategori').val(id)
        modal.find('.modal-body #item').text(kategori)
    })
</script>
@endsection