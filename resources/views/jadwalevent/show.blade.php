@extends('layout/admin')

@section('title', 'Artis')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-6">            
            <h3 class = "mt-3">Detail Artis</h3>
            
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{$jadwalevents->tanggal}}</h5>
                  <p class="card-text">waktu mulai     : {{$jadwalevents->waktu_mulai}}</p>
                  <p class="card-text">waktu selesai     : {{$jadwalevents->waktu_selesai}}</p>
                  <a href="{{ $jadwalevents->id }}/edit">Edit</a>
                  <form action="/jadwalevent/{{ $jadwalevents->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit">Delete</button>
                  </form>
                  <a href="/jadwalevent">Kembali</a>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
