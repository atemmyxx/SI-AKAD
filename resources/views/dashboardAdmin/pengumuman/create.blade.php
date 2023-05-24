@extends('dashboardAdmin.layout')

@section('content')
    <h3 class=" p-2 text-secondary"> Tambah Pengumuman</h3>
    <div class="row">
        <div class="col-lg-8">
            <div class="m-3">
                <form action="{{ route('pengumuman.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="tanggal">Tanggal :</label>
                        <input type="date"
                            class="form-control border border-secondary @error('tanggal') is-invalid @enderror"
                            id="tanggal" name="tanggal" value="{{ old('tanggal') }}">
                        @error('tanggal')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="judul" class="font-weight-bold">Judul :</label>
                        <input type="text"
                            class="form-control border border-secondary @error('judul') is-invalid @enderror" id="judul"
                            placeholder="Tuliskan judul" name="judul" value="{{ old('judul') }}">
                        @error('judul')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="body" class="form-label">Isi :</label>
                        <input id="isi" type="hidden" name="isi" value="{{ old('isi') }}">
                        @error('isi')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <trix-editor input="isi"></trix-editor>
                    </div>

                    <div class="col lg-6">
                        <button class="btn btn-success m-2" name="simpan" type="submit">Simpan</button>
                        <a href="{{ route('pengumuman.index') }}" class="btn btn-danger m-2"></span>Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })
    </script>
@endsection
