@extends('dashboardAdmin.layout')

@section('content')
    <h3 class=" p-2 text-secondary"> Edit Mata Pelajaran</h3>
    <div class="row">
        <div class="col-lg-8">
            <div class="m-3">
                <form action="{{ route('mapel.update', $mapel->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group mb-3">
                        <label for="kd_mapel" class="font-weight-bold">Kode Mata Pelajaran :</label>
                        <input type="text"
                            class="form-control border border-secondary @error('kd_mapel') is-invalid @enderror"
                            id="kd_mapel" placeholder="name@example.com" name="kd_mapel"
                            value="{{ old('kd_mapel', $mapel->kd_mapel) }}" required>
                        @error('kd_mapel')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="nm_mapel">Nama Mata Pelajaran :</label>
                        <input type="text"
                            class="form-control border border-secondary @error('nm_mapel') is-invalid @enderror"
                            id="nm_mapel" placeholder="name@example.com" name="nm_mapel"
                            value="{{ old('nm_mapel', $mapel->nm_mapel) }}" required>
                        @error('nm_mapel')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col lg-6">
                        <button class="btn btn-success m-2" name="simpan" type="submit">Simpan</button>
                        <a href="{{ route('mapel.index') }}" class="btn btn-danger m-2"></span>Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
