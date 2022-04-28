@extends('layouts.default')

@section('content')
    <section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <h1>Kas Kantor</h1>
                <a href="{{url('create')}}" class="btn btn-primary">Tambah Data</a>
            </div>

            <div class="col-lg-8 mt-5">
                <table class="table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Saldo</th>
                        <th>Pemasukan</th>
                        <th>Pembayaran</th>
                        <th>Actions</th>
                    </tr>
                    @foreach ($data as $dataKas)
                    <tr>
                        <td>{{ $dataKas->id }}</td>
                        <td>{{ $dataKas->tanggal }}</td>
                        <td>{{ $dataKas->saldo }}</td>
                        <td>{{ $dataKas->pemasukan }}</td>
                        <td>{{ $dataKas->pembayaran }}</td>
                        <td>
                            <a href="{{url('/show/'.$dataKas->id)}}" class="btn btn-warning">Edit</a>
                            <a href="{{url('/destroy/'.$dataKas->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</section>
@endsection