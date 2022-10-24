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

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="container">
                <center>
                    <h4 class="m-0 font-weight-bold text-primary">Catatan Pekerjaan Khusus</h4>
                </center>
            </div>
        </div>
        <div class="card-body">
            <table class="table align-item-center table-flush" border="0">
                <tr class="text-bold">
                    <td>1. </td>
                    <td>Penggunaan Alat Pelindung Diri
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        Setiap melakukan pekerjaan, setiap pekerja wajib menggunakan alat pelindun diri sesuai dengan potensi bahaya pekerjaan.
                    </td>
                </tr>
                <tr>
                    <td>2. </td>
                    <td>
                        Aturan Pekerjaan
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        - Pekerjaan dilakukan oleh lebih dari 1 orang
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        - Tersedia jalur evakuasi
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        - Melakukan isolasi energi sebelum mulai bekerja

                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        - Sarana komunikasi baik, ada pengawas
                    </td>
                </tr>
                <tr>
                    <td>3. </td>
                    <td>
                        Tata tertib lain
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        - Setiap pekerja wajib menggunakan seragam (menggunakan identitas yang jelas)
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        - Tidak diperbolehkan menyentuh produk dan berbicara kepada operator yang sedang bekerja
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        - Menjaga kebersihan lingkungan di sekitar tempat kerja

                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        - Melokalisir area kerja dan memasang papan informasi pekerjaan
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="d-sm-flex align-items-center mb-4">
        <button href="#" type="submit" onclick="history.back()" class="btn btn-secondary btn-icon-split mr-2">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-right"></i>
            </span>
            <span class="text">Back</span>
        </button>
        <button href="#" type="submit" class="btn btn-success btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-check"></i>
            </span>
            <span class="text">Approve</span>
        </button>

    </div>