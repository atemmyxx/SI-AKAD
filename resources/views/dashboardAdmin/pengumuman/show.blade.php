@extends('dashboardAdmin.layout')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="mt-3">
                <a href="{{ route('pengumuman.edit', $pengumuman->id) }}"class=" mb-2 btn btn-sm btn-warning"><span
                        class="mdi  mdi-table-edit">Edit</span></a>

                <form onsubmit="return confirm('Yakin mau hapus data ini?')"
                    action="{{ route('pengumuman.destroy', $pengumuman->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" type="submit" name="submit">Hapus</button>
                </form>
            </div>

            <h2 class="mt-5">{{ $pengumuman->judul }}</h2>
            <p>{{ $pengumuman->isi }}</p>
        </div>
    </div>
@endsection
