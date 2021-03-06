@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        Tambah Data Desa
                    </div>
                    <div class="card-body">
                        <form action="{{route('desa.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                                <label for="">Pilih Kecamatan</label>
                                <select name="id_kecamatan" class="form-control">
                                    @foreach($kecamatan as $data)
                                    <option value="{{$data->id}}">{{$data->nama_kecamatan}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Nama Desa</label>
                                <input type="text" name="nama_desa" class="form-control" required>
                                @if ($errors->has('nama_desa'))
                                    <span class="text-danger"> {{ $errors->first('nama_desa') }} </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-info btn block">Simpan</button>
                                <a href=" {{ route('desa.index') }} " class="btn btn-dark">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection