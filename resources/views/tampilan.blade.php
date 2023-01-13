@extends('layout/main')

@section('title', 'Tampilan')

@section('container')
<br><br><br>
<div class="row text-center">
    <div class="col-sm-5"><center>
      <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">List Artis</h5>
          <a href="{{ url('/artis')}}" class="btn btn-primary">Show</a>
        </div>
      </div>
    </div></center>
    <div class="col-sm-5"><center>
      <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Daftar Event</h5>
          <a href="{{ url('/jadwalevent')}}" class="btn btn-primary">Show</a>
        </div>
      </div>
    </div></center>
  </div>
@endsection