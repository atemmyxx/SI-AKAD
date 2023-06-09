<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('admin') }}/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('admin') }}/vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('admin') }}/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('admin') }}/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('admin') }}/images/favicon.png" />

    {{-- trix editor --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('admin') }}/css/trix.css">
    <script type="text/javascript" src="{{ asset('admin') }}/js/trix.js"></script>

    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>
    @stack('css')
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex justify-content-center">
                <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
                    <h3>SIAKAD</h3>
                    <a class="navbar-brand brand-logo-mini" href="index.html"><img
                            src="{{ asset('admin') }}/images/logo-mini.svg" alt="logo" /></a>
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-toggle="minimize">
                        <span class="mdi mdi-sort-variant"></span>
                    </button>
                </div>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                            id="profileDropdown">
                            <img src="{{ asset('admin') }}/images/faces/face5.jpg" alt="profile" />
                            @if (Auth::guard('web')->check())
                            <span class="nav-profile-name">{{ Auth::user()->name }}</span>
                            @elseif (Auth::guard('siswa')->check())
                            <span class="nav-profile-name">{{ Auth::user()->nama }}</span>
                            @elseif (Auth::guard('guru')->check())
                            <span class="nav-profile-name">{{ Auth::user()->nama_guru }}</span>
                            @elseif (Auth::guard('orangtua')->check())
                            <span class="nav-profile-name">Wali Murid</span>
                            @endif
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <a class="dropdown-item" href="/logout">
                                <i class="mdi mdi-logout text-primary"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        @if (Auth::guard('web')->check())
                        <span class="menu-title m-3 fw-bold fs-5" style="color: gray">Admin</span>
                        @elseif (Auth::guard('siswa')->check())
                        <span class="menu-title m-3 fw-bold fs-5" style="color: gray">Siswa</span>
                        @elseif (Auth::guard('guru')->check())
                        <span class="menu-title m-3 fw-bold fs-5" style="color: gray">Guru</span>
                        @elseif (Auth::guard('orangtua')->check())
                        <span class="menu-title m-3 fw-bold fs-5" style="color: gray">Wali Murid</span>
                        @endif
                    </li>
                    {{-- <h1>{{ Auth::guard('siswa')->check() }}</h1> --}}

                    @if (Auth::guard('web')->check())
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home.index') }}">
                                <i class="mdi mdi-home menu-icon"></i>
                                <span class="menu-title fw-bold">Home</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                                aria-controls="ui-basic">
                                <i class="mdi mdi-database menu-icon"></i>
                                <span class="menu-title fw-bold">Data Master</span>
                                <i class="menu-arrow"></i>
                            </a>
                        </li>

                            <div class="collapse" id="ui-basic">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('guru.index') }}">
                                            <i class="mdi mdi-account-box menu-icon"></i>Data Guru</a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link" href="{{ route('siswa.index') }}">
                                            <i class="mdi mdi-account-multiple menu-icon"></i>Data Siswa</a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link" href="{{ route('orang_tua.index') }}">
                                            <i class="mdi mdi-account-multiple menu-icon"></i>Data Orang Tua | Akun
                                        </a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link" href="{{ route('kelas.index') }}">
                                            <i class="mdi mdi-city menu-icon"></i>Data Kelas</a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link" href="{{ route('mapel.index') }}">
                                            <i class="mdi mdi-book-open menu-icon"></i> Data Mata Pelajaran</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="{{ route('jadwal.index') }}">
                                            <i class="mdi mdi-alarm-check menu-icon"></i>Data Jadwal</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="{{ route('thn-akademik.index') }}">
                                            <i class="mdi mdi-alarm menu-icon"></i>Data Tahun Akademik</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="{{ route('ekstrakulikuler.index') }}">
                                            <i class="mdi mdi-football menu-icon"></i>Data Ekstrakulikuler
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pengumuman.index') }}">
                                <i class="mdi mdi-book-open menu-icon"></i>
                                <span class="menu-title  fw-bold">Pengumuman</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false"
                                aria-controls="auth">
                                <i class="mdi mdi-bank menu-icon"></i>
                                <span class="menu-title  fw-bold">Pembayaran</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="collapse" id="auth">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item"> <a class="nav-link"
                                            href="{{ route('jns-pembayaran.index') }}"><i
                                                class="mdi mdi-note-text menu-icon"></i> Jenis
                                            Pembayaran</a>
                                    </li>
                                    <li class="nav-item"> <a class="nav-link"
                                            href="{{ route('catat-pembayaran.index') }}"><i
                                                class="mdi mdi-pencil-box-outline menu-icon"></i>Catat
                                            Pembayaran</a>
                                        </a></li>
                                </ul>
                            </div>
                        </li>
                    @elseif(Auth::guard('siswa')->check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard.index') }}">
                            <i class="mdi mdi-home menu-icon"></i>
                            <span class="menu-title fw-bold">Home</span>
                        </a>
                    </li>
                    @endif

            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    {{-- @include('dashboardAdmin.pesan') --}}
                    <div class="row">
                        <div class="col-lg-12 stretch-card">
                            <div class="card">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            {{-- <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a
                                href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com </a>2021</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Only the best <a
                                href="https://www.bootstrapdash.com/" target="_blank"> Bootstrap dashboard </a>
                            templates</span>
                    </div>
                </footer> --}}
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{ asset('admin') }}/vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{ asset('admin') }}/vendors/chart.js/Chart.min.js"></script>
    <script src="{{ asset('admin') }}/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="{{ asset('admin') }}/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('admin') }}/js/off-canvas.js"></script>
    <script src="{{ asset('admin') }}/js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('admin') }}/js/dashboard.js"></script>
    <script src="{{ asset('admin') }}/js/data-table.js"></script>
    <script src="{{ asset('admin') }}/js/jquery.dataTables.js"></script>
    <script src="{{ asset('admin') }}/js/dataTables.bootstrap4.js"></script>
    <!-- End custom js for this page-->

    <script src="{{ asset('admin') }}/js/jquery.cookie.js" type="text/javascript"></script>
    @stack('js')
</body>

</html>
