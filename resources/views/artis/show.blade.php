@extends('layout/main')

@section('title', 'Detail Artis')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-6">            
            <h3 class = "mt-3">Detail Artis</h3>
            
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{$artis->artis}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{$artis->jk}}</h6>
                  <p class="card-text">Tempat Tanggal Lahir     : {{$artis->ttl}}</p>
                  <a href="/artis">Kembali</a>
                </div>
              </div>

        </div>
    </div>
</div>
@endsection

