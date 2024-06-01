@extends('layout.master')
@section('content')

<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
<section>
    <div class="new">
    <a href="{{ url('/cast/create') }}" class="btn btn-info">Tambah +</a>
    </div>
    <div class="body" style="margin-top: 4px">
        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif
    </div>
    <div class="body" style="margin-top: 4px">
        @if(session('delete'))
        <div class="alert alert-danger">{{ session('delete') }}</div>
        @endif
    </div>
    <table id="example1" class="table table table-bordered table-striped">
        <thead>
            <tr>
                <th style="text-align: center; font-weight:bold; width :5%">No</th>
                <th style="text-align: center; font-weight:bold; width :20%">Nama</th>
                <th style="text-align: center; font-weight:bold; width :10%">Umur</th>
                <th style="text-align: center; font-weight:bold; width :40%">Bio</th>
                <th style="text-align: center; font-weight:bold; width :15%">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($cast as $key => $value)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{$value->nama }}</td>
                <td>{{$value->umur }} tahun</td>
                <td>{{$value->bio }}</td>
                <td style="text-align: center">
                    <a href="{{ url('/cast/' . $value->id) }}" class="btn btn-info"><i class="fas fa-eye">
                    </i></a>
                    <a href="{{ url('/cast/' . $value->id . '/edit') }}" class="btn btn-warning"><i class="fas fa-pencil-alt">
                    </i></a>
                    <form action="{{ url('/cast/' . $value->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onclick="return confirm('Yakin mau dihapus?')"><i class="fas fa-trash">
                        </i></button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" align="center">No Data </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</section>
</div>
</div>
</div>
@push('script')
<script src="{{ asset ('AdminLTE') }}/plugins/datatables/jquery.dataTables.js"></script>
<script src="{{ asset ('AdminLTE') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script>
    $(function () {
        $("#example1").DataTable();
    });
</script>
@endpush
@endsection