<!-- tanggal -->
<div>
    <?php
    echo date('l, d-M-Y');
    ?>
</div>

<!-- Header judul -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="container">
            <center>
                <div>
                    <h4 class="m-0 font-weight-bold text-primary">IZIN PEKERJAAN KHUSUS</h4>
                </div>
                <div>
                    <h5>HIGH PLACE WORK</h5>
                </div>
            </center>
        </div>
    </div>

    <!-- form and approval -->
    <div class="card-body">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div>
                <ul>
                    <form action="">
                        <table>
                            <tr>
                                <td>No Registrasi </td>
                                <td>: </td>
                                <td><input type="text" name="" id="" /></td>
                            </tr>
                            <tr>
                                <td>Nama Kontraktor </td>
                                <td>: </td>
                                <td><input type="text" name="" id="" /></td>
                            </tr>
                            <tr>
                                <td>Nama Pekerjaan </td>
                                <td>: </td>
                                <td><select name="cars" id="cars">
                                        <option value="volvo">HPW</option>
                                        <option value="saab">HW</option>
                                        <option value="opel">CS</option>
                                        <option value="audi">G</option>
                                    </select>
                                    <input type="text" name="" id="" />
                                </td>
                            </tr>
                            <tr>
                                <td>Lokasi Pekerjaan </td>
                                <td>: </td>
                                <td><select name="cars" id="cars">
                                        <option value="volvo">Volvo</option>
                                        <option value="saab">Saab</option>
                                        <option value="opel">Opel</option>
                                        <option value="audi">Audi</option>
                                    </select>
                                    <input type="text" name="" id="" />
                                </td>
                            </tr>
                            <tr>
                                <td>Tanggal Bekerja </td>
                                <td>: </td>
                                <td><input type="date" name="" id="" />
                                    <a> s/d </a><input type="date" name="" id="" />
                                </td>

                            </tr>
                            <tr>
                                <td>Perpanjangan </td>
                                <td>: </td>
                                <td><input type="date" name="" id="" />
                                    <a> s/d </a><input type="date" name="" id="" />
                                </td>
                            </tr>
                            <tr>
                                <td>CP Mandor </td>
                                <td>:</td>
                                <td><input type="text" name="" id="" /></td>
                            </tr>
                        </table>
                    </form>
                </ul>
            </div>
            <div>
                <ul class="ml-auto">
                    <div class="card shadow mb-4">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="" width="100%">
                                    <thead>
                                        <tr class="text-center">
                                            <th colspan="5">Registrasi</th>
                                            <th>Perpanjangan</th>
                                        </tr>
                                        <tr class="text-center">
                                            <th>Kontraktor</th>
                                            <th>MGR User</th>
                                            <th>MGR Area</th>
                                            <th>Safety</th>
                                            <th>P2K3L</th>
                                            <th>Safety/P2K3L</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr class="text-center">
                                            <td><br /></td>
                                            <td><br /></td>
                                            <td><br /></td>
                                            <td><br /></td>
                                            <td><br /></td>
                                            <td><br /></td>
                                        </tr>
                                        <tr class="text-center">
                                            <td>Name<br /></td>
                                            <td>Name<br /></td>
                                            <td>Name<br /></td>
                                            <td>Name<br /></td>
                                            <td>Name<br /></td>
                                            <td>Name<br /></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- sub isian ke-1 -->
<div class="row">
    <ul>
        <p>I. Form IPK</p>
    </ul><br />

</div>

<!-- Tabel -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive p-3">
            <table border="1" class="table align-items-center table-flush" id="">
                <thead class="thead-light">
                    <tr class="text-center">
                        <th rowspan="2">No</th>
                        <th rowspan="2">Nama Pekerja</th>
                        <th rowspan="2">Training Confined Space</th>
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
                    <?php foreach ($data as $value) { ?>
                        <tr class="text-center">
                            <td><?php echo $value->id; ?></td>
                            <td><?php echo $value->nama; ?></td>
                            <td><?php echo $value->jumlah; ?></td>
                            <td><?php echo $value->nama; ?></td>
                            <td><?php echo $value->kondisi; ?></td>
                            <td><?php echo $value->nama; ?></td>
                            <td><?php echo $value->jumlah; ?></td>
                            <td><?php echo $value->listrik; ?></td>
                            <td><?php echo $value->angin; ?></td>
                            <td><?php echo $value->air; ?></td>
                            <td><?php echo $value->user; ?></td>
                            <td><?php echo $value->p2k3l; ?></td>
                            <td><?php echo $value->safety; ?></td>
                            <td>
                            <td><?php echo $value->tipe; ?></td>
                            <a href="" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                            <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
</div>

<!-- sub isian ke-2 -->
<div class="row">
    <ul>
        <p>II. Submit administration</p>
    </ul><br />

</div>

<!-- form lampiran -->
<div class="row">
    <ul>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <center>
                    <h6 class="m-0 font-weight-bold text-primary">Lampiran</h6>
                </center>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="" width="100%">
                        <thead>
                            <tr class="text-center">
                                <th>Kebijakan LK3</th>
                                <th>Job Safety Analisis</th>
                                <th>Check List Aktivitas Pra-Kerja</th>
                                <th>Lisensi K3 CS</th>
                                <th>Catatan Pekerjaan Khusus</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr class="text-center">
                                <td><a href="<?= base_url('user/pernyataan'); ?>">Add</a></td>
                                <td><a href="<?= base_url('user/identifikasi_aspek'); ?>">Add</a></td>
                                <td><a href="<?= base_url('user/check_list_aktivitas'); ?>">Add</a></td>
                                <td><input type="file"></td>
                                <td><a href="<?= base_url('user/catatan_pekerjaan_khusus'); ?>">Add</a></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </ul>
</div>
<div class="container ml-2 mb-5">
    <div class="d-sm-flex align-items-center justify-content-between">
        <button href="#" type="submit" class="btn btn-secondary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-right"></i>
            </span>
            <span class="text">Back</span>
        </button>
    </div>
    <div class="mt-2">
        <button href="#" type="submit" class="btn btn-success btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-check"></i>
            </span>
            <span class="text">Approve</span>
        </button>

    </div>
</div>