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
                                    <h6 class="m-0 font-weight-bold text-primary">Administration</h6>
                                </div>
                                <div class="card-body">
                                    <form action="<?= base_url('User/simpanDataAdm'); ?>" method="POST">
                                        <div class="form-group">
                                            <label>No Registrasi</label>
                                            <p style="background-color: #fff3cd !important;
  padding: 10px;
  border-radius: 5px;
  border-color: #ffecb5;
  color: #664d03;">Nomor Registasi diisi oleh pihak Safety
                                            </p>
                                            <input class="form-control" id="noreg" name="noreg" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Kontraktor</label>
                                            <input class="form-control" id="kontraktor" name="kontraktor">
                                        </div>
                                        <div class=" form-group row">
                                            <div class="col-sm-3 mb-3 mb-sm-0">
                                                <label>Kode Pekerjaan</label>
                                                <select class="form-control mb-2" id="kode_p" name="kode_p">
                                                    <option>HPW</option>
                                                    <option>CS</option>
                                                    <option>HW</option>
                                                    <option>G</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-9">
                                                <label for="">Nama Pekerjaan</label>

                                                <input class="form-control mb-3" id="pekerjaan" name="pekerjaan">
                                            </div>
                                        </div>
                                        <div class=" form-group row">
                                            <div class="col-sm-3 mb-3 mb-sm-0">
                                                <label>Dept Area</label>
                                                <select class="form-control mb-2" id="dept_l" name="dept_l">
                                                    <option>GAF</option>
                                                    <option>BPR</option>
                                                    <option>ERP</option>
                                                    <option>MSU</option>
                                                    <option>MTE</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-9">
                                                <label for="">Lokasi</label>
                                                <input class="form-control mb-3" id="lokasi" name="lokasi" aria-describedby="emailHelp">
                                            </div>

                                        </div>
                                        <div class=" form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="">Tanggal Mulai</label>
                                                <input type="date" class="form-control" id="s_tanggal" name="s_tanggal" placeholder="Tanggal Mulai">
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="">Tanggal Berakhir</label>
                                                <input type="date" class="form-control" id="e_tanggal" name="e_tanggal" placeholder="Tanggal Berakhir">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Perpanjangan</label>
                                            <input type="date" class="form-control mb-2" id="perpanjangan" name="perpanjangan" disabled>
                                        </div>
                                        <div class=" form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label for="">User PIC</label>
                                                <input type="" class="form-control" id="u_pic" name="u_pic" placeholder="PIC">
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="">User Dept</label>
                                                <input type="" class="form-control" id="u_dept" name="u_dept" placeholder="Dept">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>CP Mandor</label>
                                            <input type="" class="form-control mb-3" id="cp_mandor" name="cp_mandor" aria-describedby="emailHelp">
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