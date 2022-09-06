<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?= base_url('assets/'); ?>img/logo/logo.png" rel="icon">
    <title>RuangAdmin - Form Basics</title>
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>css/ruang-admin.min.css" rel="stylesheet">
    <!-- tambahan -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link href="<?= base_url('assets/'); ?>vendor/bootstrap-touchspin/css/jquery.bootstrap-touchspin.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->

    <!-- wizard -->
    <link rel="stylesheet" href="<?= base_url('assets/css/'); ?>wizard.css">
</head>

<body id="page-top" style="text-align: center;">
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
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-white small"><?= $user['name']; ?></span>
                                <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') .  $user['image']; ?>">
                            </a>
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

                <div class="container-fluid" id="container-wrapper">
                    <div class="card container mb-4">
                        <div class="row">
                            <div class="col-md-12 col-md-offset-1">
                                <form action="" method="post" class="f1">
                                    <br />
                                    <h3>FORM IPK</h3>
                                    <p>Pastikan anda mengisinya dngan benar.</p>
                                    <div style="overflow-x:auto ;">
                                        <div class="f1-steps">
                                            <div class="f1-progress">
                                                <div class="f1-progress-line" data-now-value="25" data-number-of-steps="7" style="width: 25%;"></div>
                                            </div>
                                            <div class="f1-step active">
                                                <div class="f1-step-icon"><i class="fa fa-user"></i></div>
                                                <p>Biodata</p>
                                            </div>
                                            <div class="f1-step">
                                                <div class="f1-step-icon"><i class="fa fa-home"></i></div>
                                                <p>Alamat</p>
                                            </div>
                                            <div class="f1-step">
                                                <div class="f1-step-icon"><i class="fa fa-key"></i></div>
                                                <p>Akun</p>
                                            </div>
                                            <div class="f1-step">
                                                <div class="f1-step-icon"><i class="fa fa-address-book"></i></div>
                                                <p>Sosial</p>
                                            </div>
                                            <div class="f1-step">
                                                <div class="f1-step-icon"><i class="fa fa-address-book"></i></div>
                                                <p>Hanif</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- step 1 -->
                                    <fieldset>
                                        <h4>Identitas Pribadi</h4>
                                        <div class="form-group">
                                            <label>Nama Awal</label>
                                            <input type="text" name="nama_awal" placeholder="Nama Awal" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Akhir</label>
                                            <input type="text" name="nama_akhir" placeholder="Nama Akhir" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Tentang Kamu</label>
                                            <textarea name="tentang_kamu" placeholder="Tentang Kamu" class="form-control"></textarea>
                                        </div>
                                        <div class="f1-buttons">
                                            <button type="button" class="btn btn-primary btn-next mb-4">Selanjutnya <i class="fa fa-arrow-right"></i></button>
                                        </div>
                                    </fieldset>
                                    <!-- step 2 -->
                                    <fieldset>
                                        <h4>Alamat Lengkap</h4>
                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat Rumah</label>
                                            <input type="text" name="alamat_rumah" placeholder="Alamat Rumah" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat Kantor</label>
                                            <textarea name="alamat_kantor" placeholder="Alamat Kantor" class="form-control"></textarea>
                                        </div>
                                        <div class="f1-buttons">
                                            <button type="button" class="btn btn-warning btn-previous mb-4"><i class="fa fa-arrow-left"></i> Sebelumnya</button>
                                            <button type="button" class="btn btn-primary btn-next mb-4">Selanjutnya <i class="fa fa-arrow-right"></i></button>
                                        </div>
                                    </fieldset>
                                    <!-- step 3 -->
                                    <fieldset>
                                        <h4>Buat Akun</h4>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="email" placeholder="Email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password" placeholder="Password" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Ulangi password</label>
                                            <input type="password" name="ulangi_password" placeholder="Ulangi password" class="form-control">
                                        </div>
                                        <div class="f1-buttons">
                                            <button type="button" class="btn btn-warning btn-previous mb-4"><i class="fa fa-arrow-left"></i> Sebelumnya</button>
                                            <button type="button" class="btn btn-primary btn-next mb-4">Selanjutnya <i class="fa fa-arrow-right"></i></button>
                                        </div>
                                    </fieldset>
                                    <!-- step 4 -->
                                    <fieldset>
                                        <h4>Sosial Media</h4>
                                        <div class="form-group">
                                            <label>Facebook</label>
                                            <input type="text" name="facebook" placeholder="Facebook" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Twitter</label>
                                            <input type="text" name="twitter" placeholder="Twitter" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Google plus</label>
                                            <input type="text" name="google_plus" placeholder="Google plus" class="form-control">
                                        </div>
                                        <div class="f1-buttons">
                                            <button type="button" class="btn btn-warning btn-previous  mb-4"><i class="fa fa-arrow-left"></i> Sebelumnya</button>
                                            <button type="submit" class="btn btn-primary btn-submit mb-4"><i class="fa fa-save"></i> Submit</button>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <h4>Sosial Media</h4>
                                        <div class="form-group">
                                            <label>Facebook</label>
                                            <input type="text" name="facebook" placeholder="Facebook" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Twitter</label>
                                            <input type="text" name="twitter" placeholder="Twitter" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Google plus</label>
                                            <input type="text" name="google_plus" placeholder="Google plus" class="form-control">
                                        </div>
                                        <div class="f1-buttons">
                                            <button type="button" class="btn btn-warning btn-previous  mb-4"><i class="fa fa-arrow-left"></i> Sebelumnya</button>
                                            <button type="submit" class="btn btn-primary btn-submit mb-4"><i class="fa fa-save"></i> Submit</button>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <h4>Sosial Media</h4>
                                        <div class="form-group">
                                            <label>Facebook</label>
                                            <input type="text" name="facebook" placeholder="Facebook" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Twitter</label>
                                            <input type="text" name="twitter" placeholder="Twitter" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Google plus</label>
                                            <input type="text" name="google_plus" placeholder="Google plus" class="form-control">
                                        </div>
                                        <div class="f1-buttons">
                                            <button type="button" class="btn btn-warning btn-previous  mb-4"><i class="fa fa-arrow-left"></i> Sebelumnya</button>
                                            <button type="submit" class="btn btn-primary btn-submit mb-4"><i class="fa fa-save"></i> Submit</button>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <h4>Sosial Media</h4>
                                        <div class="form-group">
                                            <label>Facebook</label>
                                            <input type="text" name="facebook" placeholder="Facebook" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Twitter</label>
                                            <input type="text" name="twitter" placeholder="Twitter" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Google plus</label>
                                            <input type="text" name="google_plus" placeholder="Google plus" class="form-control">
                                        </div>
                                        <div class="f1-buttons">
                                            <button type="button" class="btn btn-warning btn-previous  mb-4"><i class="fa fa-arrow-left"></i> Sebelumnya</button>
                                            <button type="submit" class="btn btn-primary btn-submit mb-4"><i class="fa fa-save"></i> Submit</button>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>copyright &copy; <script>
                                document.write(new Date().getFullYear());
                            </script> - developed by
                            <b><a href="https://indrijunanda.gitlab.io/" target="_blank">indrijunanda</a></b>
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
    <link href="<?= base_url('assets/'); ?>vendor/bootstrap-touchspin/css/jquery.bootstrap-touchspin.css" rel="stylesheet">
    <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/ruang-admin.min.js"></script>

    <!-- wizard -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/js/'); ?>wizard.js"></script>
</body>

</html>