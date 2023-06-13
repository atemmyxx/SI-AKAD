@extends('dashboardAdmin.layout')

@section('content')
    <h3 class=" p-2 text-secondary"> Tambah Extrakulikuler</h3>
    <div class="row">
        <div class="col-lg-8">
            <div class="m-3">
                <form action="{{ route('ekstrakulikuler.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="nama_ekskul" class="font-weight-bold">Nama Ekstrakulikuler :</label>
                        <input type="text"
                            class="form-control border border-secondary @error('nama_ekskul') is-invalid @enderror"
                            id="nama_ekskul" placeholder="isi nama ekstrakulikuler" name="nama_ekskul"
                            value="{{ old('nama_ekskul') }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="hari_ekskul" class="form-label">Hari</label>
                        <select class="form-select  @error('hari_ekskul') is-invalid @enderror"
                            aria-label="Default select example" name="hari_ekskul" value="{{ old('hari_ekskul') }}">
                            <option selected disabled>Pilih</option>
                            <option>Senin</option>
                            <option>Selasa</option>
                            <option>Rabu</option>
                            <option>Kamis</option>
                            <option>Jumat</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="waktu_ekskul" class="font-weight-bold">Waktu :</label>
                        <input type="text"
                            class="form-control border border-secondary @error('waktu_ekskul') is-invalid @enderror"
                            id="waktu_ekskul" placeholder="isi waktu ekstrakulikuler" name="waktu_ekskul"
                            value="{{ old('waktu_ekskul') }}">
                    </div>

                    <div class="col lg-6">
                        <button class="btn btn-success m-2" name="simpan" type="submit">Simpan</button>
                        <a href="{{ route('ekstrakulikuler.index') }}" class="btn btn-danger m-2"></span>Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
