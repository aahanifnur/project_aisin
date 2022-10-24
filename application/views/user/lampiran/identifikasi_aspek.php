<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="col-xl-12 col-lg-7 d-sm-flex align-items-center justify-content-between">
        <h1 class="h4 mb-0 text-gray-800"></h1>
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

    <div class="row mb-1">
        <div class="col-xl-2 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-center text-xs font-weight-bold text-uppercase mb-1">Kontraktor</div>
                            <hr>
                            <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                                <div class="text-center h5 mb-0 font-weight-bold text-gray-800">
                                    <span class="badge badge-success">Approved</span>
                                </div>
                            </a>
                            <hr>
                            <div class="text-center mt-2 mb-0 text-muted text-xs">
                                <!-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span> -->



                                <span class="h6 text-gray-800">Purwoko</span>
                            </div>
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
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-center text-xs font-weight-bold text-uppercase mb-1">Kontraktor</div>
                            <hr>
                            <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                                <div class="text-center h5 mb-0 font-weight-bold text-gray-800">
                                    <span class="badge badge-success">Approved</span>
                                </div>
                            </a>
                            <hr>
                            <div class="text-center mt-2 mb-0 text-muted text-xs">
                                <!-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span> -->



                                <span class="h6 text-gray-800">Purwoko</span>
                            </div>
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
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-center text-xs font-weight-bold text-uppercase mb-1">Kontraktor</div>
                            <hr>
                            <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                                <div class="text-center h5 mb-0 font-weight-bold text-gray-800">
                                    <span class="badge badge-success">Approved</span>
                                </div>
                            </a>
                            <hr>
                            <div class="text-center mt-2 mb-0 text-muted text-xs">
                                <!-- <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span> -->



                                <span class="h6 text-gray-800">Purwoko</span>
                            </div>
                        </div>
                        <!-- <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-primary"></i>
                                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12 col-lg-7 mt-4">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">IDENTIFIIKASI ASPEK DAN DAMPAK LK3 UNTUK PEKERJAAN KONTRAKTOR</h6>
                    <a class="m-0 float-right btn btn-danger btn-sm" href="<?= base_url('user/form_jsa'); ?>">Tambah Data <i class="fas fa-chevron-right"></i></a>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush" id="">
                        <thead class="thead-light">
                            <tr>
                                <th>
                                    <center>NO</center>
                                </th>
                                <th>
                                    <center>URUTAN PROSES / KEGIATAN</center>
                                </th>
                                <th>
                                    <center>POTENSI BAHAYA / ASPEK LINGKUNGAN</center>
                                </th>
                                <th>
                                    <center>DAMPAK YANG MUNGKIN TIMBUL</center>
                                </th>
                                <th>
                                    <center>K3 / L</center>
                                </th>
                                <th>
                                    <center>TINDAKAN PENCEGAHAN YG HARUS DILAKUKAN</center>
                                </th>
                                <th>
                                    <center>KETERANGAN</center>
                                </th>
                                <th>
                                    <center>ACTION</center>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            // printf($result);
                            foreach ($result as $jsa) : ?>
                                <tr>
                                    <td class="text-center"><?php echo $no++; ?></td>
                                    <td><?php echo $jsa['urutan_proses'] ?></td>
                                    <td><?php echo $jsa['potensi_bahaya'] ?></td>
                                    <td><?php echo $jsa['dampak'] ?></td>
                                    <td class="text-center"><?php echo $jsa['k3l'] ?></td>
                                    <td><?php echo $jsa['tindakan_pencegahan'] ?></td>
                                    <td><?php echo $jsa['keterangan'] ?></td>
                                    <td width="140">
                                        <a href="<?= base_url('user/form_jsa_edit/'); ?><?= $jsa['id'] ?>" class="m-0 float-right btn btn-primary btn-sm mr-2 mb-1"><i class="fas fa-edit"></i></a>

                                        <a href="<?= base_url('user/form_jsa_hapus/'); ?><?= $jsa['id'] ?>" class="m-0 float-right btn btn-danger btn-sm mr-2"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach;
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer"></div>
            </div>
            <div class="d-sm-flex align-items-center mb-4">
                <button onclick="history.back()" class="btn btn-secondary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">Back</span>
                </button>
                <button href="#" type="submit" class="btn btn-success btn-icon-split ml-2">
                    <span class="icon text-white-50">
                        <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Approve</span>
                </button>

            </div>
        </div>


    </div>
    <!--Row-->