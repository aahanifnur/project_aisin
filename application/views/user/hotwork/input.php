<!-- tanggal -->
<div>
    <?php
    echo date('l, d-M-Y');
    ?>
</div>

<!-- Header judul -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="container">
            <center>
                <h4 class="m-0 font-weight-bold text-primary">FORM IPK</h4>
            </center>
        </div>
    </div>

    <!-- form ipk -->
    <div class="card-body">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class=" ml-2 mt-1">
                <form method="POST" action="">
                    <div calss="form-group">
                        <label>No Registrasi</label>
                        <input type="text" name="kode_peminjam" class="form-control" disabled>
                    </div>
                    <div calss="form-group">
                        <label>Nama Pekerjaan</label>
                        <input type="text" name="nama_peminjam" class="form-control">
                    </div>
                    <div calss="form-group">
                        <label>Lokasi</label><br>
                        <select name="jenis_kelamin">
                            <option value="P">Produksi</option>
                            <option value="L">Office</option>
                        </select>
                    </div>
                    <div class="from-group">
                        <label>Nama Kontraktor</label>
                        <input type="date" name="tanggal_lahir" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Bekerja</label>
                        <textarea name="alamat" id="" cols="155" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Pekerjaan</label>
                        <input type="text" name="pekerjaan" class="form-control">
                    </div>
                </form>

                <!-- button -->
                <div class="ml-auto">
                    <div class="mr-2 mb-2">
                        <button href="#" type="submit" class="btn btn-success btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-check"></i>
                            </span>
                            <span class="text">Save</span>
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Tabel -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive p-3">
            <table border="1" class="table align-items-center table-flush" id="">
                <thead class="thead-light">
                    <tr class="text-center">
                        <th rowspan="2">No</th>
                        <th rowspan="2">Nama Pekerja</th>
                        <th rowspan="2">Training Confined Space</th>
                        <th rowspan="2">ID Card</th>
                        <th colspan="2">APD yang Digunakan</th>
                        <th colspan="2">Pemantauan Alat Bantu Kerja</th>
                        <th colspan="2">Peralatan Kerja</th>
                        <th colspan="3">Sumber Daya yang Digunakan</th>
                        <th colspan="3">Pengawasan oleh PT AISIN INDONESIA</th>
                    </tr>
                    <tr class="text-center">
                        <th>Nama</th>
                        <th>Jumlah</th>
                        <th>Nama</th>
                        <th>Kondisi</th>
                        <th>Nama</th>
                        <th>Jumlah</th>
                        <th>Listrik</th>
                        <th>Angin</th>
                        <th>Air</th>
                        <th>User</th>
                        <th>P2K3L</th>
                        <th>Safety</th>
                    </tr>

                    <tr>
                        <th>1.</th>
                        <th><input type="text"></th>
                        <th><select name="" id="">
                                <option value="">ada</option>
                                <option value="">tidak</option>
                            </select></th>
                        <th><select name="" id="">
                                <option value="">ada</option>
                                <option value="">tidak</option>
                            </select></th>
                        <th<input type="text">
                            </th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                    </tr>
                </thead>

            </table>
        </div>
    </div>

</div>
</div>