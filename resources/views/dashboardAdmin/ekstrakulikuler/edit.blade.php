@extends('dashboardAdmin.layout')

@section('content')
    <h3 class=" p-2 text-secondary"> Edit Extrakulikuler</h3>
    <div class="row">
        <div class="col-lg-8">
            <div class="m-3">
                <form action="{{ route('ekstrakulikuler.update', $ekstrakulikuler->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group mb-3">
                        <label for="nama_ekskul" class="font-weight-bold">Nama Ekstrakulikuler :</label>
                        <input type="text"
                            class="form-control border border-secondary @error('nama_ekskul') is-invalid @enderror"
                            id="nama_ekskul" placeholder="isi nama ekstrakulikuler" name="nama_ekskul"
                            value="{{ old('nama_ekskul', $ekstrakulikuler->nama_ekskul) }}" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="hari_ekskul" class="form-label">Hari</label>
                        <select class="form-select  @error('hari_ekskul') is-invalid @enderror"
                            aria-label="Default select example" name="hari_ekskul"
                            value="{{ old('hari_ekskul', $ekstrakulikuler->hari_ekskul) }}" required>
                            <option selected disabled>Pilih</option>
                            <option @if($ekstrakulikuler->hari_ekskul == 'Senin') selected @endif>Senin</option>
                            <option @if($ekstrakulikuler->hari_ekskul == 'Selasa') selected @endif>Selasa</option>
                            <option @if($ekstrakulikuler->hari_ekskul == 'Rabu') selected @endif>Rabu</option>
                            <option @if($ekstrakulikuler->hari_ekskul == 'Kamis') selected @endif>Kamis</option>
                            <option @if($ekstrakulikuler->hari_ekskul == 'Jumat') selected @endif>Jumat</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="waktu_ekskul" class="font-weight-bold">Waktu :</label>
                        <input type="text"
                            class="form-control border border-secondary @error('waktu_ekskul') is-invalid @enderror"
                            id="waktu_ekskul" placeholder="isi waktu ekstrakulikuler" name="waktu_ekskul"
                            value="{{ old('waktu_ekskul', $ekstrakulikuler->waktu_ekskul) }}" required>
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
