@extends('dashboardAdmin.layout')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="mt-3">
                <a href="{{ route('siswa.edit', $siswa->id) }}"class=" mb-2 btn btn-sm btn-warning"> <span
                        class="mdi  mdi-table-edit">Edit</span></a>

                <form onsubmit="return confirm('Yakin mau hapus data ini?')" action="{{ route('siswa.destroy', $siswa->id) }}"
                    method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" type="submit" name="submit">Hapus</button>
                </form>
            </div>

            <h5 class="mt-5">{{ $siswa->usernam_siswa }}</h5>
            <h5>NISN : {{ $siswa->nisn }}</h5>
            <h5>Nama : {{ $siswa->nama }}</h5>
            <h5>Tempat Lahir : {{ $siswa->tempat_lahir }}</h5>
            <h5>Tanggal Lahir : {{ $siswa->tgl_lahir }}</h5>
            <h5>Kelas : {{ $siswa->kelas }}</h5>
            <h5>walikelas : {{ $siswa->walikelas }}</h5>
            <h5>Ekstrakurikuler : {{ $siswa->ekskul_siswa }}</h5>
            <h5>Jenis Kelamin : {{ $siswa->jns_kelamin }}</h5>
            <h5>No Handphone : {{ $siswa->nohp_siswa }}</h5>
            <h5>Nama Ayah : {{ $siswa->nama_ayah }}</h5>
            <h5>Nama Ibu : {{ $siswa->nama_ibu }}</h5>
            <h5>No Handphone Ortu : {{ $siswa->nohp_ortu }}</h5>
            <h5>Alamat : {{ $siswa->alamat }}</h5>
            <h5>Nama Wali : {{ $siswa->nama_wali }}</h5>
            <h5>No Handphone : {{ $siswa->nohp_wali }}</h5>
            <h5>Alamat Wali : {{ $siswa->alamat_wali }}</h5>
        </div>
    </div>
@endsection
