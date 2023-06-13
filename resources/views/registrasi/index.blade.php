@extends('layout/main')

@section('container')
    <section class="vh-100 mt-2">
        <div class="col-lg-12 text-center mb-4">
            <main class="form-registration">
                <h1>
                    Sistem Informasi Akademik
                </h1>

        </div>
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 shadow p-4">
                    <h2 class="mb-1"><span style="color: lightslategray">Registrasi</span> </h2>
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
                    <form method="POST" action="{{ route('register') }}" class="" novalidate="">
                    {{ csrf_field() }}
                        {{--   @csrf berfungsi untuk mengamankan form dari serangan --}}
                        @csrf
                        <div class="form-outline mb-1">
                            <label class="form-label fw-bolder mt-4" for="nama">Nama</label>
                            <input type="nama" id="nama" name="nama"
                                class="form-control shadow-sm @error('nama') is-invalid @enderror"
                                placeholder="masukkan nama" required autofocus value="{{ old('nama') }}">

                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                            <div class="form-outline mb-1">
                                <label class="form-label fw-bolder mt-4" for="username_siswa">Username</label>
                                <input type="text" id="username_siswa" name="username_siswa"
                                    class="form-control shadow-sm @error('username_siswa') is-invalid @enderror"
                                    placeholder="masukkan username" required autofocus value="{{ old('username_siswa') }}">

                                @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- <div class="form-outline mb-1">
                                <label class="form-label fw-bolder mt-4" for="username">Email</label>
                                <input type="email" id="email" name="email"
                                    class="form-control shadow-sm @error('username') is-invalid @enderror"
                                    placeholder="masukkan email" required autofocus value="{{ old('email') }}">

                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div> --}}

                            <div class="form-outline mb-1">
                                <label class="form-label fw-bolder mt-4" for="password">Password</label>
                                <input type="password" id="password" name="password"
                                    class="form-control shadow-sm @error('password') is-invalid @enderror"
                                    placeholder="masukkan password" required autofocus value="{{ old('password') }}">

                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-outline mb-1">
                                <label class="form-label fw-bolder mt-4" for="tempat_lahir">Tempat Lahir</label>
                                <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control shadow-sm" placeholder="masukkan Tempat Lahir" required value="{{ old('tempat_lahir') }}">
                            </div>

                            <div class="form-outline mb-1">
                                <label class="form-label fw-bolder mt-4" for="tgl_lahir">Tanggal lahir</label>
                                <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control shadow-sm" placeholder="masukkan lahir" required value="{{ old('tgl_lahir') }}">
                            </div>

                            <div class="form-outline mb-1">
                                <label class="form-label fw-bolder mt-4" for="jns_kelamin">Jenis Kelamin</label>
                                <select class="form-control" id="jns_kelamin" name="jns_kelamin">
                                    <option selected disabled>-- Pilih Jenis Kelamin --</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                  </select>
                            </div>

                            <div class="form-outline mb-1">
                                <label class="form-label fw-bolder mt-4" for="nohp_ortu">No HP Orangtua</label>
                                <input type="number" id="nohp_ortu" name="nohp_ortu" class="form-control shadow-sm" placeholder="masukkan no hp Orangtua" required value="{{ old('nohp_ortu') }}">
                            </div>

                            <div class="form-outline mb-1">
                                <label class="form-label fw-bolder mt-4" for="alamat">Alamat</label>
                                <textarea class="form-control" id="alamat" rows="3" name="alamat"></textarea>
                            </div>

                                    {{-- <label class="form-label fw-bolder mt-4" for="conf_password">Confirm Password</label>
                                    <div class="form-outline mb-1">
                                        <input type="conf_password" id="conf_password" name="conf_password"
                                            class="form-control shadow-sm @error('conf_password') is-invalid @enderror"
                                            placeholder="konformasi password" required autofocus
                                            value="{{ old('conf_password') }}">

                                        @error('conf_password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror --}}

                                        <div class="text-center pt-2 d-block justify-content-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-md mb-4"
                                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Daftar</button>
                    </form>
                    <p class="small fw-bold pt-1 mb-0">Udah punya akun?
                        <a href="/login" class="btn btn-success"> Login</a>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
