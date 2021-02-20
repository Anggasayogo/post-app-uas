@extends('layout.main')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ url('admin/update/barang') }}">
                    @csrf
                    <input type="hidden" name="id" value="{{ $detail->id_barang }}" />
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Barang</label>
                                    <input name="pelanggan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $detail->nama_barang }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Harga</label>
                                    <input name="harga" type="number" class="form-control" id="exampleInputPassword1" value="{{ $detail->harga_barang }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Satuan</label>
                                    <select name="satuan" class="form-control">
                                        @foreach($satuan as $row)
                                        <option value="{{ $row->id_satuan }}" <?= $detail->satuan_id === $row->id_satuan ? 'selected' : null ?>>{{ $row->nama_satuan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category</label>
                                    <select name="category" class="form-control">
                                        @foreach($category as $row)
                                        <option value="{{ $row->id_category }}" <?= $detail->category_id === $row->id_category ? 'selected' : null ?>>{{ $row->nama_category }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endSection