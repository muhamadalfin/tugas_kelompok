<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Form Edit Data Reservasi</div>
                <div class="card-body">
                <?php
                        if (validation_errors()) {
                            echo '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>';
                        }
                    ?>
                    <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $reservasi['id_reservasi'];?>">
                        <div class="form-group">
                            <label for="id_pengunjung">Id Pengunjung</label>
                            <input type="text" class="form-control" id="id_pengunjung" name="id_pengunjung" value="<?= $reservasi['id_pengunjung']; ?>">
                            <?= form_error('id_pengunjung'); ?>
                        </div>
                        <div class="form-group">
                            <label for="id_kamar">Id Kamar</label>
                            <input type="text" class="form-control" id="id_kamar" name="id_kamar" value="<?= $reservasi['id_kamar']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="tgl1">Tanggal Masuk</label>
                            <input type="date" class="form-control" id="tgl1" name="tgl1" value="<?= $reservasi['tgl_masuk']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="tgl2">Tanggal Keluar</label>
                            <input type="date" class="form-control" id="tgl2" name="tgl2" value="">
                        </div>

                        <a href="<?= base_url(); ?>reservasi" class="btn btn-danger">kembali</a>
                        <button type="submit" name="edit" class="btn btn-primary float-right">Edit</button>
                    </form>
                </div>
        </div>
    </div>
</div>