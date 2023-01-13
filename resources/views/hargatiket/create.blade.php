@extends('layout/admin')

@section('title', 'Form Tambah Data Harga Tiket')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-8">            
            <h3 class = "mt-3">Form Tambah Data Harga Tiket</h3>
            
                <form method="post" action="/hargatiket"><br>
                    @csrf
                    <div class="mb-3">
                        <label for="id_jadwal" class="form-label">ID Jadwal</label>
                        <input type="text" class="form-control" id="id_jadwal" placeholder="Masukkan Id_jadwal" name="id_jadwal">
                    </div>

                    <div class="mb-3">
                        <label for="id_tempatduduk" class="form-label">ID Tempat Duduk</label>
                        <input type="text" class="form-control" id="id_tempatduduk" name="id_tempatduduk">
                    </div>

                    <div class="mb-3">
                        <label for="tiket_habis" class="form-label">Jumlah Tiket Habis</label>
                        <input type="text" class="form-control" id="tiket_habis" name="tiket_habis">
                    </div>

                    <div class="mb-3">
                        <label for="sisa_tiket" class="form-label">Sisa Tiket</label>
                        <input type="text" class="form-control" id="sisa_tiket" name="sisa_tiket">
                    </div>

                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="text" class="form-control" id="harga" name="harga">
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
