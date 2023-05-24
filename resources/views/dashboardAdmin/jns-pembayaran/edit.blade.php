@extends('dashboardAdmin.layout')

@section('content')
    <h3 class=" p-2 text-secondary"> Edit Jenis Pembayaran</h3>
    <div class="row">
        <div class="col-lg-8">
            <div class="m-3">
                <form action="{{ route('jns-pembayaran.update', $jns_pembayaran->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group mb-3">
                        <label for="kd_jns_pembayaran"
                            class="font-weight-bold @error('kd_jns_pembayaran') is-invalid @enderror">Kode Jenis Pembayaran
                            :</label>
                        <input type="text" class="form-control border border-secondary" id="kd_jns_pembayaran"
                            placeholder="isi kode jenis pembayaran" name="kd_jns_pembayaran"
                            value="{{ old('kd_jns_pembayaran', $jns_pembayaran->kd_jns_pembayaran) }}" required>
                        @error('kd_jns_pembayaran')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="nama_jns_pembayaran" class="font-weight-bold ">Nama Jenis Pembayaran :</label>
                        <input type="text"
                            class="form-control border border-secondary @error('nama_jns_pembayaran') is-invalid @enderror"
                            id="nama_jns_pembayaran" placeholder="isi nama jenis pembayaran" name="nama_jns_pembayaran"
                            value="{{ old('nama_jns_pembayaran', $jns_pembayaran->nama_jns_pembayaran) }}" required>
                        @error('kd_jns_pembayaran')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col lg-6">
                        <button class="btn btn-success m-2" name="simpan" type="submit">Simpan</button>
                        <a href="{{ route('jns-pembayaran.index') }}" class="btn btn-danger m-2"></span>Kembali</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
