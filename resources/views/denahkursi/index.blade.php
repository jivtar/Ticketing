@extends('layout/admin')

@section('title', 'Show Detail Denah Kursi')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-6">            
            <h3 class = "mt-3">Daftar Detail Denah Kursi</h3>
            <a href="/denahkursi/create" class="btn btn-primary my-3">Tambah Data Detail Denah Kursi</a>
            <ul class="list-group">
                @foreach ($denahkurses as $denahkurse)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  {{ $denahkurse -> zona_kursi}}
                  <a href="/denahkursi/{{ $denahkurse -> id }}" class="badge badge-info"> Detail </a>
                </li>
                @endforeach
              </ul>
        </div>
    </div>
</div>
@endsection

