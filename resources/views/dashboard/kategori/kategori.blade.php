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
                        <td>{{ $kategori->nama }}</td>
                        <td>0</td>
                        <td>
                            <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#editModal">
                                <i class="fa-solid fa-pencil"></i>Edit
                            </button>
                        </td>
                        <td><button class="btn btn-danger btn-block"><i class="fa-solid fa-trash-can"></i>Hapus</button></td>
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
                        <label for="inputKategori" class="col-form-label">Nama Kategori</label>
                        <input type="text" id="inputKategori" name="nama" required="required">
                    </div>
                    <input type="submit" class="btn btn-success" value="Simpan">
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
                        <label for="inputKategori" class="col-form-label">Nama Kategori</label>
                        <input type="text" id="inputKategori" name="nama" required="required">
                    </div>
                    <input type="submit" class="btn btn-success" value="Simpan">
                </form>
            </div>

        </div>
    </div>
</div>
@endsection