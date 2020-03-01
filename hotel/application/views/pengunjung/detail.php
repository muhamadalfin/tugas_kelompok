<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Data Pengunjung
                </div>
                    <div class="card-body">
                        <center><h5 class="card-title"><?= $pengunjung['nama']; ?></h5></center>
                        <p class="card=text">
                            <label for=""><b>KTP :</b></label>
                            <?= $pengunjung['ktp']; ?>
                        </p>
                        <p class="card=text">
                            <label for=""><b>Alamat :</b></label>
                            <?= $pengunjung['alamat']; ?>
                        </p>
                        <p class="card=text">
                            <label for=""><b>Telephone :</b></label>
                            <?= $pengunjung['tlp']; ?>
                        </p>
                        <a href="<?= base_url(); ?>pengunjung" class="btn btn-primary">kembali</a>
                    </div>
            </div>
        </div>
    </div>
</div>