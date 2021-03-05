@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                    @include('flash-message')
                <div class="card-header">
                    <b>Data Kecamatan</b> 
                    <a href="{{route('kecamatan.create')}}" class="btn btn-dark float-right">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div style="height:600px;overflow:auto;margin-right:15px;">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Kecamatan</th>
                                <th>Kota</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($kecamatan as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->nama_kecamatan}}</td>
                                <td>{{$data->kota->nama_kota}}</td>
                                <td>
                                    <form action="{{route('kecamatan.destroy', $data->id)}}" method="post">
                                        @csrf
                                        @method('Delete')
                                        <a class="far fa-eye btn btn-info" href=" {{ route('kecamatan.show', $data->id) }} "></a>
                                        <a class="far fa-edit btn btn-warning" href=" {{ route('kecamatan.edit', $data->id) }} "></a>
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
