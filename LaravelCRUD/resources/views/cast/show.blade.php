@extends('layout.master') 
@section('content')

<section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-body row">
        <div class="col-5 text-center d-flex align-items-center justify-content-center">
          <div class="">
            <h2>Data Casting Film</h2>
            <p class="lead mb-5">88 Los Angeles, California, 9876 NA<br>
              Phone: +62 8987679346
            </p>
          </div>
        </div>
        <div class="col-7">
            <h1>Detail Casting Film</h1>

            <p><strong>Nama:</strong> {{ $cast->nama }}</p>
            <p><strong>Umur:</strong> {{ $cast->umur }} tahun</p>
            <p><strong>Bio:</strong> {{ $cast->bio }}</p>  
            <p><strong>Created At:</strong> {{ $cast->created_at }}</p>  
            <p><strong>Updated At:</strong> {{ $cast->updated_at }}</p>  

            <a href="{{ url('/cast') }}" class="btn btn-primary">Kembali</a>
        </div>
      </div>
    </div>

  </section>

@endsection