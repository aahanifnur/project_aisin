<!-- Container Fluid-->
<div class="container-fluid" id="">
    <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
            <a class="m-0 float-right btn btn-danger btn-sm" href="<?= base_url('admin/buat_akun'); ?>">Create Account <i class="fas fa-chevron-right"></i></a>
        </div>
        <div class="col-lg-12 mt-3 mb-2">
            <div class="text-primary">
                <h5>Management Akun</h5>
            </div>
            <p class="text-muted">Silakan buat akun sesuai dengan User Role, dan ubah sandi secara berkala</p>
            <p style="background-color: #fff3cd !important;
  padding: 20px;
  border-color: #ffecb5;
  color: #664d03;
  border-radius: 15px;
">
                <b>
                    Keterangan Role ID : </b>
                <br>
                <br>
                <b>1</b> = Admin
                <br>
                <b>2</b> = P2K3L
                <br>
                <b>3</b> = GM
                <br>
                <b>4</b> = Kontraktor
                <br>
                <b>5</b> = Manager User
                <br>
                <b>6</b> = Manager Area
                <br><br>
                <b>*Tekan edit untuk mengganti password user</b>
            </p>
        </div>
        <div class="container">
            <?= $this->session->flashdata('message') ?>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr class="text-center">
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Image</th>
                        <th>Role ID</th>
                        <th>Status</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($akun as $data) :
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data['name']; ?></td>
                            <td><?php echo $data['email']; ?></td> <!-- nama kontraktor -->
                            <td align="center"><img src="<?= base_url('assets/img/profile/') . $data['image']; ?>" width="70px" height="80px"></td>
                            <td align="center"><?php echo $data['role_id']; ?></td>
                            <td align="center"><?php if ($data['is_active'] == 1) {
                                                    echo '<span class="badge badge-success">Active</span>';
                                                } else {
                                                    echo '<span class="badge badge-danger">Not Active</span>';
                                                } ?></td>
                            <td><?php echo date('d F Y', $data['date_created']); ?></td>
                            <td><a href="<?= base_url('admin/edit_akun/' . $data['id']); ?>" class="m-0 float-right btn btn-primary btn-sm mr-2">Edit</a></td>
                        <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <div class="card-header py-2 d-flex flex-row align-items-center justify-content-between">
        </div>
    </div>
</div>
</div>
<!--Row-->