<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="container">
            <center>
                <h4 class="m-0 font-weight-bold text-primary">IZIN PEKERJAAN KHUSUS</h4>
            </center>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive p-3">
            <table border="1" class="table align-items-center table-flush" id="">
                <thead class="thead-light">
                    <tr class="text-center">
                        <th rowspan="2">No</th>
                        <th rowspan="2">Company</th>
                        <th rowspan="2">No Registrasi</th>
                        <th rowspan="2">Pekerjaan (Kode Pekerjaan - Pekerjaan) HPW-HW-CS-G</th>
                        <th colspan="2">Area Pekerjaan</th>
                        <th colspan="3">Tanggal PPekerjaan</th>
                        <th colspan="2">User</th>
                        <th rowspan="2" colspan="2">Status</th>
                    </tr>
                    <tr class="text-center">
                        <th>Lokasi</th>
                        <th>Dept.</th>
                        <th>Mulai</th>
                        <th>Selesai</th>
                        <th>Perpanjangan</th>
                        <th>PIC</th>
                        <th>Dept.</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $value) { ?>
                        <tr class="text-center">
                            <td><?php echo $value->id; ?></td>
                            <td><?php echo $value->nama; ?></td>
                            <td><?php echo $value->tipe; ?></td>
                            <td><?php echo $value->deskripsi; ?></td>
                            <td><?php echo $value->tanggal_kejadian; ?></td>
                            <td>
                                <a href="" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<div class="row">
    <ul>
        <table>
            <tr>
                <td>CP :</td>
                <td>- PIC IPK (Rochma - 081331184147)</td>
            </tr>
            <tr>
                <td></td>
                <td>- PIC IPK (Rochma - 081210104342)</td>
            </tr>
        </table>
    </ul><br /><br />


</div>
<!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="dropdown dropright">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
            Buat IPK
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">HIGH PLACE WORK</a>
            <a class="dropdown-item" href="#">HOT WORK</a>
            <a class="dropdown-item" href="#">CONFINED SPACE</a>
            <a class="dropdown-item" href="#">GENERAL</a>
        </div>
    </div>
</div> -->