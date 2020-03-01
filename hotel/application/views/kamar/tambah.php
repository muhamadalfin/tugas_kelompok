<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Form Tambah Data Kamar</div>
                <div class="card-body">
                <?php
                        if (validation_errors()) {
                            echo '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>';
                        }
                    ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nokamar">No Kamar</label>
                            <input type="text" class="form-control" id="nokamar" name="nokamar">
                            <?= form_error('no_kamar'); ?>
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            <input type="text" class="form-control" id="type" name="type">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="number" class="form-control" id="harga" name="harga">
                        </div>
                      
                        <a href="<?= base_url(); ?>pengunjung" class="btn btn-danger">kembali</a>
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </form>
                </div>
        </div>
    </div>
</div>