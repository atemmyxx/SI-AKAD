@extends('dashboardAdmin.layout')

@push('css')
    <!-- Year Picker CSS -->
    <link rel="stylesheet" href="css/yearpicker.css" />
    <!-- Year Picker Js -->
    <script src="js/yearpicker.js"></script>
    <style>
        :root {
            --background-color: #fff;
            --border-color: #ccc;
            --text-color: #555;
            --selected-text-color: rgb(56, 241, 164);
            --hover-background-color: #eee;
        }

        .yearpicker-container {
            position: absolute;
            color: var(--text-color);
            width: 280px;
            border: 1px solid var(--border-color);
            border-radius: 3px;
            font-size: 1rem;
            box-shadow: 1px 1px 8px 0px rgba(0, 0, 0, 0.2);
            background-color: var(--background-color);
        }

        .yearpicker-header {
            display: flex;
            width: 100%;
            height: 2.5rem;
            border-bottom: 1px solid var(--border-color);
            align-items: center;
            justify-content: space-around;
        }

        .yearpicker-prev,
        .yearpicker-next {
            cursor: pointer;
            font-size: 2rem;
        }

        .yearpicker-prev:hover,
        .yearpicker-next:hover {
            color: var(--selected-text-color);
        }

        .yearpicker-year {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 0.5rem;
        }

        .yearpicker-items {
            list-style: none;
            padding: 1rem 0.5rem;
            flex: 0 0 33.3%;
            width: 100%;
        }

        .yearpicker-items:hover {
            background-color: var(--hover-background-color);
            color: var(--selected-text-color);
            cursor: pointer;
        }

        .yearpicker-items.selected {
            color: var(--selected-text-color);
        }

        .hide {
            display: none;
        }

        .yearpicker-items.disabled {
            pointer-events: none;
            color: #bbb;
        }
    </style>
@endpush

@section('content')
    <h3 class=" p-2 text-secondary"> Tambah Data Kelas</h3>
    <div class="row">
        <div class="col-lg-8">
            <div class="m-3">
                <form action="{{ route('kelas.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="thn_akademik" class="form-label">Tahun Akademik</label>
                        <select class="form-select" aria-label="Default select example" name="thn_akademik"
                            value="{{ old('thn_akademik') }}">
                            <option selected disabled>Pilih</option>
                            {{-- <option>2022-2023</option>
                            <option>2023-2024</option> --}}
                            @foreach (json_decode(getTahunAkademik()) as $item)
                            <option value="{{ $item->id }}">{{ $item->thn_akademik }} {{ $item->semester }}</option>
                            @endforeach
                        </select>
                        {{-- <input type="text" name="thn_akademik" class="yearpicker form-control" value="{{ old('thn_akademik') }}" /> --}}
                    </div>


                    <div class="form-group mb-3">
                        <label for="nm_kelas" class="font-weight-bold">Nama Kelas:</label>
                        <input type="text"
                            class="form-control border border-secondary @error('nm_mapel') is-invalid @enderror"
                            id="nm_kelas" placeholder="Isi nama kelas" name="nm_kelas" value="{{ old('nm_kelas') }}">
                        @error('nm_kelas')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                    <div class="form-group mb-3">
                        <label for="nm_walikelas" class="form-label">Walikelas</label>
                        <select class="form-select" aria-label="Default select example" name="nm_walikelas"
                            value="{{ old('nm_walikelas') }}">
                            <option selected disabled>Pilih</option>
                            @foreach (json_decode(getDataGuru('1')) as $item)
                                <option>{{ $item->nama_guru }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col lg-6">
                        <button class="btn btn-success m-2" name="simpan" type="submit">Simpan</button>
                        <a href="{{ route('kelas.index') }}" class="btn btn-danger m-2"></span>Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!-- Moment Js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="{{ asset('admin') }}/js/yearpicker.js"></script>
    <script>
        $(document).ready(function() {
            $(".yearpicker").yearpicker({
                // year: 2021,
                startYear: 2021,
                endYear: 2050,
            });
        });
    </script>
@endpush
