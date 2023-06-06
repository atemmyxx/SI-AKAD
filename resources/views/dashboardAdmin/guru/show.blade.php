@extends('dashboardAdmin.layout')

@section('content')
    <div class="row justify-content-center  ">
        <div class="col-lg-10">
            <div class="mt-3">
                <a href="{{ route('guru.edit', $guru->id) }}"class=" mb-2 btn btn-sm btn-warning"><span
                        class="mdi  mdi-table-edit">Edit</span></a>

                <form onsubmit="return confirm('Yakin mau hapus data ini?')" action="{{ route('guru.destroy', $guru->id) }}"
                    method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" type="submit" name="submit">Hapus</button>
                </form>
            </div>

            <h5 class="mt-5">Username Guru : {{ $guru->username_guru }}</h5>
            <h5>Nama : {{ $guru->nama_guru }}</h5>
            <h5>NIP : {{ $guru->nip }}</h5>
            <h5>Tanggal Lahir : {{ $guru->tgl_lahir_guru }}</h5>
            <h5>Pendidikan Terakhir : {{ $guru->pendidikan_terakhir_guru }}</h5>
            <h5>No Handphone : {{ $guru->nohp_guru }}</h5>
            <h5>Alamat : {{ $guru->alamat_guru }}</h5>
        </div>
    </div>
@endsection
