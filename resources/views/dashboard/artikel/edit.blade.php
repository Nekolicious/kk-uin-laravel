@extends('dashboard.dashboard')

@section('title')
Edit Artikel
@endsection

@section('breadcrumb')
@parent
<li class="breadcrumb-item"><a href="{{ route('dashboard.artikel') }}">Artikel</a></li>
<li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    @foreach ($data as $artikel)
    <form method="POST" enctype="multipart/form-data" action="{{ route('dashboard.artikel.update') }}">
        @csrf
        <div class="row">
            <input type="hidden" name="artikel_id" value="{{ $artikel -> artikel_id }}">
            <div class="col-6">
                <label for="inputTitle" class="form-label">Judul</label>
                <input type="text" class="form-control" name="title" id="inputTitle" value="{{ $artikel->title }}" required>
                <input type="hidden" name="author_id" value="{{ Auth::user()->user_id }}">
                <small class="text-info">Judul saat ini: <span class="font-italic">{{ $artikel->title }}</span></small>
            </div>
            <div class="col-6">
                <label for="inputHeader" class="form-label">Header</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputFileGroup">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="inputFile" aria-describedby="inputFileGroup">
                        <label class="custom-file-label" for="inputFile">Choose file</label>
                    </div>
                </div>
                <small class="text-info">Header saat ini: <span class="font-italic">{{ $artikel->header }}</span></small>
            </div>
        </div>
        <div class="mb-3">
            <label for="inputSlug" class="form-label">Permalink</label>
            <input type="text" class="form-control" name="slug" id="inputSlug" value="{{ $artikel->slug }}">
            <small class="text-info">Permalink saat ini: <span class="font-italic">{{ $artikel->slug }}</span></small>
        </div>
        <div class="mb-3">
            <div class="form-group">
                <label for="inputKategori">Kategori</label>
                <select id="inputKategori" name="kategori_id" class="form-control" required>
                    <option selected value="{{ $artikel->kategori_id }}">{{ $artikel->kategori->nama }}</option>
                    @foreach ($kategori as $key)
                    @if (!($artikel->kategori_id === $key->kategori_id))
                    <option value="{{ $key->kategori_id }}">{{ $key->nama }}</option>
                    @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="mb-3">
            <label for="inputBody" class="form-label">Isi</label>
            <textarea id="wysiwyg" name="body">{{ $artikel->body }}</textarea>
        </div>
        <div class="d-flex justify-content-end">
            <a href="{{ route('dashboard.artikel') }}" type="submit" class="btn btn-secondary">Batal</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
    @endforeach
</div><!-- /.container-fluid -->
@endsection

@section('script')
<script src="{{ asset('js/bs-custom-file-input-min.js') }}"></script>
<script>
    $(document).ready(function() {
        bsCustomFileInput.init()
    })
</script>
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