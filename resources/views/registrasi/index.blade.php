@extends('layout/main')

@section('container')
    <section class="vh-100 mt-2">
        <div class="col-lg-12 text-center mb-4">
            <main class="form-registration">
                <h1 class="animate__animated animate__heartBeat animate__infinite">
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
                    <form action="/register" method="post">
                        {{--   @csrf berfungsi untuk mengamankan form dari serangan --}}
                        @csrf
                        <label class="form-label fw-bolder mt-4" for="nama">Nama</label>
                        <div class="form-outline mb-4">
                            <input type="nama" id="nama" name="nama"
                                class="form-control shadow-sm @error('nama') is-invalid @enderror"
                                placeholder="masukkan nama" required autofocus value="{{ old('nama') }}">

                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                            <label class="form-label fw-bolder mt-4" for="username">Username</label>
                            <div class="form-outline mb-4">
                                <input type="username" id="username" name="username"
                                    class="form-control shadow-sm @error('username') is-invalid @enderror"
                                    placeholder="masukkan username" required autofocus value="{{ old('username') }}">

                                @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <label class="form-label fw-bolder mt-4" for="password">Password</label>
                                <div class="form-outline mb-4">
                                    <input type="password" id="password" name="password"
                                        class="form-control shadow-sm @error('password') is-invalid @enderror"
                                        placeholder="masukkan password" required autofocus value="{{ old('password') }}">

                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                    <label class="form-label fw-bolder mt-4" for="conf_password">Confirm Password</label>
                                    <div class="form-outline mb-4">
                                        <input type="conf_password" id="conf_password" name="conf_password"
                                            class="form-control shadow-sm @error('conf_password') is-invalid @enderror"
                                            placeholder="konformasi password" required autofocus
                                            value="{{ old('conf_password') }}">

                                        @error('conf_password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
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
