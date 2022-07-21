@extends('dashboard.dashboard')

@section('title')
Gambar
@endsection

@section('breadcrumb')
@parent
<li class="breadcrumb-item active">Gambar</a></li>
@endsection

@section('content')
<div class="container">
    <div class="container">
        <div class="card-columns">
            @foreach($path as $path)
            <div class="card">
                <a href="{{ url($path) }}" target="_blank"><img class="card-img-top" src="{{ url($path) }}" alt="Card image cap"></a>
                <div class="card-body">
                    <p class="card-text">{{ substr($path, 12) }}</p>
                </div>
                <button class="btn btn-danger btn-block" data-gambar="{{ substr($path, 12) }}" data-toggle="modal" data-target="#deleteModal">
                    <i class="fa-solid fa-trash-can"></i>Hapus
                </button>
            </div>
            @endforeach
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
                <form method="GET" action="{{ route('dashboard.gambar.delete') }}">
                    @csrf
                    <div class="form-group text-center">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        <input id="id-gambar" type="hidden" name="img_name" value="">
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
    $('#deleteModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var gambar = button.data('gambar')
        var modal = $(this)

        modal.find('.modal-body #id-gambar').val(gambar)
        modal.find('.modal-body #item').text(gambar)
    })
</script>
@endsection