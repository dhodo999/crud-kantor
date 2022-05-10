@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">
            <h1>Edit <b>Pengeluaran</b></h1>
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{ url('/update1/'.$data->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="text" name="tanggal" class="form-control" placeholder="D/m/Y" value="{{$data->tanggal}}">
                        </div>
                        <div class="form-group">
                            <label for="saldo">Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi" value="{{ $data->saldo }}">
                        </div>
                        <div class="form-group">
                            <label for="pemasukan">Pengeluaran</label>
                            <input type="text" name="pengeluaran" class="form-control" placeholder="Pengeluaran" value="{{ $data->pemasukan }}"
                        </div>
                        <div class="form-group">
                            <label for="pembayaran">Pembayaran</label>
                            <input type="text" name="pembayaran" class="form-control" placeholder="Metode Pembayaran" value="{{ $data->pembayaran}}"
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary">Edit Data Pengeluaran</button>
                        </div>
                        <div class="form-group mt-2">
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="{{url('/pengeluaran')}}" role="button" aria-expanded="false" aria-controls="collapseExample">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection