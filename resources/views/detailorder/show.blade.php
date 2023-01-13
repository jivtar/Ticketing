@extends('layout/admin')

@section('title', 'Detail Order')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-6">            
            <h3 class = "mt-3">Detail Order</h3>
            
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{$detailorders->kode_order}}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">{{$detailorders->kode_tiket}}</h6>
                  <a href="{{ $detailorders->id }}/edit">Edit</a>
                  <form action="/detailorder/{{ $detailorders->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit">Delete</button>
                  </form>
                  <a href="/detailorder">Kembali</a>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
