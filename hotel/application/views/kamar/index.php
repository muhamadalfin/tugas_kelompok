<div class="container">

<?php if($this->session->flashdata('flash-data')):?>
<div class="row mt-4">
    <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Kamar <strong> berhasil </strong> <?= $this->session->flashdata('flash-data');?>
            <button type="button" class="close" data-dissmiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>
<?php endif;?>

    <div class="row mt-4">
        <div class="col-md-6">
            <a href="<?= base_url();?>kamar/tambah " class="btn btn-primary"> Tambah Data </a>
        </div>
    </div>

<div class="row mt-3">
    <div class="col-md-6">
        <form action="" method="post">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari Data Kamar" name="keyword">
                <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Cari</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-6">
        <h2>Daftar Kamar Hotel</h2>

        <!-- alert -->
        <?php if(empty($kamar)):?>
        <div class="alert alert-danger" role="alert">
            Data Kamar tidak ditemukan
        </div>
        <?php endif; ?>
    <ul class="list-group">
        <?php foreach($kamar as $km):?>
            <li class="list-group-item">
                <?= $km['no_kamar'];?>
                <?= $km['type'];?>
                <a href="<?= base_url();?>kamar/hapus/<?= $km['id_kamar'];?>" 
                class="badge badge-danger float-right"
                onclick="return confirm('Yakin Data ini akan dihapus')">Hapus</a>
                <a href="<?= base_url();?>kamar/edit/<?= $km['id_kamar'];?>"
                class="badge badge-success float-right">Edit</a>
                <a href="<?= base_url();?>kamar/detail/<?= $km['id_kamar'];?>"
                class="badge badge-primary float-right">Detail</a>
                <a href="<?= base_url();?>kamar/booking/<?= $km['id_kamar'];?>"
                class="badge badge-warning float-right">Booking</a>
            </li>
        <?php endforeach; ?>    
    </ul>
    </div>
</div>
</div>