@extends('layout/admin')

@section('title', 'Form Ubah Data Detail Order')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-8">            
            <h3 class = "mt-3">Form Ubah Data Detail Order</h3>
            
                <form method="post" action="/detailorder/{{ $detailorders->id }}"><br>
                    @method('patch')
                    @csrf
                    <div class="mb-3">
                        <label for="kode_order" class="form-label">Kode Order</label>
                        <input type="text" class="form-control" id="kode_order" placeholder="Masukkan Kode_order" name="kode_order" value="{{ $detailorders->kode_order }}">
                    </div>

                    <div class="mb-3">
                        <label for="kode_tiket" class="form-label">Kode Tiket</label>
                        <input type="text" class="form-control" id="kode_tiket"  name="kode_tiket" value="{{ $detailorders->kode_tiket }}">
                    </div>

                    <button type="submit">Ubah Data</button>
                </form>

        </div>
    </div>
</div>
@endsection
