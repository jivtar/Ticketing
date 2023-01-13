@extends('layout/admin')

@section('title', 'Show Detail Order')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-6">            
            <h3 class = "mt-3">Daftar Detail Order</h3>
            <a href="/detailorder/create" class="btn btn-primary my-3">Tambah Data Detail Order</a>
            <ul class="list-group">
                @foreach ($detailorders as $detailorder)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  {{ $detailorder -> kode_tiket}}
                  <a href="/detailorder/{{ $detailorder -> id }}" class="badge badge-info"> Detail </a>
                </li>
                @endforeach
              </ul>
        </div>
    </div>
</div>
@endsection

