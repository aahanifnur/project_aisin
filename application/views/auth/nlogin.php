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
            <div class="col-xl-6 col-lg-12 col-md-9">
                <div class="card shadow-sm my-5">
                    <div class="card-body p-0">
                        <!-- navbar -->
                        <nav class="navbar navbar-expand navbar-light bg-white topbar static-top shadow p-4">

                            <div class="container">
                                <ul class="nav justify-content-center">

                                </ul>
                                <ul class="nav justify-content-center">
                                    <li class="nav-item">
                                        <a href="auth/login.php">
                                            <img width="380" height="60" src="<?= base_url('assets/'); ?>img/logo/aisin2.png">
                                        </a>
                                    </li>
                                </ul>
                                <ul class="nav justify-content-center">

                                </ul>
                            </div>

                        </nav>
                        <!-- end navbar -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="login-form">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                    </div>

                                    <?= $this->session->flashdata('message') ?>

                                    <form class="user" method="POST" action="<?= base_url('auth') ?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>"><?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Password"><?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-block">
                                            Login
                                        </button>
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