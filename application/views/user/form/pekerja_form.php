<!-- Container Fluid-->
<script>
  var BASE_URL = "<?= base_url(); ?>";
</script>
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
                  <h6 class="m-0 font-weight-bold text-primary">Pekerja</h6>
                </div>
                <div class="card-body">
                  <form id="addformpekerja" action="<?= base_url('User/simpanDataPekerja'); ?>" method="POST">

                    <div class="table-responsive">
                      <table class="table table-sm table-bordered">
                        <thead class="thead-light">
                          <tr>
                            <!-- Datamu berantakan alure, iyo ik mas, rencana meh tak management pas nk  wis bar -->
                            <th>Nama Pekerja</th>
                            <th>ID Card</th>
                            <th>Training</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody id="formtambahpekerja">
                          <tr>

                            <td>
                              <input type="text" class="form-control mb-2 mt-2" id="nama_pekerja" name="nama_pekerja">
                            </td>
                            <td>
                              <select name="training" id="training" class="form-control mb-2 mt-2">

                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>

                              </select>

                            </td>
                            <td>
                              <select name="id_card" id="id_card" class="form-control mb-2 mt-2">

                                <option value="Ya">Ada</option>
                                <option value="Tidak">Tidak</option>

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
                    <!-- id="addbtnpekerja" -->
                    <button type="submit" class="btn btn-primary mb-2 mt-3 addbtnpekerja">
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