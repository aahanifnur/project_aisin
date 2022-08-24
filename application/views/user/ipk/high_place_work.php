<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?= base_url('assets/'); ?>img/logo/logo.png" rel="icon">
    <title>RuangAdmin - Dashboard</title>
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <img width="100px" height="90px" src="<?= base_url('assets/'); ?>img/logo/aisin.png">
                </div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Features
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap" aria-expanded="true" aria-controls="collapseBootstrap">
                    <i class="far fa-fw fa-window-maximize"></i>
                    <span>Menu</span>
                </a>
                <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Bootstrap UI</h6>
                        <a class="collapse-item" href="alerts.html">Alerts</a>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="dropdowns.html">Dropdowns</a>
                        <a class="collapse-item" href="modals.html">Modals</a>
                        <a class="collapse-item" href="popovers.html">Popovers</a>
                        <a class="collapse-item" href="progress-bar.html">Progress Bars</a>
                    </div>
                </div>
            </li>


            <hr class="sidebar-divider">
            <div class="version" id="">Version 1.1 2022</div>
        </ul>
        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
                    <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-white small"><?= $user['name']; ?></span>
                                <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') .  $user['image']; ?>">
                            </a>

                            <!-- dropdown user information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- Topbar -->

                <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
                    <div class="col-xl-12 col-lg-7 mb-4 d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h4 mb-0 text-gray-800">High Place Work</h1>
                        <!-- <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol> -->
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <div>
                                    <?php
                                    echo date('l, d-M-Y');
                                    ?>
                                </div>
                            </li>
                        </ol>
                    </div>

                    <div class="row mb-3">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-2 col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-center text-xs font-weight-bold text-uppercase mb-1">Kontraktor</div>
                                            <hr>

                                            <div class="text-center h5 mb-0 font-weight-bold text-gray-800"><span class="badge badge-success">Delivered</span></div>
                                            <hr>
                                            <div class="text-center mt-2 mb-0 text-muted text-xs">
                                                <!-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span> -->



                                                <span class="h6 text-gray-800">Purwoko</span>
                                            </div>
                                        </div>
                                        <!-- <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-primary"></i>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-center text-xs font-weight-bold text-uppercase mb-1">MGR User</div>
                                            <hr>

                                            <div class="text-center h5 mb-0 font-weight-bold text-gray-800"><span class="badge badge-success">Delivered</span></div>
                                            <hr>
                                            <div class="text-center mt-2 mb-0 text-muted text-xs">
                                                <!-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span> -->



                                                <span class="h6 text-gray-800">Gangsar</span>
                                            </div>
                                        </div>
                                        <!-- <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-primary"></i>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-2 col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-center text-xs font-weight-bold text-uppercase mb-1">MGR Area</div>
                                            <hr>

                                            <div class="text-center h5 mb-0 font-weight-bold text-gray-800"><span class="badge badge-success">Delivered</span></div>
                                            <hr>
                                            <div class="text-center mt-2 mb-0 text-muted text-xs">
                                                <!-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span> -->



                                                <span class="h6 text-gray-800">Janto</span>
                                            </div>
                                        </div>
                                        <!-- <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-primary"></i>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div><!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-2 col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-center text-xs font-weight-bold text-uppercase mb-1">Safety</div>
                                            <hr>

                                            <div class="text-center h5 mb-0 font-weight-bold text-gray-800"><span class="badge badge-success">Delivered</span></div>
                                            <hr>
                                            <div class="text-center mt-2 mb-0 text-muted text-xs">
                                                <!-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span> -->


                                                <span class="h6 text-gray-800">Anton</span>
                                            </div>
                                        </div>
                                        <!-- <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-primary"></i>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div><!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-2 col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-center text-xs font-weight-bold text-uppercase mb-1">P2K3L</div>
                                            <hr>

                                            <div class="text-center h5 mb-0 font-weight-bold text-gray-800"><span class="badge badge-success">Delivered</span></div>
                                            <hr>
                                            <div class="text-center mt-2 mb-0 text-muted text-xs">
                                                <!-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span> -->



                                                <span class="h6 text-gray-800">Gangsar</span>
                                            </div>
                                        </div>
                                        <!-- <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-primary"></i>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div><!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-2 col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-center text-xs font-weight-bold text-uppercase mb-1">GM</div>
                                            <hr>

                                            <div class="text-center h5 mb-0 font-weight-bold text-gray-800"><span class="badge badge-success">Delivered</span></div>
                                            <hr>
                                            <div class="text-center mt-2 mb-0 text-muted text-xs">
                                                <!-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span> -->


                                                <span class="h6 text-gray-800">Arif</span>
                                            </div>
                                        </div>
                                        <!-- <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-primary"></i>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div><!-- Earnings (Monthly) Card Example -->



                        <div class="col-xl-12 col-lg-7 mb-4 d-sm-flex align-items-center justify-content-between ml-3 mb-4">
                            <h4 class="h4 mb-0 text-gray-800">Perpanjangan</h4>
                            <!-- <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol> -->
                        </div>

                        <div class="col-xl-2 col-md-6 mb-4">

                            <div class="card h-100">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-center text-xs font-weight-bold text-uppercase mb-1">Safety/P2K3L</div>
                                            <hr>

                                            <div class="text-center h5 mb-0 font-weight-bold text-gray-800"><span class="badge badge-warning">None</span></div>
                                            <hr>
                                            <div class="text-center mt-2 mb-0 text-muted text-xs">
                                                <!-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span> -->



                                                <span class="h6 text-gray-800">Anton</span>
                                            </div>
                                        </div>
                                        <!-- <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-primary"></i>
                                        </div> -->
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="col-xl-12 col-lg-7 mb-4 d-sm-flex align-items-center justify-content-between ml-3 mb-4">
                            <h1 class="h4 mb-0 text-gray-800">Administration</h1>
                            <!-- <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol> -->
                        </div>

                        <div class="col-xl-6 col-lg-7 mb-4">
                            <div class="card">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary"></h6>
                                    <a class="m-0 float-right btn btn-danger btn-sm" href="<?= base_url('user/form_adm'); ?>">Isi Form <i class="fas fa-chevron-right"></i></a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                        <tbody>
                                            <tr>
                                                <td><a>No Register</a></td>
                                                <td>:</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td><a>Nama Kontraktor</a></td>
                                                <td>:</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td><a>Nama Pekerjaan</a></td>
                                                <td>:</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td><a>Lokasi Pekerjaan</a></td>
                                                <td>:</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td><a>Tanggal Bekerja</a></td>
                                                <td>:</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td><a>Perpanjangan</a></td>
                                                <td>:</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer"></div>
                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-7 mb-4 d-sm-flex align-items-center justify-content-between ml-3 mb-4">
                            <h1 class="h4 mb-0 text-gray-800">Form IPK</h1>
                            <!-- <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol> -->
                        </div>

                        <!-- Invoice Example -->
                        <div class="col-xl-12 col-lg-7 mb-4">
                            <div class="card">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary"></h6>
                                    <a class="m-0 float-right btn btn-danger btn-sm" href="<?= base_url('user/form'); ?>">Isi Form <i class="fas fa-chevron-right"></i></a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush" id="">
                                        <thead class="thead-light">
                                            <tr class="text-center">
                                                <th rowspan="2">No</th>
                                                <th rowspan="2">Nama Pekerja</th>
                                                <th rowspan="2">Training HPW</th>
                                                <th rowspan="2">ID Card</th>
                                                <th colspan="2">APD yang Digunakan</th>
                                                <th colspan="2">Pemantauan Alat Bantu Kerja</th>
                                                <th colspan="2">Peralatan Kerja</th>
                                                <th colspan="3">Sumber Daya yang Digunakan</th>
                                                <th colspan="3">Pengawasan oleh PT AISIN INDONESIA</th>
                                            </tr>
                                            <tr class="text-center">
                                                <th>Nama</th>
                                                <th>Jumlah</th>
                                                <th>Nama</th>
                                                <th>Kondisi</th>
                                                <th>Nama</th>
                                                <th>Jumlah</th>
                                                <th>Listrik</th>
                                                <th>Angin</th>
                                                <th>Air</th>
                                                <th>User</th>
                                                <th>P2K3L</th>
                                                <th>Safety</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer"></div>
                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-7 mb-4 d-sm-flex align-items-center justify-content-between ml-3 mb-4">
                            <h1 class="h4 mb-0 text-gray-800">Lampiran</h1>
                        </div>

                        <!-- Invoice Example -->
                        <div class="col-xl-6 col-lg-7 mb-4">
                            <div class="card">
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a>Pernyataaan Sosialisasi Kebijakan LK3 & Peraturan</a></td>
                                                <td><span class="badge badge-success">Delivered</span></td>
                                                <td><a href="<?= base_url('user/pernyataan'); ?>" class="btn btn-sm btn-primary">Detail</a></td>
                                            </tr>
                                            <tr>
                                                <td><a>Identifikasi Aspek dan Dampak LK3</a></td>
                                                <td><span class="badge badge-warning">Shipping</span></td>
                                                <td><a href="<?= base_url('user/identifikasi_aspek'); ?>" class="btn btn-sm btn-primary">Detail</a></td>
                                            </tr>
                                            <tr>
                                                <td><a>Check List Aktivitas Pra-kerja</a></td>
                                                <td><span class="badge badge-danger">Pending</span></td>
                                                <td><a href="<?= base_url('user/check_list_aktivitas'); ?>" class="btn btn-sm btn-primary">Detail</a></td>
                                            </tr>
                                            <tr>
                                                <td><a>Lisensi K3 CS</a></td>
                                                <td><span class="badge badge-info">Processing</span></td>
                                                <td><a href="<?= base_url('user/upload_file'); ?>" class="btn btn-sm btn-primary">Detail</a></td>
                                            </tr>
                                            <tr>
                                                <td><a>Catatan Pekerjaan Khusus</a></td>
                                                <td><span class="badge badge-success">Delivered</span></td>
                                                <td><a href="<?= base_url('user/catatan_pekerjaan_khusus'); ?>" class="btn btn-sm btn-primary">Detail</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-footer"></div>
                            </div>
                        </div>
                    </div>
                    <!--Row-->

                    <!-- Modal Logout -->
                    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to logout?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                                    <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!---Container Fluid-->
            </div>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>copyright &copy; <script>
                                document.write(new Date().getFullYear());
                            </script>
                            <b><a href="#" target="_blank">AISIN Indonesia</a></b>
                        </span>
                    </div>
                </div>
            </footer>
            <!-- Footer -->
        </div>
    </div>

    <!-- Scroll to top -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/ruang-admin.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/chart.js/Chart.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/demo/chart-area-demo.js"></script>
</body>

</html>