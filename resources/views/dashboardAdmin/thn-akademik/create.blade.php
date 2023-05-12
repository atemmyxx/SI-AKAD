@extends('dashboardAdmin.layout')

@section('content')
    <h3 class=" p-2 text-secondary"> Tambah Tahun Akademik</h3>
    <div class="row">
        <div class="col-lg-8">
            <div class="m-3">
                <form action="{{ route('thn-akademik.store') }}" method="POST">
                    <div class="form-group mb-3">
                        <label for="thn-akademik" class="font-weight-bold">Tahun Akademik :</label>
                        <input type="text" class="form-control border border-secondary" id="thn-akademik"
                            placeholder="name@example.com" name="thn_akademik">
                    </div>

                    <div class="form-group mb-3">
                        <label for="semester" class="form-label">Semester</label>
                        <select class="form-select" aria-label="Default select example" name="semester">
                            <option selected>Pilih</option>
                            <option value="1">Ganjil</option>
                            <option value="2">Genap</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" aria-label="Default select example" name="status">
                            <option selected>Pilih</option>
                            <option value="1">Aktif</option>
                            <option value="2">Tidak Aktif</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="col lg-6">
                <a href="{{ route('thn-akademik.index') }}" class="btn btn-primary m-2"><span
                        class="mdi mdi-keyboard-backspace"></span>Kembali</a>
            </div>
        </div>
    </div>
@endsection
