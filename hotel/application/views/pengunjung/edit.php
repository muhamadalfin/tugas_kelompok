<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Form Edit Data Pengunjung</div>
                <div class="card-body">
                <?php
                        if (validation_errors()) {
                            echo '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>';
                        }
                    ?>
                    <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $pengunjung['id_pengunjung'];?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $pengunjung['nama']; ?>">
                            <?= form_error('nama'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nim">Ktp</label>
                            <input type="text" class="form-control" id="ktp" name="ktp" value="<?= $pengunjung['ktp']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Telephone</label>
                            <input type="text" class="form-control" id="tlp" name="tlp" value="<?= $pengunjung['tlp']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $pengunjung['alamat']; ?>">
                        </div>
                        <a href="<?= base_url(); ?>pengunjung" class="btn btn-danger">kembali</a>
                        <button type="submit" name="edit" class="btn btn-primary float-right">Edit</button>
                    </form>
                </div>
        </div>
    </div>
</div>