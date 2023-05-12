@extends('dashboardAdmin.layout')

@section('content')
    <h3 class=" p-2 text-secondary"> Tambah Mata Pelajaran</h3>
    <div class="row">
        <div class="col-lg-8">
            <div class="m-3">
                <form action="{{ route('mapel.store') }}" method="POST">
                    <div class="form-group mb-3">
                        <label for="kd_mapel" class="font-weight-bold">Kode Mata Pelajaran :</label>
                        <input type="text" class="form-control border border-secondary" id="kd_mapel"
                            placeholder="name@example.com" name="kd_mapel">
                    </div>

                    <div class="form-group mb-3">
                        <label for="nm_mapel">Nama Mata Pelajaran :</label>
                        <input type="text" class="form-control border border-secondary" id="nm_mapel"
                            placeholder="name@example.com" name="nm_mapel">
                    </div>
                </form>
            </div>
            <div class="col lg-6">
                <a href="{{ route('mapel.index') }}" class="btn btn-primary m-2"><span
                        class="mdi mdi-keyboard-backspace"></span>Kembali</a>
            </div>
        </div>
    </div>
@endsection
