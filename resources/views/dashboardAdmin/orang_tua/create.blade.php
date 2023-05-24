@extends('dashboardAdmin.layout')

@section('content')
    <h3 class=" p-2 text-secondary"> Tambah Data Orang Tua</h3>
    <div class="row">
        <div class="col-lg-8">
            <div class="m-3">
                <form action="{{ route('orang_tua.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="username_ortu" class="font-weight-bold">Username Orang Tua :</label>
                        <input type="text"
                            class="form-control border border-secondary @error('username_ortu') is-invalid @enderror"
                            id="username_ortu" placeholder="name@example.com" name="username_ortu"
                            value="{{ old('username_ortu') }}">
                        @error('username_ortu')
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
                        <label for="nama_siswa" class="form-label">Nama siswa :</label>
                        <select class="form-select @error('nama_siswa') is-invalid @enderror"
                            aria-label="Default select example" name="nama_siswa" value="{{ old('nama_siswa') }}">
                            @error('nama_siswa')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <option selected disabled>Pilih</option>
                            <option>Arkan Alhady</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="nik_ayah">NIK Ayah :</label>
                        <input type="number"
                            class="form-control border border-secondary @error('nik_ayah') is-invalid @enderror"
                            id="nik_ayah" placeholder="name@example.com" name="nik_ayah" value="{{ old('nik_ayah') }}">
                        @error('nik_ayah')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="nama_ayah">Nama Ayah :</label>
                        <input type="text"
                            class="form-control border border-secondary @error('nama_ayah') is-invalid @enderror"
                            id="nama_ayah" placeholder="name@example.com" name="nama_ayah" value="{{ old('nama_ayah') }}">
                        @error('nama_ayah')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="tgllahir_ayah">Tanggal Lahir :</label>
                        <input type="date"
                            class="form-control border border-secondary @error('tgllahir_ayah') is-invalid @enderror"
                            id="tgllahir_ayah" placeholder="name@example.com" name="tgllahir_ayah"
                            value="{{ old('tgllahir_ayah') }}">
                        @error('tgllahir_ayah')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="pendidikan_ayah" class="form-label">Pendidikan Terakhir :</label>
                        <select class="form-select @error('pendidikan_ayah') is-invalid @enderror"
                            aria-label="Default select example" name="pendidikan_ayah"
                            value="{{ old('pendidikan_ayah') }}">
                            @error('pendidikan_ayah')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <option selected disabled>Pilih</option>
                            <option>SD / Sederajat</option>
                            <option>SMP / Sederajat</option>
                            <option>SMA / Sederajat</option>
                            <option> Diploma 3 (D3) </option>
                            <option> Diploma 4 (D4) </option>
                            <option> Strata 1 (S1) </option>
                            <option> Strata 2 (S2) </option>
                            <option> Strata 3 (S3) </option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="pekerjaan_ayah" class="form-label">Pekerjaan Ayah :</label>
                        <select class="form-select @error('pekerjaan_ayah') is-invalid @enderror"
                            aria-label="Default select example" name="pekerjaan_ayah" value="{{ old('pekerjaan_ayah') }}">
                            @error('pekerjaan_ayah')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <option selected disabled>Pilih</option>
                            <option>Pegawai Negeri</option>
                            <option> Pegawai Swasta </option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="nik_ibu">NIK Ibu :</label>
                        <input type="number"
                            class="form-control border border-secondary @error('nik_ibu') is-invalid @enderror"
                            id="nik_ibu" placeholder="name@example.com" name="nik_ibu" value="{{ old('nik_ibu') }}">
                        @error('nik_ibu')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="nama_ibu">Nama Ibu :</label>
                        <input type="text"
                            class="form-control border border-secondary @error('nama_ibu') is-invalid @enderror"
                            id="nama_ibu" placeholder="name@example.com" name="nama_ibu" value="{{ old('nama_ibu') }}">
                        @error('nama_ibu')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="tgllahir_ibu">Tanggal Lahir :</label>
                        <input type="date"
                            class="form-control border border-secondary @error('tgllahir_ibu') is-invalid @enderror"
                            id="tgllahir_ibu" placeholder="name@example.com" name="tgllahir_ibu"
                            value="{{ old('tgllahir_ibu') }}">
                        @error('tgllahir_ibu')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="pendidikan_ibu" class="form-label">Pendidikan Terakhir :</label>
                        <select class="form-select @error('pendidikan_ibu') is-invalid @enderror"
                            aria-label="Default select example" name="pendidikan_ibu"
                            value="{{ old('pendidikan_ibu') }}">
                            @error('pendidikan_ibu')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <option selected disabled>Pilih</option>
                            <option>SD / Sederajat</option>
                            <option>SMP / Sederajat</option>
                            <option>SMA / Sederajat</option>
                            <option> Diploma 3 (D3) </option>
                            <option> Diploma 4 (D4) </option>
                            <option> Strata 1 (S1) </option>
                            <option> Strata 2 (S2) </option>
                            <option> Strata 3 (S3) </option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="pekerjaan_ibu" class="form-label">Pekerjaan Ibu :</label>
                        <select class="form-select @error('pekerjaan_ibu') is-invalid @enderror"
                            aria-label="Default select example" name="pekerjaan_ibu" value="{{ old('pekerjaan_ibu') }}">
                            @error('pekerjaan_ibu')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <option selected disabled>Pilih</option>
                            <option>Pegawai Negeri</option>
                            <option> Pegawai Swasta </option>
                        </select>
                    </div>

                    <div class="col lg-6">
                        <button class="btn btn-success m-2" name="simpan" type="submit">Simpan</button>
                        <a href="{{ route('orang_tua.index') }}" class="btn btn-danger m-2"></span>Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
