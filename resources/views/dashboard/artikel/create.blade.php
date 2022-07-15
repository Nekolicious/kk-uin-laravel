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
    <form method="POST" action="{{ route('dashboard.artikel.insert') }}">
        @csrf
        <div class="row mb-3">
            <div class="col-6">
                <label for="inputTitle" class="form-label">Judul</label>
                <input type="text" class="form-control" id="inputTitle">
            </div>
            <div class="col-6">
                <label for="inputHeader" class="form-label">Header</label>
                <div class="input-group mb-3">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="inputBody" class="form-label">Isi</label>
            <div id="wysiwyg">
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