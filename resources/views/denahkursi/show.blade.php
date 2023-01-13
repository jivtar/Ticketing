@extends('layout/admin')

@section('title', 'Detail Denah Kursi')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-6">            
            <h3 class = "mt-3">Detail Denah Kursi</h3>
            
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{$denahkurses->zona_kursi}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Kapasitas   : {{$denahkurses->kapasitas}}</h6>
                  <h6 class="card-subtitle mb-2 text-muted">ID Venue   : {{$denahkurses->id_venue}}</h6>
                  <a href="{{ $denahkurses->id }}/edit">Edit</a>
                  <form action="/denahkursi/{{ $denahkurses->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit">Delete</button>
                  </form>
                  <a href="/denahkursi">Kembali</a>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
