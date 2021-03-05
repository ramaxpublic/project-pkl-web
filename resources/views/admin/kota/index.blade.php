@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                    @include('flash-message')
                <div class="card-header">
                    <b>Data Kota</b> 
                    <a href="{{route('kota.create')}}" class="btn btn-dark float-right">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div style="height:600px;overflow:auto;margin-right:15px;">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Kode Kota</th>
                                <th>Kota</th>
                                <th>Provinsi</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($kota as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->kode_kota}}</td>
                                <td>{{$data->nama_kota}}</td>
                                <td>{{$data->provinsi->nama_provinsi}}</td>
                                <td>
                                    <form action="{{route('kota.destroy', $data->id)}}" method="post">
                                        @csrf
                                        @method('Delete')
                                        <a class="far fa-eye btn btn-info" href=" {{ route('kota.show', $data->id) }} "></a>
                                        <a class="far fa-edit btn btn-warning" href=" {{ route('kota.edit', $data->id) }} "></a>
                                        <button type="submit" class="far fa-trash-alt btn btn-danger" onclick="return confirm('Anda Yakin Ingin Hapus?')"></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
