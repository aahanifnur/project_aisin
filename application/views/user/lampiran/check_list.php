<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="col-xl-12 col-lg-7 mb-4 d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800"></h1>
        <!-- <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol> -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <div>
                    <?php
                    echo date('l, d-M-Y');
                    ?>
                </div>
            </li>
        </ol>
    </div>
    <!-- Earnings (Monthly) Card Example -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="container">
                <center>
                    <h4 class="m-0 font-weight-bold text-primary">IDENTIFIIKASI ASPEK DAN DAMPAK LK3</h4>
                    <h4 class="m-0 font-weight-bold text-primary">UNTUK PEKERJAAN KONTRAKTOR</h4>
                </center>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="">
                    <thead>
                        <tr>
                            <th>
                                <center>NO</center>
                            </th>
                            <th>
                                <center>ITEM</center>
                            </th>
                            <th>
                                <center>ACTION</center>
                            </th>
                            <th>
                                <center>KETERANGAN</center>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="<?php base_url('User/SimpanCheckList'); ?>" method="POST">
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-bold"> Rencana Kerja</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="status" id="status">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" name="keterangan" id="keterangan" rows="2"></textarea></td>
                            </tr>
                            <tr>
                                <td class="text-center">1.1</td>
                                <td> Apakah kontraktor sudah memahami mekanisme kerja kontraktor?</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>
                            <tr>
                                <td class="text-center">1.2</td>
                                <td> Sudah diperiksakah kondisi layak dan tidaknya peralatan kerja kontraktor?</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>
                            <tr>
                                <td class="text-center">1.3</td>
                                <td> Sudah dilakukan identifikasi bahaya terhadap pekerjaan yang akan dilakukan?</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>
                            <tr>
                                <td class="text-center">1.4</td>
                                <td> Kontraktor mempunyai prosedur standar terhadap pekerjaan yg beresiko tinggi terhadap lingkungan dan keselamatan?</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>
                            <tr>
                                <td class="text-center">1.5</td>
                                <td> Apakah tersedia peralatan material handling dan prosedur yang mengaturnya</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>
                            <tr>
                                <td class="text-center">1.6</td>
                                <td> Apakah tersedia schedule detail pekerjaan ?</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>
                            <tr>
                                <td class="text-center">1.7</td>
                                <td> Penanggungjawab LK3 kontraktor :</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>
                            <tr>
                                <td class="text-center"></td>
                                <td> a. Adakah PIC / petugas tersebut ?</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>
                            <tr>
                                <td class="text-center"></td>
                                <td> b. Apakah PIC tersebut punya kewenangan untuk menegur / menghentikan pekerjaan ?</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>
                            <tr>
                                <td class="text-center">1.8</td>
                                <td> Kegiatan rutin LK3 :</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>
                            <tr>
                                <td class="text-center"></td>
                                <td> a. Penjelasan LK3 kepada pekerja / karyawan baru ?</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>
                            <tr>
                                <td class="text-center"></td>
                                <td> b. Komunikasi rutin LK3 ?</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>
                            <tr>
                                <td class="text-center"></td>
                                <td> c. Kampanye / promosi tentang LK3 ?</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>
                            <tr>
                                <td class="text-center"></td>
                                <td> d. Meeting rutin LK3 ?</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>

                            <tr>
                                <td class="text-center"></td>
                                <td> e. Inspeksi rutin LK3 ?</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>

                            <tr>
                                <td class="text-center"></td>
                                <td> f. Laporan dan investigasi kejadian kecelakaan kerja / pencemaran lingkungan?</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>

                            <tr>
                                <td class="text-center"></td>
                                <td> g. Pelatihan pemadaman api ?</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>

                            <tr>
                                <td class="text-center">1.9</td>
                                <td> Adakah program pencegahan / pengurangan kecelakaan, penyakit akibat kerja atau pencemaran lingkungan ?</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>

                            <tr>
                                <td class="text-center">1.10</td>
                                <td> Tindakan / sanksi atas kejadian penyimpangan LK3 ?</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td> Potensi Bahaya</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>
                            <tr>
                                <td class="text-center">2.1</td>
                                <td> Mempunyai aturan untuk melakukan identifikasi bahaya ?</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>
                            <tr>
                                <td class="text-center">2.2</td>
                                <td> Mempunyai sistim pengontrolan untuk item-item berikut :</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>
                            <tr>
                                <td class="text-center"></td>
                                <td> a. Tata rumah tangga / house keeping ?</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>
                            <tr>
                                <td class="text-center"></td>
                                <td> b. Pengamanan terhadap mesin / alat ?</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>
                            <tr>
                                <td class="text-center"></td>
                                <td> c. Bahan kimia berbahaya ?</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>
                            <tr>
                                <td class="text-center"></td>
                                <td> d. Bahan-bahan mudah terbakar ?</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>
                            <tr>
                                <td class="text-center"></td>
                                <td> e. Pemeliharaan peralatan ?</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>
                            <tr>
                                <td class="text-center"></td>
                                <td> f. Penggunaan APD ?</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td> Pengarahan Safety pra-kerja</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>
                            <tr>
                                <td class="text-center">3.1</td>
                                <td> Sudah ada rencana Induksi / Pengarahan Safety sebelum bekerja ?</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>
                            <tr>
                                <td class="text-center">3.2</td>
                                <td> Siapa yang terlibat dalam pertemuan tersebut ?</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>
                            <tr>
                                <td class="text-center">4</td>
                                <td> Pelatihan LK3</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>
                            <tr>
                                <td class="text-center">4.1</td>
                                <td> Apakah sudah dilakukan pelatihan / training kepada karyawan / pekerja yang ada terkait LK3 ? Jika ya,</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>
                            <tr>
                                <td class="text-center"></td>
                                <td> a. Sebutkan jenis / nama pelatihan yang dilakukan !</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>
                            <tr>
                                <td class="text-center"></td>
                                <td> b. Adakah file / dokumen sebagai buki pelatihan sudah dilakukan ?</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>
                            <tr>
                                <td class="text-center">5</td>
                                <td>Keadan Darurat</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>
                            <tr>
                                <td class="text-center">5.1</td>
                                <td> Adakah sistim penanganan keadaan darurat ?</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>
                            <tr>
                                <td class="text-center">5.2</td>
                                <td> Semua karyawan / pekerja paham mengenai pengertian keadaan darurat dan tindakan yang harus dilakukan ?</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>
                            <tr>
                                <td class="text-center">5.3</td>
                                <td> Tahukah karyawan / pekerja mengenai pelaporan keadaan darurat ?</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>
                            <tr>
                                <td class="text-center">5.4</td>
                                <td> Adakah karyawan / pekerja yang sudah diberi pelatihan P3K ?</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>
                            <tr>
                                <td class="text-center">5.5</td>
                                <td> Tersediakah perlengkapan P3K yang sesuai ?</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>
                            <tr>
                                <td class="text-center">5.6</td>
                                <td> Sudah adakah perjanjian dengan PT. Aisin Indonesia, ambulance, rumah sakit atau lainnya terkait penanganan P3K dan kelanjutannya ?</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>
                            <tr>
                                <td class="text-center">5.7</td>
                                <td> Adakah contact person / nomor telepon penting yang bisa dihubungi jika terjadi keadaan darurat ?</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>
                            <tr>
                                <td class="text-center">6</td>
                                <td> Komitmen Manajemen Kontraktor</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>
                            <tr>
                                <td class="text-center">6.1</td>
                                <td> Apakah kegiatan-kegiatan LK3 di lapangan dilaporkan kepada pimpinan di kantor pusat ?</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>
                            <tr>
                                <td class="text-center"></td>
                                <td> Jika ya, sebutkan bentuk pelaporan yang dimaksud !</td>
                                <td class="text-center">
                                    <select class="form-control mb-2" name="jenis" id="jenis">
                                        <option value="ya">Ya</option>
                                        <option value="tidak">Tidak</option>
                                        <option value="na">N/A</option>
                                    </select>
                                </td>
                                <td><textarea class="form-control" id="" rows="2"></textarea></td>
                            </tr>
                        </form>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <button href="#" type="submit" onclick="history.back()" class="btn btn-secondary btn-icon-split mr-2">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-right"></i>
            </span>
            <span class="text">Back</span>
        </button>
    </div>
    <!--Row-->