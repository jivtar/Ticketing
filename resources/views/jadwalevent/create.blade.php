@extends('layout/admin')

@section('title', 'Form Tambah List Jadwal')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-8">            
            <h3 class = "mt-3">Form Tambah List Jadwal</h3>
            
                <form method="post" action="/jadwalevent"><br>
                    @csrf
                    <div class="mb-3">
                        <label for="id_event" class="form-label">ID Event</label>
                        <input type="text" class="form-control" id="id_event" placeholder="Masukkan ID Event" name="id_event">
                    </div>

                    <div class="mb-3">
                        <label for="id_tempatduduk" class="form-label">ID Tempat Duduk</label>
                        <input type="text" class="form-control" id="id_tempatduduk" placeholder="Masukkan ID Tempat Duduk" name="id_tempatduduk">
                    </div>

                    <div class="mb-3">
                        <label for="id_artis" class="form-label">ID Artis</label>
                        <input type="text" class="form-control" id="id_artis" placeholder="Masukkan ID Artis" name="id_artis">
                    </div>

                    <div class="mb-3">
                        <label for="id_venue" class="form-label">ID Venue</label>
                        <input type="text" class="form-control" id="id_venue" placeholder="Masukkan ID Venue" name="id_venue">
                    </div>

                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="text" class="form-control" id="tanggal" placeholder="YY/MM/DD" name="tanggal">
                    </div>
                    
                    <div class="mb-3">
                        <label for="waktu_mulai" class="form-label">Waktu Mulai</label>
                        <input type="text" class="form-control" id="waktu_mulai" name="waktu_mulai">
                    </div>

                    <div class="mb-3">
                        <label for="waktu_selesai" class="form-label">Waktu Selesai</label>
                        <input type="text" class="form-control" id="waktu_selesai" name="waktu_selesai">
                    </div>

                    <button type="submit">Tambah Data</button>
                </form>

        </div>
    </div>
</div>
@endsection
