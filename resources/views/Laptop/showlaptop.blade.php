@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">
            <h1>Edit <b>Laptop</b></h1>
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{ url('/update3/'.$data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="tanggal">Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Karyawan" value="{{$data->nama }}">
                        </div>
                        <div class="form-group">
                            <label for="saldo">Merk Laptop</label>
                            <input type="text" name="merk" class="form-control" placeholder="Merk Laptop" value="{{ $data->merk }}">
                        </div>
                        <div class="form-group">
                            <label for="pemasukan">Serial Numbers</label>
                            <input type="text" name="serial" class="form-control" placeholder="Serial Numbers" value="{{ $data->serial }}"
                        </div>
                        <div class="form-group">
                            <label for="pembayaran">Tanggal Ambil</label>
                            <input type="text" name="tglambil" class="form-control" placeholder="Tanggal Ambil" value="{{ $data->tglambil  }}"
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary">Edit Data Laptop</button>
                        </div>
                        <div class="form-group mt-2">
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="{{url('/laptop')}}" role="button" aria-expanded="false" aria-controls="collapseExample">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection