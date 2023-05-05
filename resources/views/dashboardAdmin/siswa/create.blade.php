@extends('dashboardAdmin.layout')

@section('content')
    <h3 class=" p-2 text-secondary"> Tambah Data Siswa</h3>
    <div class="row">
        <div class="col-lg-8">
            <div class="m-3">
                <form action="{{ route('siswa.store') }}" method="POST">
                    <h5 class=" ml-2 text-secondary"> Data Pribadi</h5>
                    <div class="form-group mb-3">
                        <label for="username_siswa" class="font-weight-bold">Username Siswa :</label>
                        <input type="text" class="form-control border border-secondary" id="username_siswa"
                            placeholder="name@example.com" name="username_siswa">
                    </div>
                    <div class="form-group mb-3">
                        <label for="password">Password :</label>
                        <input type="password" class="form-control border border-secondary" id="password"
                            placeholder="name@example.com" name="password">
                    </div>

                    <div class="form-group mb-3">
                        <label for="nisn">NISN :</label>
                        <input type="text" class="form-control border border-secondary" id="nisn"
                            placeholder="name@example.com" name="nisn">
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
                        <label for="kelas" class="form-label">Kelas</label>
                        <select class="form-select" aria-label="Default select example" name="kelas">
                            <option selected>Pilih</option>
                            <option value="1">VII A</option>
                            <option value="2">VII B</option>
                            <option value="1">VII C</option>
                            <option value="2">VIII A</option>
                            <option value="1">VIII B</option>
                            <option value="2">VIII C</option>
                            <option value="1">IX A</option>
                            <option value="2">IX B</option>
                            <option value="1">IX C</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="walikelas" class="form-label">Walikelas</label>
                        <select class="form-select" aria-label="Default select example" name="walikelas">
                            <option selected>Pilih</option>
                            <option value="1">Asep</option>
                            <option value="2">Udin</option>
                            <option value="1">Rojak</option>
                            <option value="2">Siti</option>
                            <option value="1">Dimas</option>
                            <option value="2">Rizki</option>
                            <option value="1">Adit</option>
                            <option value="2">Sopo</option>
                            <option value="1">Jarwo</option>
                        </select>
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
                        <label for="nohp_siswa">N0 HP Siswa :</label>
                        <input type="text" class="form-control border border-secondary" id="nohp_siswa"
                            placeholder="name@example.com" name="nohp_siswa">
                    </div>
                    <h5 class=" ml-2 text-secondary"> Data Orang Tua</h5>
                    <div class="form-group mb-3">
                        <label for="nama_ayah">Nama Ayah :</label>
                        <input type="text" class="form-control border border-secondary" id="nama_ayah"
                            placeholder="name@example.com" name="nama_ayah">
                    </div>

                    <div class="form-group mb-3">
                        <label for="nama_ibu">Nama Ibu :</label>
                        <input type="text" class="form-control border border-secondary" id="nama_ibu"
                            placeholder="name@example.com" name="nama_ibu">
                    </div>

                    <div class="form-group mb-3">
                        <label for="nohp_ortu">No HP Orang Tua :</label>
                        <input type="text" class="form-control border border-secondary" id="nohp_ortu"
                            placeholder="name@example.com" name="nohp_ortu">
                    </div>
                    <div class="form-group mb-3">
                        <label for="alamat">Alamat :</label>
                        <input type="text" class="form-control border border-secondary" id="alamat"
                            placeholder="name@example.com" name="alamat">
                    </div>

                    <h5 class=" ml-2 text-secondary"> Data Wali</h5>
                    <div class="form-group mb-3">
                        <label for="nama_wali">Nama Wali :</label>
                        <input type="text" class="form-control border border-secondary" id="nama_wali"
                            placeholder="name@example.com" name="nama_wali">
                    </div>

                    <div class="form-group mb-3">
                        <label for="nohp_wali">No HP Wali :</label>
                        <input type="text" class="form-control border border-secondary" id="nohp_wali"
                            placeholder="name@example.com" name="nohp_wali">
                    </div>

                    <div class="form-group mb-3">
                        <label for="alamat_wali">Alamat Wali :</label>
                        <input type="text" class="form-control border border-secondary" id="alamat_wali"
                            placeholder="name@example.com" name="alamat_wali">
                    </div>

                    <div class="form-group mb-3">
                        <label for="nohp_wali">No HP Wali :</label>
                        <input type="text" class="form-control border border-secondary" id="nohp_wali"
                            placeholder="name@example.com" name="nohp_wali">
                    </div>
                </form>
            </div>
            <div class="col lg-6">
                <a href="{{ route('siswa.index') }}" class="btn btn-primary m-2"><span
                        class="mdi mdi-keyboard-backspace"></span>Kembali</a>
            </div>
        </div>
    </div>
@endsection
