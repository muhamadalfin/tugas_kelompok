<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Form Tambah Data Pengunjung</div>
                <div class="card-body">
                <?php
                        if (validation_errors()) {
                            echo '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>';
                        }
                    ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                            <?= form_error('nama'); ?>
                        </div>
                        <div class="form-group">
                            <label for="ktp">KTP</label>
                            <input type="text" class="form-control" id="ktp" name="ktp">
                        </div>
                        <div class="form-group">
                            <label for="tlp">Telephone</label>
                            <input type="text" class="form-control" id="tlp" name="tlp">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat">
                        </div>
                        <a href="<?= base_url(); ?>pengunjung" class="btn btn-danger">kembali</a>
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </form>
                </div>
        </div>
    </div>
</div>