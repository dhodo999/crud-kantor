@extends('layouts.default')
@section('content')
    <section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <h1>Data <b>Laptop</b></h1>
                <a href="{{url('create3')}}" class="btn btn-primary">Tambah Data</a>
        </div>
            <table class="table-bordered">
                <tr>
                        <th>Nama Karyawan</th>
                        <th>Merk Laptop</th>
                        <th>Serial Numbers</th>
                        <th>Tanggal Ambil</th>
                        <th>Actions</th>
                </tr>
                @foreach ($data as $dataLaptop)
                <tr>
                    <td>{{ $dataLaptop->nama }}</td>
                    <td>{{ $dataLaptop->merk }}</td>
                    <td>{{ $dataLaptop->serial }}</td>
                    <td>{{ $dataLaptop->tglambil }}</td>
                    <td>
                        <a href="{{url('/show3/'.$dataLaptop->id)}}" class="btn btn-warning">Edit</a>
                        <a href="{{url('/destroy3/'.$dataLaptop->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</section>
@endsection