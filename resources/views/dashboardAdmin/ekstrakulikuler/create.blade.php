@extends('dashboardAdmin.layout')

@section('content')
    <h3 class=" p-2 text-secondary"> Tambah Extrakulikuler</h3>
    <div class="row">
        <div class="col-lg-8">
            <div class="m-3">
                <form action="{{ route('ekstrakulikuler.store') }}" method="POST">
                    <div class="form-group mb-3">
                        <label for="nama" class="font-weight-bold">Nama Ekstrakulikuler :</label>
                        <input type="text" class="form-control border border-secondary" id="nama"
                            placeholder="name@example.com" name="nama">
                    </div>
                    <div class="form-group mb-3">
                        <label for="hari" class="form-label">Hari</label>
                        <select class="form-select" aria-label="Default select example" name="hari">
                            <option selected>Pilih</option>
                            <option value="1">Senin</option>
                            <option value="2">Selasa</option>
                            <option value="3">Rabu</option>
                            <option value="4">Kamis</option>
                            <option value="5">Jumat</option>
                            <option value="6">Sabtu</option>
                            <option value="7">Minggu</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="waktu" class="font-weight-bold">Waktu :</label>
                        <input type="text" class="form-control border border-secondary" id="waktu"
                            placeholder="name@example.com" name="waktu">
                    </div>
                </form>
            </div>
            <div class="col lg-6">
                <a href="{{ route('ekstrakulikuler.index') }}" class="btn btn-primary m-2"><span
                        class="mdi mdi-keyboard-backspace"></span>Kembali</a>
            </div>
        </div>
    </div>
@endsection
