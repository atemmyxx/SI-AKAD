@extends('dashboardAdmin.layout')

@section('content')
    <h3 class=" p-2 text-secondary"> Edit Data Guru</h3>
    <div class="row">
        <div class="col-lg-8">
            <div class="m-3">
                <form action="{{ route('guru.update', $guru->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group mb-3">
                        <label for="username_guru" class="font-weight-bold">Username :</label>
                        <input type="text"
                            class="form-control border border-secondary @error('username_guru') is-invalid @enderror"
                            id="username_guru" placeholder="name@example.com" name="username_guru"
                            value="{{ old('username_guru', $guru->username_guru) }}" required>
                        @error('username_guru')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="password">Password :</label>
                        <input type="password"
                            class="form-control border border-secondary @error('password') is-invalid @enderror"
                            id="password" placeholder="name@example.com" name="password"
                            value="{{ old('password', $guru->password) }}" required>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="nip">NIP :</label>
                        <input type="text"
                            class="form-control border border-secondary @error('nip') is-invalid @enderror" id="nip"
                            placeholder="name@example.com" name="nip" value="{{ old('nip', $guru->nip) }}" required>
                        @error('nip')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="nama_guru">Nama :</label>
                        <input type="text"
                            class="form-control border border-secondary @error('nama_guru') is-invalid @enderror"
                            id="nama_guru" placeholder="name@example.com" name="nama_guru"
                            value="{{ old('nama_guru', $guru->nama_guru) }}" required>
                        @error('nama_guru')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="tempat_lahir_guru">Tempat Lahir :</label>
                        <input type="text"
                            class="form-control border border-secondary @error('tempat_lahir_guru') is-invalid @enderror"
                            id="tempat_lahir_guru" placeholder="name@example.com" name="tempat_lahir_guru"
                            value="{{ old('tempat_lahir_guru', $guru->tempat_lahir_guru) }}"required>
                        @error('tempat_lahir_guru')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="tgl_lahir_guru">Tanggal Lahir :</label>
                        <input type="date"
                            class="form-control border border-secondary @error('tgl_lahir_guru') is-invalid @enderror"
                            id="tgl_lahir_guru" placeholder="name@example.com" name="tgl_lahir_guru"
                            value="{{ old('tgl_lahir_guru', $guru->tgl_lahir_guru) }}" required>
                        @error('tgl_lahir_guru')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="jns_kelamin_guru" class="form-label">Jenis Kelamin</label>
                        <select class="form-select @error('jns_kelamin_guru') is-invalid @enderror"
                            aria-label="Default select example" name="jns_kelamin_guru"
                            value="{{ old('jns_kelamin_guru', $guru->jns_kelamin_guru) }}" required>
                            @error('jns_kelamin_guru')
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
                        <label for="pendidikan_terakhir_guru" class="form-label">Pendidikan Terakhir :</label>
                        <select class="form-select @error('pendidikan_terakhir_guru') is-invalid @enderror"
                            aria-label="Default select example" name="pendidikan_terakhir_guru"
                            value="{{ old('pendidikan_terakhir_guru', $guru->pendidikan_terakhir_guru) }}" required>
                            @error('pendidikan_terakhir_guru')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <option selected disabled>Pilih</option>
                            <option>SMA / Sederajat</option>
                            <option> Diploma 3 (D3) </option>
                            <option> Diploma 4 (D4) </option>
                            <option> Strata 1 (S1) </option>
                            <option> Strata 2 (S2) </option>
                            <option> Strata 3 (S3) </option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="nohp_guru">Nomor HP :</label>
                        <input type="numeric"
                            class="form-control border border-secondary  @error('nohp_guru') is-invalid @enderror"
                            id="nohp_guru" placeholder="name@example.com" name="nohp_guru"
                            value="{{ old('nohp_guru', $guru->nohp_guru) }}" required>
                        @error('nohp_guru')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="alamat_guru">Alamat :</label>
                        <input type="text"
                            class="form-control border border-secondary @error('alamat_guru') is-invalid @enderror"
                            id="alamat_guru" placeholder="name@example.com" name="alamat_guru"
                            value="{{ old('alamat_guru', $guru->alamat_guru) }}" required>
                        @error('alamat_guru')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col lg-6">
                        <button class="btn btn-success m-2" name="simpan" type="submit">Simpan</button>
                        <a href="{{ route('guru.index') }}" class="btn btn-danger m-2"></span>Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
