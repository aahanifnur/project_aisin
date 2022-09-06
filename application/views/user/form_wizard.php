<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ayo Ngoding - Membuat Form Wizard Bootstrap</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/'); ?>wizard.css">
</head>

<body style="text-align: center;">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <form action="" method="post" class="f1">
                    <h3>www.ayongoding.com</h3>
                    <p>Membuat Form Wizard Bootstrap</p>
                    <div class="f1-steps">
                        <div class="f1-progress">
                            <div class="f1-progress-line" data-now-value="25" data-number-of-steps="4" style="width: 25%;"></div>
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
                            <button type="button" class="btn btn-primary btn-next">Selanjutnya <i class="fa fa-arrow-right"></i></button>
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
                            <button type="button" class="btn btn-warning btn-previous"><i class="fa fa-arrow-left"></i> Sebelumnya</button>
                            <button type="button" class="btn btn-primary btn-next">Selanjutnya <i class="fa fa-arrow-right"></i></button>
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
                            <button type="button" class="btn btn-warning btn-previous"><i class="fa fa-arrow-left"></i> Sebelumnya</button>
                            <button type="button" class="btn btn-primary btn-next">Selanjutnya <i class="fa fa-arrow-right"></i></button>
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
                            <button type="button" class="btn btn-warning btn-previous"><i class="fa fa-arrow-left"></i> Sebelumnya</button>
                            <button type="submit" class="btn btn-primary btn-submit"><i class="fa fa-save"></i> Submit</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <!-- Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/js/'); ?>wizard.js"></script>
</body>

</html>