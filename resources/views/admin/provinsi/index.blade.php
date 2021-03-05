@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                    @include('flash-message')
                <div class="card-header">
                    <b>Data Provinsi</b> 
                    <a href="{{route('provinsi.create')}}" class="btn btn-dark float-right">Tambah</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div style="height:600px;overflow:auto;margin-right:15px;">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Kode Provinsi</th>
                                <th>Provinsi</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($provinsi as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->kode_provinsi}}</td>
                                <td>{{$data->nama_provinsi}}</td>
                                <td>
                                    <form action="{{route('provinsi.destroy', $data->id)}}" method="post">
                                        @csrf
                                        @method('Delete')
                                        <a class="far fa-eye btn btn-info" href=" {{ route('provinsi.show', $data->id) }} "></a>
                                        <a class="far fa-edit btn btn-warning" href=" {{ route('provinsi.edit', $data->id) }} "></a>
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
