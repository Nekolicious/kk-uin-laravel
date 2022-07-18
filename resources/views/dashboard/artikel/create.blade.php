@extends('dashboard.dashboard')

@section('title')
Artikel Baru
@endsection

@section('breadcrumb')
@parent
<li class="breadcrumb-item"><a href="{{ route('dashboard.artikel') }}">Artikel</a></li>
<li class="breadcrumb-item active">Create</li>
@endsection

@section('content')
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <form method="POST" action="{{ route('dashboard.artikel.store') }}">
        @csrf
        <div class="row">
            <div class="col-6">
                <label for="inputTitle" class="form-label">Judul</label>
                <input type="text" class="form-control" name="judul" id="inputTitle">
            </div>
            <div class="col-6">
                <label for="inputHeader" class="form-label">Header</label>
                <div class="input-group mb-3">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputFile">
                        <label class="custom-file-label" name="header" for="inputFile">Choose file</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="inputSlug" class="form-label">Slug <small class="text-info">*Opsional</small></label>
            <input type="text" class="form-control" name="slug" id="inputSlug">
        </div>
        <div class="mb-3">
            <div class="form-group">
                <label for="inputKategori">Kategori</label>
                <select id="inputKategori" class="form-control">
                    <option selected disabled>Pilih...</option>
                    @foreach ($kategori as $key)
                    <option value="{{ $key->kategori_id }}" name="{{ $key->nama }}">{{ $key->nama }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="mb-3">
            <label for="inputBody" class="form-label">Isi</label>
            <div id="wysiwyg" name="body">
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
</div><!-- /.container-fluid -->
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $('#wysiwyg').summernote({
            height: 250,
        });
    });
</script>
@endsection