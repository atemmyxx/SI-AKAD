@extends('dashboardAdmin.layout')

@section('content')
    <h3 class=" p-2 text-secondary"> Tambah Data Guru</h3>
    <div class="row">
        <div class="col-lg-8">
            <div class="m-3">
                <form action="{{ route('guru.store') }}" method="POST">
                    <div class="form-group mb-3">
                        <label for="username" class="font-weight-bold">Username :</label>
                        <input type="text" class="form-control border border-secondary" id="username"
                            placeholder="name@example.com" name="username">
                    </div>
                    <div class="form-group mb-3">
                        <label for="password">Password :</label>
                        <input type="password" class="form-control border border-secondary" id="password"
                            placeholder="name@example.com" name="password">
                    </div>

                    <div class="form-group mb-3">
                        <label for="nip">NIP :</label>
                        <input type="text" class="form-control border border-secondary" id="nip"
                            placeholder="name@example.com" name="nip">
                    </div>
                    <div class="form-group mb-3">
                        <label for="nama">Nama :</label>
                        <input type="text" class="form-control border border-secondary" id="nama"
                            placeholder="name@example.com" name="nama">
                    </div>

                    <div class="form-group mb-3">
                        <label for="tempat_lahir">Tempat Lahir :</label>
                        <input type="text" class="form-control border border-secondary" id="tempat_lahir"
                            placeholder="name@example.com" name="tempat_lahir">
                    </div>

                    <div class="form-group mb-3">
                        <label for="tgl_lahir">Tanggal Lahir :</label>
                        <input type="date" class="form-control border border-secondary" id="tgl_lahir"
                            placeholder="name@example.com" name="tgl_lahir">
                    </div>
                    <div class="form-group mb-3">
                        <label for="jns_kelamin" class="form-label">Jenis Kelamin</label>
                        <select class="form-select" aria-label="Default select example" name="jns_kelamin">
                            <option selected>Pilih</option>
                            <option value="1">Laki-Laki</option>
                            <option value="2">Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="nohp_guru">Nomor HP :</label>
                        <input type="text" class="form-control border border-secondary" id="nohp_guru"
                            placeholder="name@example.com" name="nohp_guru">
                    </div>

                    <div class="form-group mb-3">
                        <label for="alamat">Alamat :</label>
                        <input type="text" class="form-control border border-secondary" id="nama"
                            placeholder="name@example.com" name="alamat">
                    </div>
                </form>
            </div>
            <div class="col lg-6">
                <a href="{{ route('guru.index') }}" class="btn btn-primary m-2"><span
                        class="mdi mdi-keyboard-backspace"></span>Kembali</a>
            </div>
        </div>
    </div>
@endsection
