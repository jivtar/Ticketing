@extends('layout/admin')

@section('title', 'Artis')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-6">            
            <h3 class = "mt-3">Detail Artis</h3>
            
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{$adartis->nama}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{$adartis->jk}}</h6>
                  <p class="card-text">Tempat Tanggal Lahir     : {{$adartis->ttl}}</p>
                  <a href="{{ $adartis->id }}/edit">Edit</a>
                  <form action="/adartis/{{ $adartis->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit">Delete</button>
                  </form>
                  <a href="/adartis">Kembali</a>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
