@extends('layouts.default')
@section('content')
    <section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <h1>Karyawan <b>Kantor</b></h1>
                <a href="{{url('create2')}}" class="btn btn-primary">Tambah Data</a>
        </div>
            <table class="table-bordered">
                <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Nomer HP</th>
                        <th>Actions</th>
                </tr>
                @foreach ($data as $dataKaryawan)
                <tr>
                    <td>{{ $dataKaryawan->nama }}</td>
                    <td>{{ $dataKaryawan->email }}</td>
                    <td>{{ $dataKaryawan->alamat }}</td>
                    <td>{{ $dataKaryawan->nohp }}</td>
                    <td>
                        <a href="{{url('/show2/'.$dataKaryawan->id)}}" class="btn btn-warning">Edit</a>
                        <a href="{{url('/destroy2/'.$dataKaryawan->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</section>
@endsection