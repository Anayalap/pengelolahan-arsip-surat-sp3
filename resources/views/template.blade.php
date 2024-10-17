<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/logo_pku.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Kelurahan Simpang Tiga</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" />

    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />

    <style>
        .sidebar-hidden {
            display: none;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar {{ request()->is('sktm/*/edit') ? 'sidebar-hidden' : '' }}" data-color="white" data-active-color="danger">
            <div class="logo">
                <a href="#" class="simple-text logo-mini">
                    <div class="logo-image-small">
                        <img src="../assets/img/logo_pku.png" style="width: 40px; height: 40px;">
                    </div>
                </a>
                <a href="#" class="simple-text logo-normal">ARSIP SURAT SP3</a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="./dashboard">
                            <i class="nc-icon nc-bank"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
           
                    <li>
                        <a href="#">
                            <i class="nc-icon nc-bank"></i>
                            <p>KESOS</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('sktm.index') }}">
                            <i class="fas fa-envelope"></i>
                            <p>SKTM</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('sk_menika.index') }}">
                            <i class="fas fa-envelope"></i>
                            <p>SK MENIKA</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('sk_belum_menika.index') }}">
                            <i class="fas fa-envelope"></i>
                            <p>SK BELUM MENIKA</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('sk_kematian.index') }}">
                            <i class="fas fa-envelope"></i>
                            <p>SK KEMATIAN</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('sk_rekom_rumah_ibadah.index') }}">
                            <i class="fas fa-envelope"></i>
                            <p>SK RUMAH IBADAH</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="nc-icon nc-bank"></i>
                            <p>KSPR</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('skgr.index') }}">
                            <i class="fas fa-envelope"></i>
                            <p>SKGR/HIBA</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('sprpt.index') }}">
                            <i class="fas fa-envelope"></i>
                            <p>SPRPT</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('sk_pindah_wilaya.index') }}">
                            <i class="fas fa-envelope"></i>
                            <p>SK PINDA WILAYA</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('surat_teregistrasi.index') }}">
                            <i class="fas fa-envelope"></i>
                            <p>SURAT TEREGISTRASI</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="nc-icon nc-bank"></i>
                            <p>PPM</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('sk_penghasilan.index') }}">
                            <i class="fas fa-envelope"></i>
                            <p>SK PENGHASILAN</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('sk_beda_data.index') }}">
                            <i class="fas fa-envelope"></i>
                            <p>SK BEDA DATA</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('domisili_usaha.index') }}">
                            <i class="fas fa-envelope"></i>
                            <p>DOMISILI USAHA</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                <button class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->

            <!-- CONTENT -->
            @yield('content')
            <!-- End CONTENT -->

            <footer class="footer footer-black footer-white">
                <div class="container-fluid">
                    <div class="row">
                        <div class="credits ml-auto"></div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Core JS Files -->
    <script src="../assets/js/core/jquery.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <script src="../assets/js/plugins/bootstrap-notify.js"></script>
    <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
    <script src="../assets/demo/demo.js"></script>
    <script>
        $(document).ready(function() {
            demo.initChartsPages();
        });
    </script>
</body>

</html>
