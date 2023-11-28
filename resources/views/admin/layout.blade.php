<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/../assets/images/favicon2.png">
    <title>@yield('tittle')</title>
    <!-- Custom CSS -->
    <link href="/../assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <link href="/../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/../assets/dist/css/style.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.tiny.cloud/1/wky5c199j82bb7w1p3fas61c223ojjgso7wkifsssbjl4fid/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css">

    <script>
        tinymce.init({
          selector: '#mytextarea'
        });
      </script>

</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-2">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="/../assets/images/logo-icon.png" alt="homepage" class="light-logo" />

                        </b>
                        <!--End Logo icon -->
                         <!-- Logo text -->
                        <span class="logo-text" style="font-weight: 700;">
                        HIPMI PADANG
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li> --}}
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        {{-- <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"></a> --}}
                            {{-- <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                            </form> --}}
                        {{-- </li> --}}
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="/../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i>Akun Saya</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-shopping-cart m-r-5 m-l-5"></i>Keranjang</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/logout"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('dashboard') }}" aria-expanded="false">
                                <i class="mdi mdi-home"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-database"></i>
                                <span class="hide-menu">Data Master</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="{{ route('admin.data.kategori') }}" class="sidebar-link">
                                        <i class="mdi mdi-folder"></i>
                                        <span class="hide-menu">Kategori</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{ route('admin.data.berita') }}" class="sidebar-link">
                                        <i class="mdi mdi-newspaper"></i>
                                        <span class="hide-menu">Berita</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="mdi mdi-account"></i>
                                <span class="hide-menu">Data HIPMI</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="{{ route('admin.data.sejarah') }}" class="sidebar-link">
                                        <i class="mdi mdi-history"></i>
                                        <span class="hide-menu">Sejarah</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{ route('admin.data.visimisi') }}" class="sidebar-link">
                                        <i class="mdi mdi-eye"></i>
                                        <span class="hide-menu">Visi dan Misi</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="{{ route('admin.data.anggota') }}" aria-expanded="false">
                                        <i class="mdi mdi-account-multiple"></i>
                                        <span class="hide-menu">Struktur Kepengurusan</span>
                                    </a>
                                    <ul class="collapse second-level" id="submenuAnggota">
                                        <li class="sidebar-item">
                                            <a href="{{ route('admin.data.anggota') }}" class="sidebar-link">
                                                <i class="mdi mdi-account-supervisor"></i>
                                                <span class="hide-menu">Pengurus</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="{{ route('admin.data.jabatan') }}" class="sidebar-link">
                                                <i class="mdi mdi-briefcase"></i>
                                                <span class="hide-menu">Jabatan</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="{{ route('admin.data.divisi') }}" class="sidebar-link">
                                                <i class="mdi mdi-domain"></i>
                                                <span class="hide-menu">Divisi</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-item">
                                    <a href="{{ route('admin.data.kontak') }}" class="sidebar-link">
                                        <i class="mdi mdi-phone"></i>
                                        <span class="hide-menu">Kontak</span>
                                    </a>
                                </li>
                            </ul>
                                <li class="sidebar-item">
                                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="#" aria-expanded="false">
                                        <i class="fas fa-users"></i>
                                        <span class="hide-menu">Data Anggota</span>
                                    </a>
                                </li>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <div class="ml-auto text-right">
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid" id="container-wrapper">
                @yield('content')
            </div>
        </div>
    </div>


    <footer class="footer text-center">
        <div class="container">
            &copy; {{ date('Y') }} Azaria Adriana
        </div>
    </footer>


    <script src="/../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="/../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="/../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="/../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="/../assets/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="/../assets/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="/../assets/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="/../assets/libs/flot/excanvas.js"></script>
    <script src="/../assets/libs/flot/jquery.flot.js"></script>
    <script src="/../assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="/../assets/libs/flot/jquery.flot.time.js"></script>
    <script src="/../assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="/../assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="/../assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="/../assets/dist/js/pages/chart/chart-page-init.js"></script>
    <script src="/../assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var submenuAnggota = document.getElementById("submenuAnggota");
        var linkAnggota = document.querySelector('.sidebar-item a[href="{{ route("admin.data.anggota") }}"]');

        // Add a click event listener to the "Anggota" menu item
        linkAnggota.addEventListener("click", function(e) {
            e.preventDefault(); // Prevent default link behavior
            // Toggle the visibility of the submenu
            submenuAnggota.style.display = (submenuAnggota.style.display === 'none' || submenuAnggota.style.display === '') ? 'block' : 'none';
        });
    });
</script>
</body>

</html>
