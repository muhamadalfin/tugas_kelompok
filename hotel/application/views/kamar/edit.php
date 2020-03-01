<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Form Edit Data Kamar</div>
                <div class="card-body">
                <?php
                        if (validation_errors()) {
                            echo '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>';
                        }
                    ?>
                    <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $kamar['id_kamar'];?>">
                        <div class="form-group">
                            <label for="no_kamar">No Kamar</label>
                            <input type="text" class="form-control" id="no_kamar" name="no_kamar" value="<?= $kamar['no_kamar']; ?>">
                            <?= form_error('no_kamar'); ?>
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            <input type="text" class="form-control" id="type" name="type" value="<?= $kamar['type']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="number" class="form-control" id="harga" name="harga" value="<?= $kamar['harga']; ?>">
                        </div>

                        <a href="<?= base_url(); ?>kamar" class="btn btn-danger">kembali</a>
                        <button type="submit" name="edit" class="btn btn-primary float-right">Edit</button>
                    </form>
                </div>
        </div>
    </div>
</div>