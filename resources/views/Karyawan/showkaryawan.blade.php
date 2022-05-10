@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">
            <h1>Edit <b>Karyawan</b></h1>
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{ url('/update2/'.$data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="tanggal">Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Karyawan" value="{{$data->nama}}">
                        </div>
                        <div class="form-group">
                            <label for="saldo">Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Email Karyawan" value="{{ $data->email }}">
                        </div>
                        <div class="form-group">
                            <label for="pemasukan">Alamat</label>
                            <input type="text" name="alamat" class="form-control" placeholder="Alamat Karyawan" value="{{ $data->alamat }}"
                        </div>
                        <div class="form-group">
                            <label for="pembayaran">Nomer HP</label>
                            <input type="text" name="nohp" class="form-control" placeholder="Nomer HP Karyawan" value="{{ $data->nohp }}"
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary">Edit Data Karyawan</button>
                        </div>
                        <div class="form-group mt-2">
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="{{url('/karyawan')}}" role="button" aria-expanded="false" aria-controls="collapseExample">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection