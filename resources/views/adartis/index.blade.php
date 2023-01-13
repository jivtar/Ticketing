@extends('layout/admin')

@section('title', 'Show Artis')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-6">            
            <h3 class = "mt-3">Daftar Artis</h3>
            <a href="/adartis/create" class="btn btn-primary my-3">Tambah Daftar Artis</a>
            <ul class="list-group">
                @foreach ($adartis as $adartiss)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  {{ $adartiss -> nama}}
                  <a href="/adartis/{{ $adartiss -> id }}" class="badge badge-info"> Detail </a>
                </li>
                @endforeach
              </ul>
        </div>
    </div>
</div>
@endsection

