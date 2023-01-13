@extends('layout/admin')

@section('title', 'Form Ubah Data Artis')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-8">            
            <h3 class = "mt-3">Form Ubah Data Jadwal Konser</h3>
            
                <form method="post" action="/jadwalevent/{{ $jadwalevents->id }}"><br>
                    @method('patch')
                    @csrf
                    <!-- <div class="mb-3">
                        <label for="nama" class="form-label">Id Jadwal</label>
                        <input type="text" class="form-control" id="id_jadwal" placeholder="Masukkan Id Event" name="id" value="{{ $jadwalevents->id }}">
                    </div> -->

                    <div class="mb-3">
                        <label for="nama" class="form-label">Id Event</label>
                        <input type="text" class="form-control" id="id_event" placeholder="Masukkan Id Event" name="id_event" value="{{ $jadwalevents->id_event }}">
                    </div>

                    <div class="mb-3">
                        <label for="jk" class="form-label">Id Tempat Duduk</label>
                        <input type="text" class="form-control" id="id_tempatduduk" placeholder="Kategori Event" name="id_tempatduduk" value="{{ $jadwalevents->id_tempatduduk }}">
                    </div>

                    <div class="mb-3">
                        <label for="jk" class="form-label">Id Artis</label>
                        <input type="text" class="form-control" id="id_artis" placeholder="Id Artis" name="id_artis" value="{{ $jadwalevents->id_artis }}">
                    </div>

                    <div class="mb-3">
                        <label for="jk" class="form-label">Id Venue</label>
                        <input type="text" class="form-control" id="id_venue" placeholder="Id Venue" name="id_venue" value="{{ $jadwalevents->id_venue }}">
                    </div>

                    <div class="mb-3">
                        <label for="ttl" class="form-label">Tanggal</label>
                        <input type="text" class="form-control" id="tanggal" placeholder="YY/MM/DD" name="tanggal" value="{{ $jadwalevents->tanggal }}">
                    </div>

                    <div class="mb-3">
                        <label for="jk" class="form-label">Waktu Mulai</label>
                        <input type="text" class="form-control" id="waktu_mulai" placeholder="Waktu Mulai" name="waktu_mulai" value="{{ $jadwalevents->waktu_mulai }}">
                    </div>

                    <div class="mb-3">
                        <label for="jk" class="form-label">Waktu Selesai</label>
                        <input type="text" class="form-control" id="waktu_selesai" placeholder="Waktu Selesai" name="waktu_selesai" value="{{ $jadwalevents->waktu_selesai }}">
                    </div>

                    <button type="submit">Ubah Data</button>
                </form>

        </div>
    </div>
</div>
@endsection
