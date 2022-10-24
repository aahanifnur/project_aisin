<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="col-xl-12 col-lg-7 mb-4 d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800">High Place Work</h1>
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
        <div class="col-xl-2 col-md-6 mb-4">

            <div class="card h-100">

                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-center text-xs font-weight-bold text-uppercase mb-1">Kontraktor</div>
                            <hr>

                            <?php
                            // printf($result);
                            foreach ($result1 as $data) : ?>
                                <div class="text-center h5 mb-0 font-weight-bold text-gray-800">
                                    <!-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span> -->

                                    <?php if ($data['apv_kontraktor'] == 1) {
                                        echo '<span class="badge badge-success">Approved</span>';
                                    } else {
                                        echo '<span class="badge badge-warning">Pending</span>';
                                    } ?>
                                    <!-- <span class="h6 text-gray-800"></span> -->
                                </div>

                                <hr>
                                <div class="text-center mt-2 mb-0 text-muted text-xs">
                                    <!-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span> -->

                                    <!-- <span class="h6 text-gray-800"></span> -->
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <!-- <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-primary"></i>
                                        </div> -->
                    </div>
                </div>

            </div>
        </div>
        <div class="col-xl-2 col-md-6 mb-4">
            <div class="card h-100">
                <!-- <a data-toggle="modal" data-target="#modal-detail"> -->
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-center text-xs font-weight-bold text-uppercase mb-1">MGR User</div>
                            <hr>

                            <?php
                            // printf($result);
                            foreach ($result1 as $data) : ?>
                                <div class="text-center h5 mb-0 font-weight-bold text-gray-800">
                                    <?php if ($data['apv_mgruser'] == 1) {
                                        echo '<span class="badge badge-success">Approved</span>';
                                    } else {
                                        echo '<span class="badge badge-warning">Pending</span>';
                                    } ?>
                                    <!-- <span class="h6 text-gray-800"></span> -->
                                </div>

                                <hr>
                                <div class="text-center mt-2 mb-0 text-muted text-xs"></div>
                            <?php endforeach; ?>
                            <div class="text-center mt-2 mb-0 text-muted text-xs">
                                <!-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span> -->



                                <span class="h6 text-gray-800"></span>
                            </div>
                        </div>
                        <!-- <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-primary"></i>
                                        </div> -->
                    </div>
                </div>
                <!-- </a> -->
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-2 col-md-6 mb-4">
            <div class="card h-100">
                <!-- <a data-toggle="modal" data-target="#modal-detail"> -->
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-center text-xs font-weight-bold text-uppercase mb-1">MGR Area</div>
                            <hr>

                            <?php
                            // printf($result);
                            foreach ($result1 as $data) : ?>
                                <div class="text-center h5 mb-0 font-weight-bold text-gray-800">
                                    <?php if ($data['apv_mgrarea'] == 1) {
                                        echo '<span class="badge badge-success">Approved</span>';
                                    } else {
                                        echo '<span class="badge badge-warning">Pending</span>';
                                    } ?>
                                    <!-- <span class="h6 text-gray-800"></span> -->
                                </div>

                                <hr>
                                <div class="text-center mt-2 mb-0 text-muted text-xs"></div>
                            <?php endforeach; ?>
                            <div class="text-center mt-2 mb-0 text-muted text-xs">
                                <!-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span> -->



                                <span class="h6 text-gray-800"></span>
                            </div>
                        </div>
                        <!-- <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-primary"></i>
                                        </div> -->
                    </div>
                </div>
                <!-- </a> -->
            </div>
        </div><!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-2 col-md-6 mb-4">
            <div class="card h-100">
                <a data-toggle="modal" data-target="#modal-detail">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col mr-2">
                                <div class="text-center text-xs font-weight-bold text-uppercase mb-1">Safety</div>
                                <hr>
                                <?php
                                // printf($result);
                                foreach ($result1 as $data) : ?>
                                    <div class="text-center h5 mb-0 font-weight-bold text-gray-800">
                                        <?php if ($data['apv_safety'] == 1) {
                                            echo '<span class="badge badge-success">Approved</span>';
                                        } else {
                                            echo '<span class="badge badge-warning">Pending</span>';
                                        } ?>
                                        <!-- <span class="h6 text-gray-800"></span> -->
                                    </div>

                                    <hr>
                                    <div class="text-center mt-2 mb-0 text-muted text-xs"></div>
                                <?php endforeach; ?>
                                <div class="text-center mt-2 mb-0 text-muted text-xs">
                                    <!-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span> -->


                                    <span class="h6 text-gray-800"></span>
                                </div>
                            </div>
                            <!-- <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-primary"></i>
                                        </div> -->
                        </div>
                    </div>
                </a>
            </div>
        </div><!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-2 col-md-6 mb-4">
            <div class="card h-100">
                <!-- <a data-toggle="modal" data-target="#modal-detail"> -->
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-center text-xs font-weight-bold text-uppercase mb-1">P2K3L</div>
                            <hr>

                            <?php
                            // printf($result);
                            foreach ($result1 as $data) : ?>
                                <div class="text-center h5 mb-0 font-weight-bold text-gray-800">
                                    <?php if ($data['apv_p2k3l'] == 1) {
                                        echo '<span class="badge badge-success">Approved</span>';
                                    } else {
                                        echo '<span class="badge badge-warning">Pending</span>';
                                    } ?>
                                    <!-- <span class="h6 text-gray-800"></span> -->
                                </div>

                                <hr>
                                <div class="text-center mt-2 mb-0 text-muted text-xs"></div>
                            <?php endforeach; ?>
                            <div class="text-center mt-2 mb-0 text-muted text-xs">
                                <!-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span> -->



                                <span class="h6 text-gray-800"></span>
                            </div>
                        </div>
                        <!-- <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-primary"></i>
                                        </div> -->
                    </div>
                </div>
                <!-- </a> -->
            </div>
        </div><!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-2 col-md-6 mb-4">
            <div class="card h-100">
                <!-- <a data-toggle="modal" data-target="#modal-detail"> -->
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-center text-xs font-weight-bold text-uppercase mb-1">GM</div>
                            <hr>

                            <?php
                            // printf($result);
                            foreach ($result1 as $data) : ?>
                                <div class="text-center h5 mb-0 font-weight-bold text-gray-800">
                                    <?php if ($data['apv_gm'] == 1) {
                                        echo '<span class="badge badge-success">Approved</span>';
                                    } else {
                                        echo '<span class="badge badge-warning">Pending</span>';
                                    } ?>
                                    <!-- <span class="h6 text-gray-800"></span> -->
                                </div>

                                <hr>
                                <div class="text-center mt-2 mb-0 text-muted text-xs"></div>
                            <?php endforeach; ?>
                            <div class="text-center mt-2 mb-0 text-muted text-xs">
                                <!-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span> -->


                                <span class="h6 text-gray-800"></span>
                            </div>
                        </div>
                        <!-- <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-primary"></i>
                                        </div> -->
                    </div>
                </div>
                <!-- </a> -->
            </div>
        </div><!-- Earnings (Monthly) Card Example -->

        <div class="col-xl-12 col-lg-7 mb-4 d-sm-flex align-items-center justify-content-between ml-3 mb-4">
            <h4 class="h4 mb-0 text-gray-800">Perpanjangan</h4>
            <!-- <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol> -->
        </div>

        <div class="col-xl-2 col-md-6 mb-4">
            <div class="card h-100">
                <!-- <a data-toggle="modal" data-target=""> -->
                <div class="card-body" disabled>
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-center text-xs font-weight-bold text-uppercase mb-1">Safety/P2K3L</div>
                            <hr>

                            <?php
                            // printf($result);
                            foreach ($result1 as $data) : ?>
                                <div class="text-center h5 mb-0 font-weight-bold text-gray-800">
                                    <?php if ($data['apv_perpanjangan'] == 1) {
                                        echo '<span class="badge badge-success">Approved</span>';
                                    } else {
                                        echo '<span class="badge badge-white">Not Yet</span>';
                                    } ?>
                                    <!-- <span class="h6 text-gray-800"></span> -->
                                </div>

                                <hr>
                                <div class="text-center mt-2 mb-0 text-muted text-xs"></div>
                            <?php endforeach; ?>
                            <div class="text-center mt-2 mb-0 text-muted text-xs">
                                <!-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span> -->



                                <span class="h6 text-gray-800"></span>
                            </div>
                        </div>
                        <!-- <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-primary"></i>
                                        </div> -->
                    </div>
                </div>

                </a>
            </div>
        </div>

        <div class="col-xl-10 col-lg-7 mb-4">
        </div>
        <div class="col-xl-6 col-lg-7 mb-4">
            <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h1 class="h4 mb-0 text-gray-800">Form IPK</h1>
                    <a class="m-0 float-left btn btn-danger btn-sm" href="<?= base_url('admin/edit_adm'); ?>"> Edit Data <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </div>

        <div class="col-xl-10 col-lg-7">
        </div>
        <div class="col-xl-6 col-lg-7 mb-4">
            <div class="card">
                <div class="card-header py-2.75 d-flex flex-row align-items-center justify-content-between">
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <tbody>
                            <?php
                            // printf($result);
                            foreach ($result1 as $data) : ?>
                                <tr>
                                    <td>No Register</td>
                                    <td>:</td>
                                    <td><?php echo $data['no_registrasi'] ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Nama Kontraktor</td>
                                    <td>:</td>
                                    <td><?php echo $data['company'] ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Nama Pekerjaan</td>
                                    <td>:</td>
                                    <td><?php echo $data['nama_pekerjaan'] ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Lokasi Pekerjaan</td>
                                    <td>:</td>
                                    <td><?php echo $data['lokasi_pekerjaan'] ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Bekerja</td>
                                    <td>:</td>
                                    <td><?php echo $data['tanggal_bekerja'] ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Perpanjangan</td>
                                    <td>:</td>
                                    <td><?php echo $data['perpanjangan'] ?></td>
                                    <td></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>

        <!-- <div class="col-xl-12 col-lg-7 mb-4 d-sm-flex align-items-center justify-content-between ml-3 mb-4">
                            <h1 class="h4 mb-0 text-gray-800">Form IPK</h1> -->
        <!-- <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol> -->
        <!-- </div> -->

        <!-- Invoice Example -->
        <div class="col-xl-10 col-lg-7 mb-4">
        </div>
        <div class="col-xl-6 col-lg-7 mb-4">
            <div class="card">
                <div class="card-header py-2.75 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Nama Pekerja</h6>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="">
                        <thead class="thead-light">
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nama Pekerja</th>
                                <th>Training HPW</th>
                                <th>ID Card</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            // printf($result);
                            foreach ($result_pekerja as $np) : ?>
                                <tr>
                                    <td class="text-center"><?php echo $no++; ?>.</td>
                                    <td><?php echo $np['nama_pekerja'] ?></td>
                                    <td align="center"><?php echo $np['training'] ?></td>
                                    <td align="center"><?php echo $np['id_card'] ?></td>
                                </tr>
                            <?php endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-7 mb-4">
            <div class="card">
                <div class="card-header py-2.75 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">APD yang Digunakan</h6>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="">
                        <thead class="thead-light">
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            // printf($result);
                            foreach ($result_apd as $apd) : ?>
                                <tr>
                                    <td class="text-center"><?php echo $no++; ?>.</td>
                                    <!-- apd -->
                                    <td><?php echo $apd['nama_apd'] ?></td>
                                    <td><?php echo $apd['jumlah_apd'] ?></td>
                                </tr>
                            <?php endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-7 mb-4">
            <div class="card">
                <div class="card-header py-2.75 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Pemantauan Alat Bantu Kerja</h6>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="">
                        <thead class="thead-light">
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kondisi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            // printf($result);
                            foreach ($result_pemantauan as $pm) : ?>
                                <tr>
                                    <td class="text-center"><?php echo $no++; ?>.</td>
                                    <!-- pemantauan -->
                                    <td><?php echo $pm['nama_pemantauan'] ?></td>
                                    <td><?php echo $pm['kondisi_pemantauan'] ?></td>
                                </tr>
                            <?php endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-7 mb-4">
            <div class="card">
                <div class="card-header py-2.75 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Peralatan Kerja</h6>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="">
                        <thead class="thead-light">
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            // printf($result);
                            foreach ($result_alat as $al) : ?>
                                <tr>
                                    <td class="text-center"><?php echo $no++; ?>.</td>
                                    <!-- peralatan -->
                                    <td><?php echo $al['nama_peralatan'] ?></td>
                                    <td><?php echo $al['jumlah_peralatan'] ?></td>
                                </tr>
                            <?php endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-7 mb-4">
            <div class="card">
                <div class="card-header py-2.75 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Sumber Daya yang Digunakan</h6>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="">
                        <thead class="thead-light">
                            <tr class="text-center">
                                <th>No</th>
                                <th>Listrik</th>
                                <th>Angin</th>
                                <th>Air</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            // printf($result);
                            foreach ($result_sda as $sda) : ?>
                                <tr>
                                    <td class="text-center"><?php echo $no++; ?>.</td>
                                    <!-- sumber daya -->
                                    <td><?php echo $sda['listrik'] ?></td>
                                    <td><?php echo $sda['angin'] ?></td>
                                    <td><?php echo $sda['air'] ?></td>
                                </tr>
                            <?php endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-7 mb-4">
            <div class="card">
                <div class="card-header py-2.75 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Pengawasan oleh PT AISIN Indonesia</h6>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="">
                        <thead class="thead-light">
                            <tr class="text-center">
                                <th>No</th>
                                <th>User</th>
                                <th>P2K3L</th>
                                <th>Safety</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            // printf($result);
                            foreach ($result_pengawasan as $pg) : ?>
                                <tr>
                                    <td class="text-center"><?php echo $no++; ?>.</td>
                                    <!-- pengawasan -->
                                    <td><?php echo $pg['user'] ?></td>
                                    <td><?php echo $pg['p2k3l'] ?></td>
                                    <td><?php echo $pg['safety'] ?></td>
                                </tr>
                            <?php endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>

        <div class="col-xl-12 col-lg-7 mb-4 d-sm-flex align-items-center justify-content-between ml-3 mb-4">
            <h1 class="h4 mb-0 text-gray-800">Lampiran</h1>
        </div>

        <!-- Invoice Example -->
        <div class="col-xl-6 col-lg-7 mb-4">
            <div class="card">
                <div class="card-header py-2.75 d-flex flex-row align-items-center justify-content-between">
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">

                            <tr>
                                <th>Lampiran</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($lamp as $dataLampiran) : ?>
                                <tr>
                                    <td><a>Pernyataaan Sosialisasi Kebijakan LK3 & Peraturan</a></td>
                                    <td align="center">

                                    </td>
                                    <td><a href="<?= base_url('user/pernyataan' . $lamp['id']); ?>" class="btn btn-sm btn-primary">Detail</a></td>
                                </tr>
                                <tr>
                                    <td><a>Identifikasi Aspek dan Dampak LK3</a></td>
                                    <td align="center"><span class="badge badge-warning">Shipping</span></td>
                                    <td><a href="<?= base_url('user/jsa'); ?>" class="btn btn-sm btn-primary">Detail</a></td>
                                </tr>
                                <tr>
                                    <td><a>Check List Aktivitas Pra-kerja</a></td>
                                    <td align="center"><span class="badge badge-danger">Pending</span></td>
                                    <td><a href="<?= base_url('user/check_list'); ?>" class="btn btn-sm btn-primary">Detail</a></td>
                                </tr>
                                <tr>
                                    <td><a>Lisensi K3 CS</a></td>
                                    <td align="center"><span class="badge badge-info">Processing</span></td>
                                    <td><a href="<?= base_url('user/upload_file'); ?>" class="btn btn-sm btn-primary">Detail</a></td>
                                </tr>
                                <tr>
                                    <td><a>Catatan Pekerjaan Khusus</a></td>
                                    <td align="center"><span class="badge badge-success">Delivered</span></td>
                                    <td><a href="<?= base_url('user/catatan_pekerjaan_khusus'); ?>" class="btn btn-sm btn-primary">Detail</a></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
    </div>
    <!--Row-->