<!-- Modal Logout -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabelLogout">Are you sure?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to logout?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

</div>
<!---Container Fluid-->
</div>
<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>copyright &copy; <script>
                    document.write(new Date().getFullYear());
                </script>
                <b><a href="#" target="_blank">AISIN Indonesia</a></b>
            </span>
        </div>
    </div>
</footer>
<!-- Footer -->
</div>
</div>

<!-- Scroll to top -->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Modal Approve -->
<div class="container">
    <div class="modal fade" id="modal-detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="vertical-alignment-helper">`
            <div class="modal-dialog vertical-align-center" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Confirm</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="card-body">
                        <div>
                            <p style="background-color: #fff3cd !important;
                                        padding: 20px;
                                        border-color: #ffecb5;
                                        color: #664d03;
                                        border-radius: 10px;
                                    ">
                                Masukkan username dan password untuk konfirmasi !
                            </p>
                        </div>
                        <div class="">
                            <form class="user" method="POST" action="<?= base_url('user/aproveKontraktor/') . $id_adm; ?>">
                                <!-- <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" id="nama_apv_kontraktor" name="nama_apv_kontraktor" placeholder="Email" value="<?= set_value('email'); ?>"><?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div> -->
                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>"><?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password"><?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>

                                <button type="submit" class="btn btn-success btn-block">
                                    Approve
                                </button>
                                <!-- <a href="" class="btn btn-success">Approve</a> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Approve Pernyataan LK3 -->
<div class="container">
    <div class="modal fade" id="modal-detail-pernyataanlk3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="vertical-alignment-helper">`
            <div class="modal-dialog vertical-align-center" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Confirm</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="card-body">
                        <div>
                            <p style="background-color: #fff3cd !important;
                                        padding: 20px;
                                        border-color: #ffecb5;
                                        color: #664d03;
                                        border-radius: 10px;
                                    ">
                                Masukkan username dan password untuk konfirmasi !
                            </p>
                        </div>
                        <div class="">
                            <form class="user" method="POST" action="<?= base_url('user/aproveKontraktorLk3/') . $id_adm; ?>">
                                <!-- <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" id="nama_apv_kontraktor" name="nama_apv_kontraktor" placeholder="Email" value="<?= set_value('email'); ?>"><?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div> -->
                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>"><?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>

                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password"><?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>

                                <button type="submit" class="btn btn-success btn-block">
                                    Approve
                                </button>
                                <!-- <a href="" class="btn btn-success">Approve</a> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/ruang-admin.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/chart.js/Chart.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/demo/chart-area-demo.js"></script>
<script src="<?= base_url('assets/'); ?>js/form_pekerjanew.js"></script>
</body>

</html>