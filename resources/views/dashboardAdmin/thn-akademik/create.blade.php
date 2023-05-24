@extends('dashboardAdmin.layout')

@section('content')
    <h3 class=" p-2 text-secondary"> Tambah Tahun Akademik</h3>
    <div class="row">
        <div class="col-lg-8">
            <div class="m-3">
                <form action="{{ route('thn-akademik.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="thn_akademik" class="font-weight-bold">Tahun Akademik :</label>
                        <input type="text"
                            class="form-control border border-secondary @error('thn_akademik') is-invalid @enderror"
                            id="thn_akademik" placeholder="Isi tahun akademik!" name="thn_akademik"
                            value="{{ old('thn_akademik') }}">
                        @error('thn_akademik')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="semester" class="form-label">Semester</label>
                        <select class="form-select @error('semester') is-invalid @enderror"
                            aria-label="Default select example" name="semester" value="{{ old('semester') }}">
                            @error('semester')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <option selected disabled>Pilih</option>
                            <option>Ganjil</option>
                            <option>Genap</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select  @error('status') is-invalid @enderror"
                            aria-label="Default select example" name="status" value="{{ old('status') }}">
                            @error('status')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <option selected disabled>Pilih</option>
                            <option>Aktif</option>
                            <option>Tidak Aktif</option>
                        </select>
                    </div>

                    <div class="col lg-6">
                        <button class="btn btn-success m-2" name="simpan" type="submit">Simpan</button>
                        <a href="{{ route('thn-akademik.index') }}" class="btn btn-danger m-2"></span>Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
