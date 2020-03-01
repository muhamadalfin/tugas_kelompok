<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Data Reservasi
                </div>
                    <div class="card-body">
                        <center><h5 class="card-title"><?= $reservasi['id_pengunjung']; ?></h5></center>
                        <p class="card=text">
                            <label for=""><b>Id Kamar :</b></label>
                            <?= $reservasi['id_kamar']; ?>
                        </p>
                        <p class="card=text">
                            <label for=""><b>Tanggal Masuk :</b></label>
                            <?= $reservasi['tgl_masuk']; ?>
                        </p>
                        <p class="card=text">
                            <label for=""><b>Tanggal Keluar :</b></label>
                            <?= $reservasi['tgl_keluar']; ?>
                        </p>
                        <a href="<?= base_url(); ?>reservasi" class="btn btn-primary">kembali</a>
                    </div>
            </div>
        </div>
    </div>
</div>