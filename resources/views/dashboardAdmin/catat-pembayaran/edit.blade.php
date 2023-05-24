@extends('dashboardAdmin.layout')

@section('content')
    <h3 class=" p-2 text-secondary"> Tambah Jenis Pembayaran</h3>
    <div class="row">
        <div class="col-lg-8">
            <div class="m-3">
                <form action="{{ route('catat-pembayaran.update', $catatPembayaran->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group mb-3">
                        <label for="nisn" class="font-weight-bold @error('nisn') is-invalid @enderror">NISN :</label>
                        <input type="numeric" class="form-control border border-secondary" id="nisn"
                            placeholder="isi nisn siswa" name="nisn" value="{{ old('nisn', $catatPembayaran->nisn) }}"
                            required>
                        @error('nisn')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <select class="form-select @error('kelas') is-invalid @enderror" aria-label="Default select example"
                            name="kelas" value="{{ old('kelas', $catatPembayaran->kelas) }}" required>
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
                        <label for="nama_siswa" class="form-label">Nama Siswa :</label>
                        <select class="form-select @error('nama_siswa') is-invalid @enderror"
                            aria-label="Default select example" name="nama_siswa"
                            value="{{ old('nama_siswa', $catatPembayaran->nama_siswa) }}" required>
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
                        <label for="jenis_pembayaran" class="form-label">Jenis Pembayaran</label>
                        <select class="form-select @error('jenis_pembayaran') is-invalid @enderror"
                            aria-label="Default select example" name="jenis_pembayaran"
                            value="{{ old('jenis_pembayaran', $catatPembayaran->jenis_pembayaran) }}" required>
                            @error('jenis_pembayaran')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <option selected disabled>Pilih</option>
                            <option>SPP</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="jumlah_pembayaran"
                            class="font-weight-bold @error('jumlah_pembayaran') is-invalid @enderror">Jumlah Pembayaran
                            :</label>
                        <input type="text" class="form-control border border-secondary" id="jumlah_pembayaran"
                            placeholder="isi jumlah pembayaran" name="jumlah_pembayaran"
                            value="{{ old('jumlah_pembayaran', $catatPembayaran->jumlah_pembayaran) }}" required>
                        @error('jumlah_pembayaran')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="tgl_pembayaran">Tanggal pembayaran :</label>
                        <input type="date"
                            class="form-control border border-secondary @error('tgl_pembayaran') is-invalid @enderror"
                            id="tgl_pembayaran" name="tgl_pembayaran"
                            value="{{ old('tgl_pembayaran', $catatPembayaran->tgl_pembayaran) }}" required>
                        @error('tgl_pembayaran')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col lg-6">
                        <button class="btn btn-success m-2" name="simpan" type="submit">Simpan</button>
                        <a href="{{ route('catat-pembayaran.index') }}" class="btn btn-danger m-2"></span>Kembali</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
