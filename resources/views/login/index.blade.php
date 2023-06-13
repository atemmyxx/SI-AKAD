@extends('layout/main')
@section('container')
    <section class="vh-100 mt-2">
        <div class="col-lg-12 text-center mb-4">
            <h1 class="">Sistem
                Informasi Akademik</h1>

        </div>
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 shadow p-4">

                     {{-- penggunaan alert jika user berhasil registrasi
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div> --}}
                    {{-- @endif --}}

                    {{-- Notifikasi Jika gagal login --}}
                    {{-- @if (session()->has('loginErrors'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('loginErrors') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif --}}
                    {{-- *********************************************** --}}
                    <h2><span style="color: lightslategray">Login</span> </h2>
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
                    <form method="POST" action="{{ route('login') }}" class="" novalidate="">
                    {{ csrf_field() }}
                        {{--   @csrf berfungsi untuk mengamankan form dari serangan --}}
                        @csrf
                        <!-- username input -->
                        <label class="form-label fw-bolder" for="username">Username</label>
                        <div class="form-outline mb-4">
                            <input type="username" id="username" name="username"
                                class="form-control shadow-sm @error('username') is-invalid @enderror"
                                placeholder="masukkan username" required autofocus value="{{ old('username') }}">

                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                        <!-- Password input -->
                        <label class="form-label fw-bolder" for="password">Password</label>
                        <div class="form-outline mb-3">
                            <input type="password" id="password" name="password"
                                class="form-control shadow-sm @error('password') is-invalid @enderror"
                                placeholder="masukkan password" required autofocus>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            {{-- <div class="form-group pt-3">
                                <label for="exampleFormControlSelect1" class="fw-bold mb-2">Level</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Admin</option>
                                    <option>Guru</option>
                                    <option>Siswa</option>
                                    <option>Walikelas</option>
                                </select>
                            </div> --}}
                            <div class="text-center text-lg-start mt-4 pt-2">
                                <button type="submit" class="btn btn-primary btn-md mb-4"
                                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>

                                <p class="small fw-bold mt-4 pt-1 mb-0">Nggak punya akun?
                                    <a href="/registrasi" class="btn btn-success"> Daftar</a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
