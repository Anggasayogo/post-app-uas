@extends('layout.main')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="conatainer">
                    <p>Detail Barang</p>
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-6">
                            <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 100%;">
                                <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                                <div class="card-body">
                                    <h5 class="card-title text-center">Sayur</h5>
                                    <ul>
                                        <li>Category : {{ $data->nama_category }}</li>
                                        <li>Satuan : {{ $data->nama_satuan }}</li>
                                        <li>Harga : Rp,{{ number_format($data->harga_barang) }}</li>
                                    </ul>
                                </div>
                                <input type="number" name="qty" class="form-control mb-3" />
                                <a href="" class="form-control btn btn-primary">Beli Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endSection