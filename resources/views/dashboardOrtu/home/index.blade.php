@extends('dashboardAdmin.layout')
@section('content')
@if (getSiswaActiveStatus(Auth::user()->kode_ortu) == 0)
<p style="font-size:16px;padding:20px;">Akun Siswa belum di verifikasi oleh sistem, silahkan tunggu beberapa waktu lagi.</p>
@else
    <div class="row">
        <div class="col-sm-6">
            <div class="card mb-5">
                <div class="card-body"
                    style="box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
                    <h1>6</h1>
                    <h3 class="card-text">Data Siswa</h3>
                    <a href="#" class="btn btn-primary">Lihat</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card mb-5">
                <div class="card-body"
                    style="box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
                    <h1>7</h1>
                    <h3 class="card-text">Data Mata Pelajaran</h3>
                    <a href="#" class="btn btn-primary">Lihat</a>
                </div>
            </div>
        </div>
    </div>
@endif
@endsection
