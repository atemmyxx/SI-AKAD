@extends('dashboardAdmin.layout')

@section('content')
    <h3 class=" p-2 text-secondary">Data Kelas</h3>
    <div class="table-responsive">
        <a href="{{ route('kelas.create') }}" class="btn btn-primary m-2"><span class="mdi mdi-plus"></span>Tambah Kelas</a>
        <table class="table">
            <thead>
                <tr class="table-primary">
                    <th scope="col">No</th>
                    <th scope="col">Tahun Akademik</th>
                    <th scope="col">Nama Kelas</th>
                    <th scope="col">Wali Kelas</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>2022-2023</td>
                    <td>VII A</td>.
                    <td>Esih Ayuningsih S.pd</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </td>
                </tr>
        </table>
    </div>
@endsection
