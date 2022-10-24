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
    <form method="POST" enctype="multipart/form-data" action="{{ route('dashboard.artikel.store') }}">
        @csrf
        <div class="row">
            <div class="col-6">
                <label for="inputTitle" class="form-label">Judul</label>
                <input type="text" class="form-control" name="title" id="inputTitle" required>
                <input type="hidden" name="author_id" value="{{ Auth::user()->user_id }}">
            </div>
            <div class="col-6">
                <label for="inputHeader" class="form-label">Header</label>
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
        </div>
        <div class="col">
            <div class="mb-3">
                <label for="inputSlug" class="form-label">Permalink</label>
                <input type="text" class="form-control" name="slug" id="inputSlug">
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <label for="inputKategori">Kategori</label>
                    <select id="inputKategori" name="kategori_id" class="form-control" required>
                        <option selected disabled>Pilih...</option>
                        @foreach ($kategori as $key)
                        <option value="{{ $key->kategori_id }}">{{ $key->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="inputBody" class="form-label">Isi</label>
                <textarea id="wysiwyg" name="body"></textarea>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Buat</button>
            </div>
        </div>
    </form>
</div><!-- /.container-fluid -->
@endsection

@section('script')
<script src="{{ asset('js/bs-custom-file-input-min.js') }}"></script>
<script src="{{ asset('js/jquery.slugify.js') }}"></script>

<script>
    $(document).ready(function() {
        $('#wysiwyg').summernote({
            height: 250,
        });

        bsCustomFileInput.init()
    });
</script>

<script>
    $('#inputSlug').slugify('#inputTitle');
</script>
@endsection