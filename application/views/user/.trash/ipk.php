<div class="d-sm-flex align-items-center justify-content-between mb-4">

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
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="opel">Opel</option>
                            <option value="audi">Audi</option>
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
    <div>
        <ul class="ml-auto">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <center>
                        <h6 class="m-0 font-weight-bold text-primary">Register</h6>
                    </center>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="" width="100%">
                            <thead>
                                <tr>
                                    <th>Kontraktor</th>
                                    <th>MGR User</th>
                                    <th>MGR Area</th>
                                    <th>Safety</th>
                                    <th>P2K3L</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <td>Name<br /></td>
                                    <td>Position<br /></td>
                                    <td>Office<br /></td>
                                    <td>Age<br /></td>
                                    <td>Start date<br /></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </ul>
    </div>


</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="container">
            <center>
                <h4 class="m-0 font-weight-bold text-primary">IZIN PEKERJAAN KHUSUS</h4>
            </center>
        </div>
    </div>
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
                            <td><?php echo $value->tipe; ?></td>
                            <td><?php echo $value->deskripsi; ?></td>
                            <td><?php echo $value->tanggal_kejadian; ?></td>
                            <td>
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
<div class="row">
    <ul>
        <p>II. Submit administration</p>
    </ul><br />

</div>
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
                            <tr>
                                <th><a href="<?= base_url('auth'); ?>"> Kebijakan LK3</a></th>
                                <th><a href="<?= base_url('auth'); ?>"> Job Safety Analisis</a></th>
                                <th><a href="<?= base_url('auth'); ?>"> Check List Aktivitas Pra-Kerja</a></th>
                                <th><a href="<?= base_url('auth'); ?>"> Lisensi K3 CS</a></th>
                                <th><a href="<?= base_url('auth'); ?>"> Catatan Pekerjaan Khusus</a></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr class="text-center">
                                <td><a href="<?= base_url('auth'); ?>">Add</a></td>
                                <td><a href="<?= base_url('auth'); ?>">Add</a></td>
                                <td><a href="<?= base_url('auth'); ?>">Add</a></td>
                                <td><a href="<?= base_url('auth'); ?>">Upload</a></td>
                                <td><a href="<?= base_url('auth'); ?>">Add</a></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </ul>
</div>