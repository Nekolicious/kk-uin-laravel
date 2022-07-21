@extends('dashboard.dashboard')

@section('title')
Artikel
@endsection

@section('breadcrumb')
@parent
<li class="breadcrumb-item active">Artikel</li>
@endsection

@section('content')
<div class="container-fluid">

    <section id="table">
        <div class="table-responsive px-2 py-4 bg-white mb-5">
            <div class="mb-3">
                <a href="{{ route('dashboard.artikel.create') }}">
                    <button class="btn btn-primary"><i class="fa-solid fa-circle-plus"></i><span class="px-1">Artikel Baru</span></button>
                </a>
            </div>
            <table id="artikeldata" style="width: 100%" class="table table-bordered table-striped py-3">
                <thead>
                    <tr>
                        <th>Tanggal/Waktu</th>
                        <th>Header</th>
                        <th>Judul</th>
                        <th>Slug</th>
                        <th>Kategori</th>
                        <th>Author</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $artikel)
                    <tr>

                        <td>{{ $artikel->created_at }}</td>
                        <td class="text-center"><img width="120px" class="img-thumbnail" src="{{ asset('/uploads/img/'.$artikel->header) }}"></td>
                        <td>{{ $artikel->title }}<input type="hidden" id="artikelid" name="artikel_id" value="{{ $artikel->artikel_id }}"></td>
                        <td>{{ $artikel->slug }}</td>
                        <td>{{ $artikel->kategori->nama }}</td>
                        <td>{{ $artikel->author->name }}</td>
                        <td>
                            <div class="row">
                                <div class="col">
                                    <a class="btn btn-primary btn-block" href="{{ route('dashboard.artikel.edit', ['artikel_id'=>$artikel->artikel_id]) }}">
                                        <i class="fa-solid fa-pencil"></i>Edit
                                    </a>
                                </div>
                                <div class="col">
                                    <button class="btn btn-danger btn-block" data-artikel="{{ $artikel->title }}" data-toggle="modal" data-target="#deleteModal">
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
                        <th>Tanggal/Waktu</th>
                        <th>Header</th>
                        <th>Judul</th>
                        <th>Slug</th>
                        <th>Kategori</th>
                        <th>Author</th>
                        <th>Opsi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </section>
</div> <!-- .container-fluid -->

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
                <form method="GET" action="{{ route('dashboard.artikel.delete') }}">
                    @csrf
                    <div class="form-group text-center">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        <input id="id-artikel" type="hidden" name="artikel_id" value="">
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
        var id = $('#artikelid').val()
        var artikel = button.data('artikel')
        var modal = $(this)

        modal.find('.modal-body #id-artikel').val(id)
        modal.find('.modal-body #item').text(artikel)
    })
</script>

<script>
    $(document).ready(
        $(function() {
            $('#artikeldata').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        })
    );
</script>
@endsection