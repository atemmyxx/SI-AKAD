@extends('dashboardAdmin.layout')

@section('content')
    <h3 class=" p-2 text-secondary">Data Pengumuman</h3>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show col-lg-4" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive">
        <a href="{{ route('pengumuman.create') }}" class="btn btn-primary m-2"><span class="mdi mdi-plus"></span>Tambah
            Pengumuman</a>
        <table class="table">
            <thead>
                <tr class="table-primary">
                    <th scope="col">No</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach ($pengumuman as $pengumumans)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $pengumumans->tanggal }}</td>
                        <td>{{ $pengumumans->judul }}</td>
                        <td>
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li>
                                    <a
                                        href="{{ route('pengumuman.show', $pengumumans->id) }}"class=" mb-2 btn btn-sm btn-primary"><span
                                            class="mdi  mdi-table-edit">Lihat</span></a>
                                </li>
                                <li>
                                    <a
                                        href="{{ route('pengumuman.edit', $pengumumans->id) }}"class=" mb-2 btn btn-sm btn-warning"><span
                                            class="mdi  mdi-table-edit">Edit</span></a>
                                </li>
                                <form onsubmit="return confirm('Yakin mau hapus data ini?')"
                                    action="{{ route('pengumuman.destroy', $pengumumans->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" type="submit" name="submit">Hapus</button>
                                </form>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <?php $i++; ?>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
