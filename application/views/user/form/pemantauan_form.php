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
                                    <h6 class="m-0 font-weight-bold text-primary">Pemantauan Alat</h6>
                                </div>
                                <div class="card-body">
                                    <form action="">
                                        <div class="table-responsive">
                                            <table class="table table-sm table-bordered">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Company</th>
                                                        <th>Nama Alat</th>
                                                        <th>Kondisi</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="formtambahpekerja">
                                                    <tr>
                                                        <td>
                                                            <select name="id_card" id="id_card" class="form-control mb-2 mt-2">
                                                                <?php foreach ($administrasi as $company) : ?>
                                                                    <option value="<?php echo $company->id ?>" <?php if ($company->id == $nama_pekerja->id) echo 'selected'; ?>>
                                                                        <?php echo $company->administrasi ?>
                                                                    </option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control mb-2 mt-2" id="pekerja" name="pekerja">
                                                        </td>
                                                        <td>
                                                            <select name="id_card" id="id_card" class="form-control mb-2 mt-2">

                                                                <option value="Ya">OK</option>
                                                                <option value="Tidak">NG</option>

                                                            </select>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-info btnaddformpekerja mt-2">
                                                                <i class="fa fa-plus"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <button type="submit" class="btn btn-primary mb-2 mt-3">
                                            Selanjutnya
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>