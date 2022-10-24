<!-- Container Fluid-->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-xl-8 col-lg-6 col-md-9 col-sm-10">
            <div class="card shadow-sm my-4">
                <div class="card-body p-0">

                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Administrasi -->
                            <div class="card mb-3">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Sumber Daya</h6>
                                </div>
                                <div class="card-body">
                                    <p style="background-color: #fff3cd !important;
  padding: 10px;
  border-radius: 5px;
  border-color: #ffecb5;
  color: #664d03;">Diisi dalam satuan hari! <br>
                                        Contoh : <br>
                                        1 Hari <br>
                                        2 Hari
                                    </p>
                                    <form action="<?= base_url('User/simpanDataPekerja'); ?>" method="POST">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label>Listrik</label>
                                                <input placeholder="Listrik" type="" class="form-control mb-2" id="pekerja" name="pekerja">
                                            </div>
                                            <div class="form-group">
                                                <label>Angin</label>
                                                <input placeholder="Angin" type="" class="form-control mb-2" id="pekerja" name="pekerja">
                                            </div>
                                            <div class="form-group">
                                                <label>Air</label>
                                                <input placeholder="Air" type="" class="form-control mb-2" id="pekerja" name="pekerja">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Selanjutnya</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>