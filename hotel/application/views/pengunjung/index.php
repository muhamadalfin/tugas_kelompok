<div class="container">

<?php if($this->session->flashdata('flash-data')):?>
<div class="row mt-4">
    <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Pengunjung <strong> berhasil </strong> <?= $this->session->flashdata('flash-data');?>
            <button type="button" class="close" data-dissmiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>
<?php endif;?>

    <div class="row mt-4">
        <div class="col-md-6">
            <a href="<?= base_url();?>pengunjung/tambah " class="btn btn-primary"> Tambah Data </a>
        </div>
    </div>

<div class="row mt-3">
    <div class="col-md-6">
        <form action="" method="post">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari Data Pengunjung" name="keyword">
                <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Cari</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-6">
        <h2>Daftar Pengunjung Hotel</h2>

        <!-- alert -->
        <?php if(empty($pengunjung)):?>
        <div class="alert alert-danger" role="alert">
            Data Pengunjung tidak ditemukan
        </div>
        <?php endif; ?>
    <ul class="list-group">
        <?php foreach($pengunjung as $pj):?>
            <li class="list-group-item">
                <?= $pj['nama'];?>
                <a href="<?= base_url();?>pengunjung/hapus/<?= $pj['id_pengunjung'];?>" 
                class="badge badge-danger float-right"
                onclick="return confirm('Yakin Data ini akan dihapus')">Hapus</a>
                <a href="<?= base_url();?>pengunjung/edit/<?= $pj['id_pengunjung'];?>"
                class="badge badge-success float-right">Edit</a>
                <a href="<?= base_url();?>pengunjung/detail/<?= $pj['id_pengunjung'];?>"
                class="badge badge-primary float-right">Detail</a>
            </li>
        <?php endforeach; ?>    
    </ul>
    </div>
</div>
</div>