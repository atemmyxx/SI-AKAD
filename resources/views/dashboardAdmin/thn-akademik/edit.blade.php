@extends('dashboardAdmin.layout')

@section('content')
    <h3 class=" p-2 text-secondary"> Edit Tahun Akademik</h3>
    <div class="row">
        <div class="col-lg-8">
            <div class="m-3">
                <form action="{{ route('thn-akademik.update', $thnakademik->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group mb-3">
                        <label for="thn_akademik" class="font-weight-bold">Tahun Akademik :</label>
                        <input type="text"
                            class="form-control border border-secondary @error('thn_akademik') is-invalid @enderror"
                            id="thn_akademik" placeholder="Isi tahun akademik!" name="thn_akademik"
                            value="{{ old('thn_akademik', $thnakademik->thn_akademik) }}" required>
                        @error('thn_akademik')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="semester" class="form-label">Semester</label>
                        <select class="form-select" aria-label="Default select example" name="semester"
                            value="{{ old('semester', $thnakademik->semester) }}" required>
                            <option selected disabled>Pilih</option>
                            <option>Ganjil</option>
                            <option>Genap</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" aria-label="Default select example" name="status"
                            value="{{ old('status', $thnakademik->status) }}" required>
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
