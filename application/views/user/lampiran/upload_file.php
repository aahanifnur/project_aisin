<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="col-xl-4 mb-3 mb-4">
        <h1 class="h3 mb-0 text-gray-800">Upload file</h1>
        <!-- <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">Home</a></li>
                            <li class="breadcrumb-item">Pages</li>
                            <li class="breadcrumb-item active" aria-current="page">Blank Page</li>
                        </ol> -->
    </div>

    <div class="col-xl-12 mb-3">
        <!-- <img src="img/think.svg" style="max-height: 90px"> -->
        <div class="card">

            <div class="card-body">
                <center>
                    <?php foreach ($lisensi_file as $data) : ?>
                        <img src="<?= base_url('assets/img/lisensi/' . $data->lisensi_file); ?>" alt="">
                    <?php endforeach; ?>
                </center>
            </div>

            <div class="card-body">
                <form action="<?= base_url('user/upload'); ?>" method="POST" enctype="multipart/form-data">

                    <!-- <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="form-control custom-file-input" id="" accept="image/png, image/jpeg, image/jpg, image/gif">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div> -->

                    <div class="form-group">
                        <input type="file" class="form-control" accept="image/png, image/jpeg, image/jpg, image/gif" name="lisensi_file" required>
                        <small id="emailHelp" class="form-text text-muted">Upload gambar lisensi di sini ! <i>(*can only upload jpg, jpeg and png)</i></small>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

        <!-- button -->
        <div class="d-sm-flex align-items-center mb-4 mt-3">
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
        <!-- end button -->
    </div>