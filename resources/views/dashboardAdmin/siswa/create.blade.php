@extends('dashboardAdmin.layout')

@section('content')
    <h3 class=" p-2 text-secondary"> Tambah Data Siswa</h3>
    <div class="row">
        <div class="col-lg-8">
            <div class="m-3">
                <form action="{{ route('siswa.store') }}" method="POST">
                    @csrf
                    <h5 class=" ml-2 text-secondary"> Data Pribadi</h5>
                    <div class="form-group mb-3">
                        <label for="username_siswa" class="font-weight-bold">Username Siswa :</label>
                        <input type="text"
                            class="form-control border border-secondary @error('username_siswa') is-invalid @enderror"
                            id="username_siswa" placeholder="name@example.com" name="username_siswa"
                            value="{{ old('username_siswa') }}">
                        @error('username_siswa')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="password">Password :</label>
                        <input type="password"
                            class="form-control border border-secondary @error('password') is-invalid @enderror"
                            id="password" placeholder="name@example.com" name="password" value="{{ old('password') }}">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="nisn">NISN :</label>
                        <input type="number"
                            class="form-control border border-secondary @error('nisn') is-invalid @enderror" id="nisn"
                            placeholder="name@example.com" name="nisn" value="{{ old('nisn') }}">
                        @error('nisn')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="nama">Nama :</label>
                        <input type="text"
                            class="form-control border border-secondary @error('nama') is-invalid @enderror" id="nama"
                            placeholder="name@example.com" name="nama" value="{{ old('nama') }}">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="tempat_lahir">Tempat Lahir :</label>
                        <input type="text"
                            class="form-control border border-secondary @error('tempat_lahir') is-invalid @enderror"
                            id="tempat_lahir" placeholder="name@example.com" name="tempat_lahir"
                            value="{{ old('tempat_lahir') }}">
                        @error('tempat_lahir')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="tgl_lahir">Tanggal Lahir :</label>
                        <input type="date"
                            class="form-control border border-secondary @error('tgl_lahir') is-invalid @enderror"
                            id="tgl_lahir" placeholder="name@example.com" name="tgl_lahir" value="{{ old('tgl_lahir') }}">
                        @error('tgl_lahir')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="form-group mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <select class="form-select @error('kelas') is-invalid @enderror" aria-label="Default select example"
                            name="kelas" value="{{ old('kelas') }}">
                            @error('kelas')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <option selected disabled>Pilih</option>
                            <option>VII A</option>
                            <option>VII B</option>
                            <option>VII C</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="walikelas" class="form-label">Walikelas</label>
                        <select class="form-select @error('walikelas') is-invalid @enderror"
                            aria-label="Default select example" name="walikelas" value="{{ old('walikelas') }}">
                            @error('walikelas')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <option selected disabled>Pilih</option>
                            <option>Asep</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="ekskul_siswa" class="form-label">Ekstrakulikuler Siswa</label>
                        <select class="form-select @error('ekskul_siswa') is-invalid @enderror"
                            aria-label="Default select example" name="ekskul_siswa" value="{{ old('ekskul_siswa') }}">
                            @error('ekskul_siswa')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <option selected disabled>Pilih</option>
                            <option>futsal</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="jns_kelamin" class="form-label">Jenis Kelamin</label>
                        <select class="form-select @error('jns_kelamin') is-invalid @enderror"
                            aria-label="Default select example" name="jns_kelamin" value="{{ old('jns_kelamin') }}">
                            @error('jns_kelamin')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <option selected disabled>Pilih</option>
                            <option>Laki-Laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="nohp_siswa">N0 HP Siswa :</label>
                        <input type="number"
                            class="form-control border border-secondary @error('nohp_siswa') is-invalid @enderror"
                            id="nohp_siswa" placeholder="name@example.com" name="nohp_siswa"
                            value="{{ old('nohp_siswa') }}">
                        @error('nohp_siswa')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <h5 class=" ml-2 text-secondary"> Data Orang Tua</h5>
                    <div class="form-group mb-3">
                        <label for="nama_ayah">Nama Ayah :</label>
                        <input type="text"
                            class="form-control border border-secondary @error('nama_ayah') is-invalid @enderror"
                            id="nama_ayah" placeholder="name@example.com" name="nama_ayah"
                            value="{{ old('nama_ayah') }}">
                        @error('nama_ayah')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="nama_ibu">Nama Ibu :</label>
                        <input type="text"
                            class="form-control border border-secondary @error('nama_ibu') is-invalid @enderror"
                            id="nama_ibu" placeholder="name@example.com" name="nama_ibu"
                            value="{{ old('nama_ibu') }}">
                        @error('nama_ibu')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="nohp_ortu">No HP Orang Tua :</label>
                        <input type="number"
                            class="form-control border border-secondary @error('nohp_ortu') is-invalid @enderror"
                            id="nohp_ortu" placeholder="name@example.com" name="nohp_ortu"
                            value="{{ old('nohp_ortu') }}">
                        @error('nohp_ortu')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="alamat">Alamat :</label>
                        <input type="text"
                            class="form-control border border-secondary @error('alamat') is-invalid @enderror"
                            id="alamat" placeholder="name@example.com" name="alamat" value="{{ old('alamat') }}">
                        @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <h5 class=" ml-2 text-secondary"> Data Wali</h5>
                    <div class="form-group mb-3">
                        <label for="nama_wali">Nama Wali :</label>
                        <input type="text"
                            class="form-control border border-secondary @error('nama_wali') is-invalid @enderror"
                            id="nama_wali" placeholder="isi (-) jika ingin dikosongkan" name="nama_wali"
                            value="{{ old('nama_wali') }}">
                        @error('nama_wali')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="nohp_wali">No HP Wali :</label>
                        <input type="text"
                            class="form-control border border-secondary @error('nohp_wali') is-invalid @enderror"
                            id="nohp_wali" placeholder="isi (-) jika ingin dikosongkan" name="nohp_wali"
                            value="{{ old('nohp_wali') }}">
                        @error('nohp_wali')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="alamat_wali">Alamat Wali :</label>
                        <input type="text"
                            class="form-control border border-secondary @error('alamat_wali') is-invalid @enderror"
                            id="alamat_wali" placeholder="isi (-) jika ingin dikosongkan" name="alamat_wali"
                            value="{{ old('alamat_wali') }}">
                        @error('alamat_wali')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col lg-6">
                        <button class="btn btn-success m-2" name="simpan" type="submit">Simpan</button>
                        <a href="{{ route('siswa.index') }}" class="btn btn-danger m-2"></span>Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
