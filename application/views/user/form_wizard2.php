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

                <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Form IPK</h1>
                        <!-- <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">Home</a></li>
                            <li class="breadcrumb-item">Forms</li>
                            <li class="breadcrumb-item active" aria-current="page">Form Basics</li>
                        </ol> -->
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <form action="<?= base_url('User/simpanDataIPK'); ?>" method="POST">
                                <!-- Nama Pekerja -->
                                <div class="card mb-3">
                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Nama Pekerja</h6>
                                    </div>
                                    <div id="show_item_3">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label>Nama Pekerja</label>
                                                <input type="" class="form-control mb-2" id="pekerja" name="pekerja">
                                                <label>ID Card</label>
                                                <select class="form-control mb-2" id="exampleFormControlSelect1" aria-placeholder="jumlah">
                                                    <option>Ada</option>
                                                    <option>Tidak</option>
                                                </select>
                                                <label>Training HPW</label>
                                                <select class="form-control mb-2" id="exampleFormControlSelect1" aria-placeholder="jumlah">
                                                    <option>Ada</option>
                                                    <option>Tidak</option>
                                                </select>
                                            </div>
                                            <button type="button" name="add" id="add" class="btn btn-success add_item_btn_pekerja">
                                                Add More
                                            </button>
                                            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                                        </div>
                                    </div>
                                </div>

                                <!-- alat keselamatan -->
                                <div class="card mb-3">
                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Alat Keselamatan Kerja</h6>
                                    </div>
                                    <div id="show_item_4">
                                        <div class="card-body">

                                            <div class="form-group">
                                                <label>Nama AKK / APD</label>
                                                <input type="email" class="form-control mb-2" id="noreg" aria-describedby="emailHelp">
                                                <input type="number" class="form-control mb-2" id="noreg" aria-describedby="emailHelp">

                                            </div>

                                            <button type="button" name="add" id="add" class="btn btn-success add_item_btn_apd">
                                                Add More
                                            </button>

                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Pemantauan Alat kerja</h6>
                                    </div>
                                    <div id="show_item_5">
                                        <div class="card-body">

                                            <div class="form-group">
                                                <label>Nama AKK / APD</label>
                                                <input type="email" class="form-control mb-2" id="noreg" aria-describedby="emailHelp">
                                                <select class="form-control" id="exampleFormControlSelect1" aria-placeholder="jumlah">
                                                    <option>OK</option>
                                                    <option>NG</option>
                                                </select>
                                            </div>

                                            <button type="button" name="add" id="add" class="btn btn-success add_item_btn_pemantauan">
                                                Add More
                                            </button>

                                        </div>
                                    </div>
                                </div>

                        </div>

                        <div class="col-lg-6">
                            <!-- General Element -->

                            <div class="card mb-3">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Alat yang Digunakan</h6>
                                </div>
                                <div id="show_item_6">
                                    <div class="card-body">

                                        <div class="form-group">
                                            <label>Nama AKK / APD</label>
                                            <input type="email" class="form-control mb-2" id="noreg" aria-describedby="emailHelp">
                                            <select class="form-control" id="exampleFormControlSelect1" aria-placeholder="jumlah">
                                                <option>OK</option>
                                                <option>NG</option>
                                            </select>
                                        </div>

                                        <button type="button" name="add" id="add" class="btn btn-success add_item_btn_alat">
                                            Add More
                                        </button>

                                        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->

                                    </div>
                                </div>
                            </div>

                            <!-- percobaan more add input -->
                            <div class="card mb-3">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Sumber Daya yang Digunakan</h6>
                                </div>
                                <div id="show_item">
                                    <div class="card-body">

                                        <div class="form-group">
                                            <label>Nama AKK / APD</label>
                                            <input name="nama" type="text" class="form-control mb-2" id="nama" aria-describedby="">
                                            <select class="form-control" id="akk_apd_s" aria-placeholder="kondis">
                                                <option>OK</option>
                                                <option>NG</option>
                                            </select>
                                        </div>

                                        <button type="button" name="" id="" class="btn btn-success add_item_btn_sda">
                                            Add More
                                        </button>

                                        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->

                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Pengawasan Oleh PT AISIN Indonesia</h6>
                                </div>
                                <div id="show_item_2">
                                    <div class="card-body">

                                        <div class="form-group">
                                            <label>User</label>
                                            <input type="email" class="form-control mb-2" id="noreg" aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group">
                                            <label>Safety Officer</label>
                                            <input type="email" class="form-control mb-2" id="noreg" aria-describedby="emailHelp">
                                        </div>
                                        <div class="form-group">
                                            <label>P2K3L</label>
                                            <input type="email" class="form-control mb-2" id="noreg" aria-describedby="emailHelp">
                                        </div>

                                        <button type="button" name="add" id="add" class="btn btn-success add_item_btn_pengawas">
                                            Add More
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        </form>
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
                                    <a href="login.html" class="btn btn-primary">Logout</a>
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
                            </script> - developed by
                            <b><a href="https://indrijunanda.gitlab.io/" target="_blank">ahmad</a></b>
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
    <!-- End Scroll to top -->

    <!-- import javascript -->
    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/ruang-admin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/multiple_input_sda.js"></script>
    <script src="<?= base_url('assets/'); ?>js/multiple_input_pengawasan.js"></script>
    <script src="<?= base_url('assets/'); ?>js/multiple_input_pekerja.js"></script>
    <script src="<?= base_url('assets/'); ?>js/multiple_input_apd.js"></script>
    <script src="<?= base_url('assets/'); ?>js/multiple_input_alat.js"></script>
    <script src="<?= base_url('assets/'); ?>js/multiple_input_pemantauan.js"></script>

    <script>
        // $(document).ready(function() {
        //     $(".add_item_btn").click(function(e) {
        //         e.preventDefault();
        //         $("#show_item").prepend(`
        //     <div class="card-body">
        //                             <form>
        //                                 <div class="form-group">
        //                                     <label>Nama AKK / APD</label>
        //                                     <input name="nama" type="text" class="form-control mb-2" id="nama" aria-describedby="">
        //                                     <select class="form-control" id="akk_apd_s" aria-placeholder="">
        //                                         <option>OK</option>
        //                                         <option>NG</option>
        //                                     </select>
        //                                 </div>

        //                                 <button type="button" name="remove" id="remove" class="btn btn-danger remove_item_btn">
        //                                     Remove
        //                                 </button>                                   
        //                             </form>
        //                         </div>
        //                         `)
        //     });
        //     $(document).on('click', '.remove_item_btn', function(e) {
        //         e.preventDefault();
        //         let row_item = $(this).parent().parent();
        //         $(row_item).remove();
        //     });


        // pending................................................... iki nggo insert data ng db
        // ajax request to insert all form data --- pending ndisik ya
        // $("#add_form").submit(function(e) {
        //     e.preventDefault();
        //     $("#add_btn").val('Adding...');
        //     $.ajax({
        //         url: 'user/tambah_administrasi',
        //         method: 'post',
        //         data: $(this).serialize(),
        //         success: function(response) {
        //             console.log(response);
        //         }
        //     })
        // })
        //end pending

        // });
    </script>
    <!-- end import javascript -->

</body>

</html>