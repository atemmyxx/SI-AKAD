@extends('dashboardAdmin.layout')

@section('content')
    <h3 class=" p-2 text-secondary">Data Ekstrakulikuler</h3>
    <div class="table-responsive">
        <a href="{{ route('ekstrakulikuler.create') }}" class="btn btn-primary m-2"><span class="mdi mdi-plus"></span>Tambah
            Ekstrakulikuler</a>
        <table class="table">
            <thead>
                <tr class="table-primary">
                    <th scope="col">No</th>
                    <th scope="col">Nama Ekstrakulikuler</th>
                    <th scope="col">Hari</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach ($ekstrakulikuler as $ekskul)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $ekskul->nama_ekskul }}</td>
                        <td>{{ $ekskul->hari_ekskul }}</td>
                        <td>{{ $ekskul->waktu_ekskul }}</td>
                        <td>
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a
                                        href="{{ route('ekstrakulikuler.edit', $ekskul->id) }}"class=" mb-2 btn btn-sm btn-warning"><span
                                            class="mdi  mdi-table-edit">Edit</span></a>
                                </li>
                                <form onsubmit="return confirm('Yakin mau hapus data ini?')"
                                    action="{{ route('ekstrakulikuler.destroy', $ekskul->id) }}" method="POST">
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
        </table>
    </div>
@endsection
