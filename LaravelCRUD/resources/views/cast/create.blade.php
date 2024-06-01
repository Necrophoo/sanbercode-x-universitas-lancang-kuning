@extends('layout.master') 
@section('content')

<form method="POST" action="{{ url('/cast') }}">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label for="nama">Nama </label>
            <input
                type="text"
                class="form-control"
                name="nama"
                id="nama"
                placeholder="Ketikkan Nama"
            />
        </div>
        @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="umur">Umur</label>
            <input
                type="number"
                class="form-control"
                name="umur"
                id="umur"8
                placeholder="Ketikkan Umur"
            />
        </div>
        @error('umur')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="bio">Bio</label>
            <textarea
                class="form-control"
                name="bio"
                id="bio"
                placeholder="Ketikkan Bio"
            ></textarea>
        </div>
        @error('bio')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-check">
            <input
                type="checkbox"
                class="form-check-input"
                id="exampleCheck1"
                required autofocus
            />
            <label class="form-check-label" for="exampleCheck1"
                >Setujui</label
            >
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

@endsection
