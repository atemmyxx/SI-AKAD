@extends('dashboardAdmin.layout')

@section('content')
    <h3 class=" p-2 text-secondary"> Edit Data Kelas</h3>
    <div class="row">
        <div class="col-lg-8">
            <div class="m-3">
                <form action="{{ route('kelas.update', $kelas->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group mb-3">
                        <label for="thn_akademik" class="form-label">Tahun Akademik</label>
                        <select class="form-select" aria-label="Default select example" name="thn_akademik"
                            value="{{ old('thn_akademik', $kelas->thn_akademik) }}" required>
                            <option selected disabled>Pilih</option>
                            {{-- <option>2022-2023</option>
                            <option>2023-2024</option> --}}
                            @foreach (json_decode(getTahunAkademik()) as $item)
                            <option value="{{ $item->id }}" @if($kelas->thn_akademik == $item->id) selected @endif>{{ $item->thn_akademik }} {{ $item->semester }}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group mb-3">
                        <label for="nm_kelas" class="font-weight-bold">Nama Kelas:</label>
                        <input type="text"
                            class="form-control border border-secondary @error('nm_mapel') is-invalid @enderror"
                            id="nm_kelas" placeholder="Isi nama kelas" name="nm_kelas"
                            value="{{ old('nm_kelas', $kelas->nm_kelas) }}" required>
                        @error('nm_kelas')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                    <div class="form-group mb-3">
                        <label for="nm_walikelas" class="form-label">Walikelas</label>
                        <select class="form-select" aria-label="Default select example" name="nm_walikelas"
                            value="{{ old('nm_walikelas', $kelas->nm_walikelas) }}" required>>
                            <option selected disabled>Pilih</option>
                            @foreach (json_decode(getDataGuru('1')) as $item)
                                <option @if($kelas->nm_walikelas == $item->nama_guru) selected @endif>{{ $item->nama_guru }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col lg-6">
                        <button class="btn btn-success m-2" name="simpan" type="submit">Simpan</button>
                        <a href="{{ route('kelas.index') }}" class="btn btn-danger m-2"></span>Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
