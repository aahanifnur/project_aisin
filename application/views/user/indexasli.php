<!-- DataTales Example -->
<div class="container">
    <div class="">
        <div class="container">
            <center>
                <h4 class="m-0 font-weight-bold text-primary">IZIN PEKERJAAN KHUSUS</h4>
            </center>
        </div>
    </div>
</div>
<br />
<div class="">
    <div class="card">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Data Table</h6>
            <a class="m-0 float-right btn btn-danger btn-sm" href="#">View More <i class="fas fa-chevron-right"></i></a>
        </div>
        <div class="table-responsive">
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr class="text-center">
                        <th rowspan="2">No</th>
                        <th rowspan="2">Company</th>
                        <th rowspan="2">No Registrasi</th>
                        <th rowspan="2">Pekerjaan (Kode Pekerjaan - Pekerjaan) HPW-HW-CS-G</th>
                        <th colspan="2">Area Pekerjaan</th>
                        <th colspan="3">Tanggal PPekerjaan</th>
                        <th colspan="2">User</th>
                        <th colspan="2">Status</th>
                    </tr>
                    <tr class="text-center">
                        <th>Lokasi</th>
                        <th>Dept.</th>
                        <th>Mulai</th>
                        <th>Selesai</th>
                        <th>Perpanjangan</th>
                        <th>PIC</th>
                        <th>Dept.</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="#">RA0449</a></td>
                        <td>Udin Wayang</td>
                        <td>Nasi Padang</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><span class="badge badge-success">Delivered</span></td>
                        <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                    </tr>
                    <tr>
                        <td><a href="#">RA5324</a></td>
                        <td>Jaenab Bajigur</td>
                        <td>Gundam 90' Edition</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><span class="badge badge-warning">Shipping</span></td>
                        <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                    </tr>
                    <tr>
                        <td><a href="#">RA8568</a></td>
                        <td>Rivat Mahesa</td>
                        <td>Oblong T-Shirt</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><span class="badge badge-danger">Pending</span></td>
                        <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                    </tr>
                    <tr>
                        <td><a href="#">RA1453</a></td>
                        <td>Indri Junanda</td>
                        <td>Hat Rounded</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><span class="badge badge-info">Processing</span></td>
                        <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                    </tr>
                    <tr>
                        <td><a href="#">RA1998</a></td>
                        <td>Udin Cilok</td>
                        <td>Baby Powder</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><span class="badge badge-success">Delivered</span></td>
                        <td><a href="#" class="btn btn-sm btn-primary">Detail</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer"></div>
    </div>
</div>

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
                        <th rowspan="2">Company</th>
                        <th rowspan="2">No Registrasi</th>
                        <th rowspan="2">Pekerjaan (Kode Pekerjaan - Pekerjaan) HPW-HW-CS-G</th>
                        <th colspan="2">Area Pekerjaan</th>
                        <th colspan="3">Tanggal PPekerjaan</th>
                        <th colspan="2">User</th>
                        <th rowspan="2" colspan="2">Status</th>
                    </tr>
                    <tr class="text-center">
                        <th>Lokasi</th>
                        <th>Dept.</th>
                        <th>Mulai</th>
                        <th>Selesai</th>
                        <th>Perpanjangan</th>
                        <th>PIC</th>
                        <th>Dept.</th>
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
<div class="row">
    <ul>
        <table>
            <tr>
                <td>CP :</td>
                <td>- PIC IPK (Rochma - 081331184147)</td>
            </tr>
            <tr>
                <td></td>
                <td>- PIC IPK (Rochma - 081210104342)</td>
            </tr>
        </table>
    </ul><br /><br />


</div>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="dropdown dropright">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
            Buat IPK
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="<?= base_url('user/hpw'); ?>">HIGH PLACE WORK</a>
            <a class="dropdown-item" href="<?= base_url('user/hw'); ?>">HOT WORK</a>
            <a class="dropdown-item" href="<?= base_url('user/cs'); ?>">CONFINED SPACE</a>
            <a class="dropdown-item" href="<?= base_url('user/g'); ?>">GENERAL</a>
            <a class="dropdown-item" href="<?= base_url('user/high_place_work'); ?>">GENERAL</a>
        </div>
    </div>
</div>