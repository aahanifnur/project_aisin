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
                <a class="nav-link" href="<?= base_url('user'); ?>">
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

                    <div class="row mb-3">
                        <!-- Earnings (Monthly) Card Example -->
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <div class="container">
                                    <center>
                                        <h4 class="m-0 font-weight-bold text-primary">PERNYATAAN</h4>

                                        <h6 class="m-0 font-weight- text-primary">Sosialisasi Kebijakan LK3 & Peraturan Bagi Kontraktor/Suplier</h6>
                                        <h6 class="m-0 font-weight- text-primary">Selama Berada di Area PT. AISIN INDONESIA</h6>
                                    </center>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <td>1. </td>
                                        <td>Masuk Lingkungan PT.AISIN INDONESIA, Tamu harus melalui Pos security dan Wajib menyerahkan Identitas KTP,SIM,Kartu identitas karyawan dan Jumlah pekerja yang bertugas di PT.AISIN INDONESIA kepada Kepala regu /Chicf Security
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2. </td>
                                        <td>
                                            Setiap masuk / keluar Tamu harus melalui pos security melapor membawa barang dan membaca kartu protokol keselamatan tamu yang berisi Kebijakan LK3 PT. AISIN INDONESIA & Panduan Tamu apabila terjadi keadaan darurat yang telah disediakan di pos security.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3. </td>
                                        <td>
                                            Bila masuk ke Pabrik wajib memperlihatkan form Visitor Plant kepada Security dipintu masuk, Form Visitor yang di setujui ditanda tangani Oleh Group Manager atau DIREKTUR PT.AISIN INDONESIA
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4. </td>
                                        <td>
                                            Wajib menggunakan APD yang sesuai dan menaati tat tertib perusahaan
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5. </td>
                                        <td>
                                            Setiap pulang /keluar dari komplek PT. Aisin Indonesia tunjukkan barang yg di bawa sertakan dokumennya dan menukar kartu Visitor dengan mengambil identitasnya masing-masing.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6. </td>
                                        <td>
                                            Khusus Kontraktor wajib memperlihatkan kepada Security Foto Copy izin Pekerjaan Khusus ( IPK ) yang sudah di Registrasi oleh P2K3L ( Section Safety ) dan dilampirkan Bukti Sosialisasi safety sebagai Syarat sudah mendapatkan pengarahan tentang safety untuk melakukan pekerjaan di PT.AISIN INDONESIA
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7. </td>
                                        <td>
                                            Selama pekerjaan berlangsung karyawan kontraktor harus menggunakan seragam dan rompi Lengkap dengan Alat Pelindung Diri ( APD ) harus disediakan dan ada nama IDENTITAS Kontraktor '
                                            Apabila kontraktor menggunakan helm dan Rompi harus type beda dengan yang digunakan oleh karyawan PT. Aisin Indonesia.'
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6. </td>
                                        <td>
                                            Wajib menjaga ketertiban & keamanan di dalam lingkungan PT. Aisin Indonesia agar membatasi area kerja serta dipasang Police line / barekade safety line

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7. </td>
                                        <td>
                                            Wajib untuk segera memberitahukan kepada User apabila terjadi keadaan darurat (Kebakaran, Ledakan, kebocoran Bahan Kimia, Banjir, Huru hara, dll) dan mematuhi petunjuk-petunjuk evakuasi dan petugas keadaan darurat PT Aisin Indonesia demi keselamatan karyawan

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8. </td>
                                        <td>
                                            Selama bekerja diwajibkan Kepala proyek / pimpinan lapangan yang di tunjuk Selalu ada di Lokasi untuk mengawasi kondisi Area bila suatu waktu dibutuhkan Oleh user , sebelum meninggalkan area kerja harus melakukan menjaga kebersihan membuang sampah pada tempatnya

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9. </td>
                                        <td>
                                            Apabila dalam melaksanakan pekerjaannya ditemukan pelanggaran terhadap aturan safety (Standard kerja, APD, dll ) dilakukan Stop-Call-Wait dan Bila tidak diLengkapi,pekerjaan tidak dapat di lanjutkan

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10. </td>
                                        <td>
                                            Dilarang Keras Merokok dan Membuang Sampah ( Barang Bekas ) Bentuk apapun disembarang tempat Tanpa sepengetahuan USER bila terjadi Pelanggaran maka akan di kenakan Sangsi sesuai Peraturan Perusahaan PT.AISIN INDONESIA
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>

                                        </td>
                                        <td>
                                            <p>
                                                <br />Dengan ini saya membaca Kebijakan LK3 dan menyatakan telah menerima dan memahami seluruh isi dari peraturan pekerjaan kontraktor di PT.Aisin Indonesia
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <button onclick="history.back()" class="btn btn-secondary btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-arrow-right"></i>
                                </span>
                                <span class="text">Back</span>
                            </button>
                            <button href="#" type="submit" class="btn btn-success btn-icon-split ml-2">
                                <span class="icon text-white-50">
                                    <i class="fas fa-check"></i>
                                </span>
                                <span class="text">Approve</span>
                            </button>

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