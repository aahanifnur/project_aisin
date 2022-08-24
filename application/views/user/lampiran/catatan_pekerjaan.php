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
                        <h1 class="h4 mb-0 text-gray-800"></h1>
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

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="container">
                                <center>
                                    <h4 class="m-0 font-weight-bold text-primary">Catatan Pekerjaan Khusus</h4>
                                </center>
                            </div>
                        </div>
                        <div class="card-body">
                            <table>
                                <tr class="text-bold">
                                    <td>1. </td>
                                    <td>Penggunaan Alat Pelindung Diri
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        Setiap melakukan pekerjaan, setiap pekerja wajib menggunakan alat pelindun diri sesuai dengan potensi bahaya pekerjaan.
                                    </td>
                                </tr>
                                <tr>
                                    <td>2. </td>
                                    <td>
                                        Aturan Pekerjaan
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        - Pekerjaan dilakukan oleh lebih dari 1 orang
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        - Tersedia jalur evakuasi
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        - Melakukan isolasi energi sebelum mulai bekerja

                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        - Sarana komunikasi baik, ada pengawas
                                    </td>
                                </tr>
                                <tr>
                                    <td>3. </td>
                                    <td>
                                        Tata tertib lain
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        - Setiap pekerja wajib menggunakan seragam (menggunakan identitas yang jelas)
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        - Tidak diperbolehkan menyentuh produk dan berbicara kepada operator yang sedang bekerja
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        - Menjaga kebersihan lingkungan di sekitar tempat kerja

                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        - Melokalisir area kerja dan memasang papan informasi pekerjaan
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <button href="#" type="submit" onclick="history.back()" class="btn btn-secondary btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-arrow-right"></i>
                            </span>
                            <span class="text">Back</span>
                        </button>
                        <button href="#" type="submit" class="btn btn-success btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-check"></i>
                            </span>
                            <span class="text">Approve</span>
                        </button>

                    </div>

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