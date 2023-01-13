@extends('layout/admin')

@section('title', 'Detail Harga Tiket')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-6">            
            <h3 class = "mt-3">Detail Harga Tiket</h3>
            
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{$hargatikets->id_jadwal}}</h5>
                  <h6 class="card-title">{{$hargatikets->id_tempatduduk}}</h6>
                  <h6 class="card-subtitle mb-2 text-muted">Tital Tiket Habis  : {{$hargatikets->tiket_habis}}</h6>
                  <h6 class="card-subtitle mb-2 text-muted">Sisa Tiket   : {{$hargatikets->sisa_tiket}}</h6>
                  <h6 class="card-subtitle mb-2 text-muted">Harga   : {{$hargatikets->harga}}</h6>
                  <a href="{{ $hargatikets->id }}/edit">Edit</a>
                  <form action="/hargatiket/{{ $hargatikets->id }}" method="post" class="d-inline">
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
