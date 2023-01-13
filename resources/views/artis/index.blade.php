@extends('layout/main')

@section('title', 'Show Artis')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-6">            
            <h3 class = "mt-3">Daftar Artis</h3>

            @if (session('status'))
                <div class="alert alert-success">
                  {{ session('status')}}
                </div>
            @endif

            <ul class="list-group">
                @foreach ($artis as $artiss)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  {{ $artiss -> artis}}
                  <a href="/artis/{{ $artiss -> id }}" class="badge badge-info"> Detail </a>
                </li>
                @endforeach
              </ul>
        </div>
    </div>
</div>
@endsection
