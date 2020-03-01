<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Data Kamar
                </div>
                    <div class="card-body">
                        <center><h5 class="card-title"><?= $kamar['no_kamar']; ?></h5></center>
                        <p class="card=text">
                            <label for=""><b>Type :</b></label>
                            <?= $kamar['type']; ?>
                        </p>
                        <p class="card=text">
                            <label for=""><b>Harga :</b></label>
                            <?= $kamar['harga']; ?>
                        </p>

                        <a href="<?= base_url(); ?>kamar" class="btn btn-primary">kembali</a>
                    </div>
            </div>
        </div>
    </div>
</div>