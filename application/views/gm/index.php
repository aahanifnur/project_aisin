            <!-- Container Fluid-->
            <div class="container-fluid" id="container-wrapper">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Izin Pekerjaan Khusus</h1>
                    <!-- <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol> -->
                </div>

                <!-- DataTales Example -->
                <!-- <div class="container">
                        <div class="">
                            <div class="container">
                                <center>
                                    <h4 class="m-0 font-weight-bold text-primary">IZIN PEKERJAAN KHUSUS</h4>
                                </center>
                            </div>
                        </div>
                    </div> -->

                <div class="">
                    <div class="card">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Data Table</h6>
                            <a class="m-0 float-right btn btn-danger btn-sm" href="<?= base_url('ExportExcel/export'); ?>">Export <i class="fas fa-chevron-right"></i></a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="thead-light">
                                    <tr class="text-center">
                                        <th rowspan="2">No</th>
                                        <th rowspan="2">No Registrasi</th>
                                        <th rowspan="2">Company</th>
                                        <th rowspan="2">Pekerjaan (Kode Pekerjaan - Pekerjaan) HPW-HW-CS-G</th>
                                        <th colspan="2">Area Pekerjaan</th>
                                        <th colspan="3">Tanggal Pekerjaan</th>
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

                                    <?php $no = 1;
                                    foreach ($result as $data) :
                                    ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['no_registrasi']; ?></td>
                                            <td><?php echo $data['company']; ?></td> <!-- nama kontraktor -->
                                            <td><?php echo $data['jenis_pekerjaan'];
                                                echo ' - ';
                                                echo $data['nama_pekerjaan']; ?></td>
                                            <td><?php echo $data['lokasi_pekerjaan']; ?></td>
                                            <td><?php echo $data['dept_pekerjaan']; ?></td>
                                            <td><?php echo $data['tanggal_bekerja']; ?></td>
                                            <td>ini blom jadi</td>
                                            <td><?php echo $data['perpanjangan']; ?></td>
                                            <td><?php echo $data['pic_user']; ?></td>
                                            <td><?php echo $data['dept_user']; ?></td>
                                            <td><span class="badge badge-warning">Pending</span></td>
                                            <td><a href="<?= base_url('gm/detail/' . $data['id']); ?>" class="m-0 float-right btn btn-primary btn-sm mr-2">Detail</a>
                                            <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <br />

                </div>

                <div class="d-sm-flex align-items-center justify-content-between mb-4">

                    <table>
                        <tr>
                            <td>CP :</td>
                            <td>- PIC IPK ( Angga - 081331184147 )</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>- PIC IPK ( Na'im - 081210104342 )</td>
                        </tr>
                    </table>
                    <br /><br />


                </div>

                <!--Row-->