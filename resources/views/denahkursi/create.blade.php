@extends('layout/admin')

@section('title', 'Form Tambah Data Denah Kursi')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-8">            
            <h3 class = "mt-3">Form Tambah Data Denah Kursi</h3>
            
                <form method="post" action="/denahkursi"><br>
                    @csrf
                    <div class="mb-3">
                        <label for="zona_kursi" class="form-label">Zona Kursi</label>
                        <input type="text" class="form-control" id="zona_kursi" placeholder="Masukkan Zona_kursi" name="zona_kursi">
                    </div>

                    <div class="mb-3">
                        <label for="kapasitas" class="form-label">Kapasitas</label>
                        <input type="text" class="form-control" id="kapasitas" name="kapasitas">
                    </div>

                    <div class="mb-3">
                        <label for="id_venue" class="form-label">ID Venue</label>
                        <input type="text" class="form-control" id="id_venue" name="id_venue">
                    </div>

                    <button type="submit">Tambah Data</button>
                </form>

        </div>
    </div>
</div>
@endsection
