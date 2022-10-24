@extends('dashboard.dashboard')

@section('title')
Member Approvements
@endsection

@section('breadcrumb')
@parent
<li class="breadcrumb-item active">Pending Users</li>
@endsection

@section('content')

<div class="container-fluid">
  <!-- Small boxes (Stat box) -->
  <section id="table">
    <div class="table-responsive px-2 py-4 bg-white mb-5">
      <table id="pendingdata" style="width: 100%" class="table table-bordered table-striped py-3">
        <thead>
          <tr>
            <th>Tanggal</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Kelompok Keahlian</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $value)
          <tr>
            <td>{{ $value->created_at }}</td>
            <td>{{ $value->nipnim }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->email }}</td>
            <td class="text-uppercase">{{ $value->kk->code }}</td>
            <td>
              <button type="button" disabled class="btn btn-danger">
                Belum Disetujui
              </button>
            </td>
            <td>
              <div class="row">
                <div class="col mb-1">
                  <form action="{{ route('dashboard.usermgmt.pending.approve') }}" method="POST">
                    @csrf
                    <input type="hidden" value="{{ $value->user_id }}" name="user_id">
                    <button class="btn btn-success btn-block action" role="button" aria-disabled="false">
                      <i class="fa-solid fa-check"></i><span class="px-1">Approve</span>
                    </button>
                  </form>
                </div>
                <div class="col mb-1">
                  <form action="{{ route('dashboard.usermgmt.pending.decline') }}" method="POST">
                    @csrf
                    <button class="btn btn-danger btn-block action" role="button" aria-disabled="false">
                      <i class="fa-solid fa-xmark"></i><span class="px-1">Decline</span>
                    </button>
                  </form>
                </div>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
        <tfoot>
          <tr>
            <th>Tanggal</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Kelompok Keahlian</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </tfoot>
      </table>
    </div>
  </section>
</div><!-- /.container-fluid -->

<div class="slider-background" id="sliders-background"></div>
@endsection

@section('script')
<script>
  $(document).ready(
    $(function() {
      $('#pendingdata').DataTable({
      });
    })
  );
</script>
@endsection