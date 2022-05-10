@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">
            <h1>Create <b>Data</b></h1>
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{url('store3')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="tanggal">Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Karyawan">
                        </div>
                        <div class="form-group">
                            <label for="saldo">Merk Laptop</label>
                            <input type="text" name="merk" class="form-control" placeholder="Merk Laptop">
                        </div>
                        <div class="form-group">
                            <label for="pemasukan">Serial Numbers</label>
                            <input type="text" name="serial" class="form-control" placeholder="Serial Numbers">
                        </div>
                        <div class="form-group">
                            <label for="pembayaran">Tanggal Ambil</label>
                            <input type="text" name="tglambil" class="form-control" placeholder="D/m/Y">
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary">Tambah Data Laptop</button>
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
