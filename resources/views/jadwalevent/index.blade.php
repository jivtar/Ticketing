@extends('layout/admin')

@section('title', 'Show Jadwalevent')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-6">            
            <h3 class = "mt-3">List Jadwal</h3>
            <a href="/jadwalevent/create" class="btn btn-primary my-3">Tambah Data List Jadwal</a>
            <ul class="list-group">
                @foreach ($jadwalevents as $jadwalevent)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  {{ $jadwalevent -> tanggal}}
                  <a href="/jadwalevent/{{ $jadwalevent -> id }}" class="badge badge-info"> Detail </a>
                </li>
                @endforeach
              </ul>
        </div>
    </div>
</div>
@endsection

