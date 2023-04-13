@extends('dashboardAdmin.layout')
@section('content')
    <div class="row">
        <div class="col-sm-6">
            <div class="card mb-5">
                <div class="card-body"
                    style="box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
                    <h1>10</h1>
                    <h3 class="card-text">Data Siswa</h3>
                    <a href="#" class="btn btn-primary">Lihat</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card mb-5">
                <div class="card-body"
                    style="box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
                    <h1>10</h1>
                    <h3 class="card-text">Data Guru</h3>
                    <a href="{{ route('guru.index') }}" class="btn btn-primary">Lihat</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card mb-5">
                <div class="card-body"
                    style="box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
                    <h1>10</h1>
                    <h3 class="card-text">Data Kelas</h3>
                    <a href="#" class="btn btn-primary">Lihat</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card mb-5">
                <div class="card-body"
                    style="box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;">
                    <h1>10</h1>
                    <h3 class="card-text">Data Mata Pelajaran</h3>
                    <a href="#" class="btn btn-primary">Lihat</a>
                </div>
            </div>
        </div>
    </div>
@endsection
