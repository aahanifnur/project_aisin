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
                    <!-- -->
                    <tr>
                        <td>Pernyataan LK3</td>
                        <td>
                            <?php foreach ($result1 as $data) : ?>
                                <?php if ($data['apv_kontraktor_lk3'] == 1) {
                                    echo '<span class="badge badge-success">Approved</span>';
                                } else {
                                    echo '<span class="badge badge-warning">Pending</span>';
                                } ?>
                            <?php endforeach; ?>
                        </td>
                        <?php foreach ($result as $data) : ?>
                            <td><a href="<?= base_url('user/pernyataan/' . $data['id']); ?>" class="btn btn-sm btn-primary">Detail</a></td>
                        <?php endforeach; ?>
                    </tr>
                    <tr>
                        <td><a>Identifikasi Aspek dan Dampak LK3</a></td>
                        <td>
                            <?php foreach ($attachment as $attach) : ?>
                                <?php if ($attach['apv_kontraktor'] == 1) {
                                    echo '<span class="badge badge-success">Approved</span>';
                                } else {
                                    echo '<span class="badge badge-warning">Pending</span>';
                                } ?>
                            <?php endforeach; ?>
                        </td>
                        <td><a href="<?= base_url('user/jsa'); ?>" class="btn btn-sm btn-primary">Detail</a></td>
                    </tr>
                    <tr>
                        <td><a>Check List Aktivitas Pra-kerja</a></td>
                        <td>
                            <?php foreach ($attachment as $attach) : ?>
                                <?php if ($attach['apv_kontraktor'] == 1) {
                                    echo '<span class="badge badge-success">Approved</span>';
                                } else {
                                    echo '<span class="badge badge-warning">Pending</span>';
                                } ?>
                            <?php endforeach; ?>
                        </td>
                        <td><a href="<?= base_url('user/check_list'); ?>" class="btn btn-sm btn-primary">Detail</a></td>
                    </tr>
                    <tr>
                        <td><a>Lisensi K3 CS</a></td>
                        <td>
                            <?php foreach ($attachment as $attach) : ?>
                                <?php if ($attach['apv_kontraktor'] == 1) {
                                    echo '<span class="badge badge-success">Approved</span>';
                                } else {
                                    echo '<span class="badge badge-warning">Pending</span>';
                                } ?>
                            <?php endforeach; ?>
                        </td>
                        <td><a href="<?= base_url('user/upload_file'); ?>" class="btn btn-sm btn-primary">Detail</a></td>
                    </tr>
                    <tr>
                        <td><a>Catatan Pekerjaan Khusus</a></td>
                        <td>
                            <?php foreach ($attachment as $attach) : ?>
                                <?php if ($attach['apv_kontraktor'] == 1) {
                                    echo '<span class="badge badge-success">Approved</span>';
                                } else {
                                    echo '<span class="badge badge-warning">Pending</span>';
                                } ?>
                            <?php endforeach; ?>
                        </td>
                        <td><a href="<?= base_url('user/catatan_pekerjaan_khusus'); ?>" class="btn btn-sm btn-primary">Detail</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer"></div>
    </div>
</div>
</div>
<!--Row-->