<div class="shadow-lg p-5 bg-white rounded">
    <h2 style="text-align:center">Form For Guest</h2>
    <h5 style="text-align:center">Fill Form First, Before Book Room</h5>
    <br><br>
    <form action="<?php echo base_url('kamar/booking'); ?>" method="post">
        <div class="form-row">
            <div class="col-md-6 mb-3">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="name" placeholder="Nama" value="" required>
            <div class="valid-tooltip">
                Looks good!
            </div>
            </div>
            <div class="col-md-3 mb-3">
            <label for="ktp">KTP/Nomer Identitas</label>
            <input type="text" class="form-control" id="ktp" placeholder="KTP" value="" required>
            <div class="valid-tooltip">
                Looks good!
            </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" placeholder="Address" required>
            <div class="invalid-tooltip">
                Please provide a valid address.
            </div>
            </div>
            <div class="col-md-3 mb-3">
            <label for="tlp">Nomer Telephone</label>
            <input type="text" class="form-control" id="tlp" placeholder="Nomer Telephone" required>
            <div class="invalid-tooltip">
                Please provide a valid phone number.
            </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
            <label for="id_kamar">Kamar</label>
            <input type="text" class="form-control" id="id_kamar" placeholder="kamar" disabled value ="<?= $kamar['no_kamar']?>" required>
            </div>
            <div class="col-md-3 mb-3">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" id="harga" placeholder="harga" disabled value="<?= $kamar['harga']?>" required>
            <div class="invalid-tooltip">
                Please provide a valid phone number.
            </div>
            </div>
        </div>
        <button class="btn btn-danger" type="reset">Reset</button>
        <button class="btn btn-primary" type="submit">Booking</button>
    </form>
</div>