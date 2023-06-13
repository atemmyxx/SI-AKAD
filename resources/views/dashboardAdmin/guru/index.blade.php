@extends('dashboardAdmin.layout')

@section('content')

    @if (Session::has('message'))
    <div class="alert alert-warning alert-dismissible fade show mb-3" role="alert">
        {{ Session::get('message') }}
        <button type="button" class="close py-2 px-3" data-dismiss="alert" aria-label="Close">
            <span class="fa fa-times"></span>
        </button>
    </div>
    @elseif(Session::has('messagesuccess'))
    <div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
        {{ Session::get('messagesuccess') }}
        <button type="button" class="close py-2 px-3" data-dismiss="alert" aria-label="Close">
            <span class="fa fa-times"></span>
        </button>
    </div>
    @elseif(Session::has('messageduplicate'))
    <div class="alert alert-danger alert-dismissible fade show mb-3" role="alert">
        {{ Session::get('messageduplicate') }}
        <button type="button" class="close py-2 px-3" data-dismiss="alert" aria-label="Close">
            <span class="fa fa-times"></span>
        </button>
    </div>
    @endif
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
                <?php $i = 1; ?>
                @foreach ($guru as $teacher)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $teacher->nip }}</td>
                        <td>{{ $teacher->nama_guru }}</td>
                        <td>{{ $teacher->jns_kelamin_guru }}</td>
                        <td>{{ $teacher->alamat_guru }}</td>
                        <td>
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li>
                                    <a href="{{ route('guru.show', $teacher->id) }}"class=" mb-2 btn btn-sm btn-primary"><span
                                            class="mdi  mdi-table-edit">Lihat</span></a>
                                </li>
                                <li><a href="{{ route('guru.edit', $teacher->id) }}"class=" mb-2 btn btn-sm btn-warning"><span
                                            class="mdi  mdi-table-edit">Edit</span></a>
                                </li>
                                <form onsubmit="return confirm('Yakin mau hapus data ini?')"
                                    action="{{ route('guru.destroy', $teacher->id) }}" method="POST">
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
