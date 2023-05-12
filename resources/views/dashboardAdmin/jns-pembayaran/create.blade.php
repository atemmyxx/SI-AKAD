@extends('dashboardAdmin.layout')

@section('content')
    <h3 class=" p-2 text-secondary"> Tambah Jenis Pembayaran</h3>
    <div class="row">
        <div class="col-lg-8">
            <div class="m-3">
                <form action="{{ route('mapel.store') }}" method="POST">
                    <div class="form-group mb-3">
                        <label for="nama" class="font-weight-bold">Nama :</label>
                        <input type="text" class="form-control border border-secondary" id="nama"
                            placeholder="name@example.com" name="nama">
                    </div>
                </form>
            </div>
            <div class="col lg-6">
                <a href="{{ route('jns-pembayaran.index') }}" class="btn btn-primary m-2"><span
                        class="mdi mdi-keyboard-backspace"></span>Kembali</a>
            </div>
        </div>
    </div>
@endsection
