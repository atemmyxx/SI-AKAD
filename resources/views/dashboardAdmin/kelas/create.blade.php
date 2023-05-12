@extends('dashboardAdmin.layout')

@section('content')
    <h3 class=" p-2 text-secondary"> Tambah Data Kelas</h3>
    <div class="row">
        <div class="col-lg-8">
            <div class="m-3">
                <form action="{{ route('kelas.store') }}" method="POST">
                    <div class="form-group mb-3">
                        <label for="thn_akademik" class="form-label">Tahun Akademik</label>
                        <select class="form-select" aria-label="Default select example" name="thn_akademik">
                            <option selected>Pilih</option>
                            <option value="1">2022-2023</option>
                            <option value="2">2023-2024</option>
                        </select>
                    </div>


                    <div class="form-group mb-3">
                        <label for="nm_kelas" class="font-weight-bold">Nama Kelas:</label>
                        <input type="text" class="form-control border border-secondary" id="nm_kelas"
                            placeholder="name@example.com" name="nm_kelas">
                    </div>
                    <div class="form-group mb-3">
                        <label for="nm_walikelas" class="form-label">Walikelas</label>
                        <select class="form-select" aria-label="Default select example" name="nm_walikelas">
                            <option selected>Pilih</option>
                            <option value="1">Asep</option>
                            <option value="2">Udin</option>
                            <option value="1">Rojak</option>
                            <option value="2">Siti</option>
                            <option value="1">Dimas</option>
                            <option value="2">Rizki</option>
                            <option value="1">Adit</option>
                            <option value="2">Sopo</option>
                            <option value="1">Jarwo</option>
                        </select>
                    </div>
                </form>
            </div>

            <div class="col lg-6">
                <a href="{{ route('kelas.index') }}" class="btn btn-primary m-2"><span
                        class="mdi mdi-keyboard-backspace"></span>Kembali</a>
            </div>
        </div>
    </div>
@endsection
