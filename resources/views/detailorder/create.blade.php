@extends('layout/admin')

@section('title', 'Form Tambah Data Detail Order')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-8">            
            <h3 class = "mt-3">Form Tambah Data Detail Order</h3>
            
                <form method="post" action="/detailorder"><br>
                    @csrf
                    <div class="mb-3">
                        <label for="kode_order" class="form-label">Kode Order</label>
                        <input type="text" class="form-control" id="kode_order" placeholder="Masukkan Kode_order" name="kode_order">
                    </div>

                    <div class="mb-3">
                        <label for="kode_tiket" class="form-label">Kode Tiket</label>
                        <input type="text" class="form-control" id="kode_tiket" name="kode_tiket">
                    </div>

                    <button type="submit">Tambah Data</button>
                </form>

        </div>
    </div>
</div>
@endsection
