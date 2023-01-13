@extends('layout/admin')

@section('title', 'Form Tambah Data Artis')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-8">            
            <h3 class = "mt-3">Form Tambah Data Artis</h3>
            
                <form method="post" action="/adartis"><br>
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Artis</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
                    </div>

                    <div class="mb-3">
                        <label for="jk" class="form-label">Jenis Kelamin</label>
                        <input type="text" class="form-control" id="jk" placeholder="P/L" name="jk">
                    </div>

                    <div class="mb-3">
                        <label for="ttl" class="form-label">Tempat, Tanggal Lahir</label>
                        <input type="text" class="form-control" id="ttl" placeholder="YY/MM/DD" name="ttl">
                    </div>

                    <button type="submit">Tambah Data</button>
                </form>

        </div>
    </div>
</div>
@endsection
