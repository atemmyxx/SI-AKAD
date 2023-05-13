@extends('dashboardAdmin.layout')

@section('content')
<h3 class=" p-2 text-secondary">Data Guru</h3>
<div class="table-responsive">
    <a href="{{ route('guru.create') }}" class="btn btn-primary m-2"><span class="mdi mdi-plus"></span>Tambah Guru</a>
    <table class="table">
        <thead>
            <tr class="table-primary">
                <th scope="col">No</th>
                <th scope="col">NIP</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Alamat</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>123456789</td>
                <td>Ahmad Temmy Rietoni S.Kom</td>
                <td>Laki-Laki</td>
                <td>JL HJ Jaeran, Cinere, Kota Depok</td>
                <td>
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Aksi
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                    </ul>

                </td>
            </tr>
    </table>
</div>
@endsection