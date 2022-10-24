@extends('dashboard.dashboard')

@section('title')
Tambah Dosen
@endsection

@section('breadcrumb')
@parent
<li class="breadcrumb-item"><a href="{{ route('dashboard.dosen') }}">Dosen</a></li>
<li class="breadcrumb-item active">Add</li>
@endsection

@section('content')
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <form method="POST" enctype="multipart/form-data" action="{{ route('dashboard.dosen.store') }}">
        @csrf
        <div class="row">
            <div class="col-6">
                <label for="inputName" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" id="inputName" required>
            </div>
            <div class="col-6">
                <label for="inputHeader" class="form-label">Foto</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputFileGroup">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="inputFile" aria-describedby="inputFileGroup">
                        <label class="custom-file-label" for="inputFile">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="col-6 mb-3">
                <label for="inputNip" class="form-label">NIP</label>
                <input type="number" class="form-control" name="nip" id="inputNip" required>
            </div>
            <div class="col-6 mb-3">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="inputEmail" required>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <div class="form-group">
                        <label for="inputKK">Kelompok Keahlian</label>
                        <select id="inputKK" name="kk_id" class="form-control" required>
                            <option selected disabled>Pilih...</option>
                            @foreach ($data as $key)
                            <option value="{{ $key->kk_id }}">{{ $key->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Buat</button>
        </div>
    </form>
</div><!-- /.container-fluid -->
@endsection

@section('script')
<script src="{{ asset('js/bs-custom-file-input-min.js') }}"></script>
@endsection