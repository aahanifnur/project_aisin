<!-- DataTales Example -->

<div class="col-xl-12 col-lg-7 mb-4">
    <div class="card-header py-3">
        <div class="container">
            <center>
                <h4 class="m-0 font-weight-bold text-primary">IDENTIFIIKASI ASPEK DAN DAMPAK LK3</h4>
                <h4 class="m-0 font-weight-bold text-primary">UNTUK PEKERJAAN KONTRAKTOR</h4>
            </center>
        </div>
    </div>
    <div class="card">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary"></h6>
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
                            <center>POTENSI BAHAYA / DAMPAK YANG MUNGKIN TIMBUL</center>
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
                            <td class="text-center"><?php echo $jsa['k3l'] ?></td>
                            <td><?php echo $jsa['tindakan_pencegahan'] ?></td>
                            <td><?php echo $jsa['keterangan'] ?></td>
                            <td>
                                <a href="<?= base_url('user/form_jsa_edit/'); ?><?= $jsa['id'] ?>" class="btn btn-primary">Edit</a>
                            </td>
                        </tr>
                    <?php endforeach;
                    ?>
                </tbody>
            </table>
        </div>
        <div class="card-footer"></div>
    </div>
</div>


</div>