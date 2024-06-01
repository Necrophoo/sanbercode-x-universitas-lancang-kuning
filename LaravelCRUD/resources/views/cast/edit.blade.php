@extends('layout.master') 
@section('content')

<form method="POST" action="{{ url('/cast/' . $cast->id) }}">
    @csrf
    @method('PUT')
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputNama1">Nama </label>
            <input
                type="text"
                class="form-control"
                name="nama"
                id="exampleInputNama1"
                placeholder="Enter nama"
                value="{{ $cast->nama }}"
                required autofocus
            />
        </div>
        <div class="form-group">
            <label for="exampleInputUmur1">Umur</label>
            <input
                type="number"
                class="form-control"
                name="umur"
                id="exampleInputUmur1"
                placeholder="Umur"
                value="{{ $cast->umur }}"
                required autofocus
            />
        </div>
        <div class="form-group">
            <label for="exampleInputBio1">Bio</label>
            <textarea
                class="form-control"
                name="bio"
                id="exampleInputBio1"
                placeholder="Bio"
                required autofocus
            >{{ $cast->bio }}</textarea>
            
        </div>
        <div class="form-check">
            <input
                type="checkbox"
                class="form-check-input"
                id="exampleCheck1"
                required autofocus
            />
            <label class="form-check-label"  for="exampleCheck1"
                >Check me out</label
            >
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>


@endsection