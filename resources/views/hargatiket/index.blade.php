@extends('layout/admin')

@section('title', 'Show Detail Harga Tiket')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-6">            
            <h3 class = "mt-3">Daftar Detail Harga Tiket</h3>
            <a href="/hargatiket/create" class="btn btn-primary my-3">Tambah Data Detail Harga Tiket</a>
            <ul class="list-group">
                @foreach ($hargatikets as $hargatiket)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  {{ $hargatiket -> harga}}
                  <a href="/hargatiket/{{ $hargatiket -> id }}" class="badge badge-info"> Detail </a>
                </li>
                @endforeach
              </ul>
        </div>
    </div>
</div>
@endsection

