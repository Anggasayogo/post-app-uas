@extends('layout.main')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            @if(session('message'))
            <script>
                Swal.fire(
                    'Good job!',
                    '{{ session("message") }}',
                    'success'
                )
            </script>
            @endif
            <div class="card-body">
                <a href="{{ url('admin/add/barang') }}" class="btn btn-primary fa fa-plus mb-2"></a>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Catgeory</th>
                                <th>Satuan</th>
                                <th>Harga</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $row)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $row->nama_barang }}</td>
                                <td>{{ $row->nama_category }}</td>
                                <td>{{ $row->nama_satuan }}</td>
                                <td>Rp,{{ number_format($row->harga_barang) }}</td>
                                <td>
                                    <a href="{{ url('admin/edit/barang') }}/{{ $row->id_barang }}" class="btn btn-warning fa fa-edit"></a>
                                    <a href="{{ url('admin/destroy/barang') }}/{{ $row->id_barang }}" class="btn btn-danger fa fa-trash"></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <ul class="pagination float-right">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endSection