<link rel="stylesheet" type="text/css" href="assets/css/reservasi.css">
<div class="container">

<?php if($this->session->flashdata('flash-data')):?>
<div class="row mt-4">
    <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Reservasi <strong> berhasil </strong> <?= $this->session->flashdata('flash-data');?>
            <button type="button" class="close" data-dissmiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>
<?php endif;?>

    <!--div class="row mt-4">
        <div class="col-md-6">
            <a href="<?= base_url();?>reservasi/tambah " class="btn btn-primary"> Tambah Data </a>
        </div>
    </div-->

<div class="row mt-3">
    <div class="col-md-6">
        <form action="" method="post">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari Data Reservasi" name="keyword">
                <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Cari</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="row mt-3">
    <div class="col-md-6">
        <h2>Daftar Reservasi Hotel</h2>

        <!-- alert -->
        <?php if(empty($reservasi)):?>
        <div class="alert alert-danger" role="alert">
            Data reservasi tidak ditemukan
        </div>
        <?php endif; ?>

        <center><table class="table-reservasi" >
            <tr>
                <th>ID Pengunjung</th>
                <th>ID Kamar</th>
                <th>Tanggal Masuk</th>
                <th>Tanggal Keluar</th>
                <th>Info</th>
            </tr>

            
            <?php foreach ($reservasi as $rs): ?>
            <tr>
                <td align = "center"><?php echo $rs['id_pengunjung']?></td>
                <td align = "center"><?php echo $rs['id_kamar']?></td>
                <td align = "center"><?php echo $rs['tgl_masuk']?></td>
                <td align = "center"><?php echo $rs['tgl_keluar']?></td>
                <td align = "center">
                    <a href="<?= base_url();?>reservasi/hapus/<?= $rs['id_reservasi'];?>" 
                    class="badge badge-danger float-right"
                    onclick="return confirm('Yakin Data ini akan dihapus')">Hapus</a>
                    <a href="<?= base_url();?>reservasi/edit/<?= $rs['id_reservasi'];?>"
                    class="badge badge-success float-right">Edit</a>
                    <a href="<?= base_url();?>reservasi/detail/<?= $rs['id_reservasi'];?>"
                    class="badge badge-primary float-right">Detail</a>
                </td>
            <?php endforeach ?>
            </<tr></center></table>


    <!--ul class="list-group">
        <//?php foreach($reservasi as $rs):?>
            <li class="list-group-item">
                 
                <//?= $rs['id_pengunjung'];?>
                <//?= $rs['id_kamar'];?>
                <a href="<//?= base_url();?>reservasi/hapus/<//?= $rs['id_pengunjung'];?>" 
                class="badge badge-danger float-right"
                onclick="return confirm('Yakin Data ini akan dihapus')">Hapus</a>
                <a href="<//?= base_url();?>reservasi/edit/<//?= $rs['id_pengunjung'];?>"
                class="badge badge-success float-right">Edit</a>
                <a href="<//?= base_url();?>reservasi/detail/<//?= $rs['id_pengunjung'];?>"
                class="badge badge-primary float-right">Detail</a>
            </li>
        <//?php endforeach; ?>    
    </ul-->
    </div>
</div>
</div>