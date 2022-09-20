<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?= base_url('assets/'); ?>img/logo/logo.png" rel="icon">
    <title>RuangAdmin - Login</title>
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>vendor/bootstrap1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>css/ruang-admin.min.css" rel="stylesheet">



</head>

<body class="bg-gradient-login">



    <!-- Login Content -->
    <div class="container-login">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-9 col-sm-10">
                <div class="card shadow-sm my-5">
                    <div class="card-body p-0">
                        <!-- navbar -->

                        <div class="mt-5 md-5 text-center">
                            <a class="d-block auth-logo mx-auto" href="<?= base_url('auth'); ?>">
                                <img class="auth-logo-dark max-width-full mr-1" width="60" height="55" src="<?= base_url('assets/'); ?>img/logo/aisin4.png">
                                <img class="auth-logo-dark max-width-full ml-1" width="200" height="60" src="<?= base_url('assets/'); ?>img/logo/aisin3.png">
                            </a>
                        </div>


                        <!-- end navbar -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="login-form">
                                    <div class="text-primary">
                                        <h5>Selamat datang !</h5>
                                    </div>
                                    <p class="text-muted">Masukan username & password untuk masuk ke Sistem Informasi IPK</p>
                                    <p style="background-color: #fff3cd !important;
  padding: 20px;
  border-color: #ffecb5;
  color: #664d03;">

                                        <b>
                                            Username dan Password Sesuai yang diberikan oleh pihak Safety</b>
                                        <br>
                                        <br>
                                        untuk informasi silahkan hubungi <b>085742355944</b>
                                    </p>

                                    <?= $this->session->flashdata('message') ?>

                                    <form class="user" method="POST" action="<?= base_url('auth') ?>">
                                        <div class="form-group">
                                            <label for="">Username</label>
                                            <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>"><?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Password</label>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Password"><?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-block">
                                            Login
                                        </button>
                                        <div class="mt-4 mt-md-5 text-muted text-center">2022 Safety Information System AISIN</div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Content -->
    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/ruang-admin.min.js"></script>
</body>

</html>