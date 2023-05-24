@extends('dashboardAdmin.layout')

@section('content')
    <h3 class=" p-2 text-secondary">Jenis Pembayaran</h3>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show col-lg-4" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive">
        <a href="{{ route('jns-pembayaran.create') }}" class="btn btn-primary m-2"><span class="mdi mdi-plus"></span>Tambah
            Jenis Pembayaran</a>
        <table class="table">
            <thead>
                <tr class="table-primary">
                    <th scope="col">No</th>
                    <th scope="col">Kode Jenis Pembayaran</th>
                    <th scope="col">Jenis Pembayaran</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach ($jns_pembayaran as $jnspembayaran)
                    <tr>

                        <td>{{ $i }}</td>
                        <td>{{ $jnspembayaran->kd_jns_pembayaran }}</td>
                        <td>{{ $jnspembayaran->nama_jns_pembayaran }}</td>
                        <td>
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a
                                        href="{{ route('jns-pembayaran.edit', $jnspembayaran->id) }}"class=" mb-2 btn btn-sm btn-warning"><span
                                            class="mdi  mdi-table-edit">Edit</span></a>
                                </li>
                                <form onsubmit="return confirm('Yakin mau hapus data ini?')"
                                    action="{{ route('jns-pembayaran.destroy', $jnspembayaran->id) }}" method="POST">
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
