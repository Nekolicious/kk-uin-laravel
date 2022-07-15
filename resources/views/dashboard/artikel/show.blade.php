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
                        <th>Judul</th>
                        <th>Body</th>
                        <th>Slug</th>
                        <th>Kategori</th>
                        <th>Author</th>
                        <th colspan="2">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $artikel)
                    <tr>
                        <td>{{ $artikel->created_at }}</td>
                        <td>{{ $artikel->title }}</td>
                        <td>{{ $artikel->body }}</td>
                        <td>{{ $artikel->slug }}</td>
                        <td>{{ $artikel->kategori }}</td>
                        <td>{{ $artikel->author_id }}</td>
                        <td><button class="btn btn-primary btn-block"><i class="fa-solid fa-pencil"></i>Edit</button></td>
                        <td><button class="btn btn-danger btn-block"><i class="fa-solid fa-trash-can"></i>Hapus</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</div> <!-- .container-fluid -->
@endsection