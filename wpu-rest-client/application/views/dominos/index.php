<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <!-- <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data menu <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div> -->
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>dominos/tambah" class="btn btn-primary">Tambah
                Data Menu</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data Menu.." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Menu</h3>
            <?php if (empty($dominos)) : ?>
                <div class="alert alert-danger" role="alert">
                data menu tidak ditemukan.
                </div>
            <?php endif; ?>
            <!-- <ul class="list-group">
                <?php foreach ($dominos as $m) : ?>
                <li class="list-group-item">
                    <?= $m['nama']; ?>
                    <a href="<?= base_url(); ?>dominos/hapus/<?= $m['id']; ?>"
                        class="badge badge-danger float-right tombol-hapus">hapus</a>
                    <a href="<?= base_url(); ?>dominos/ubah/<?= $m['id']; ?>"
                        class="badge badge-success float-right">ubah</a>
                    <a href="<?= base_url(); ?>dominos/detail/<?= $m['id']; ?>"
                        class="badge badge-primary float-right">detail</a>
                </li>
                <?php endforeach; ?>
            </ul> -->
        </div>
    </div>

</div>

<div class="container">
<div class="row">
          <?php foreach($dominos as $row) : ?>
            <div class="col-md-4">
              <div class="card" mb-3>
                <img src="<?= $row["gambar"]; ?>" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title"><?= $row["nama"];?></h5>
                  <h5 class="card-title"><?=$row["harga"];?></h5>
                  <a href="<?= base_url(); ?>dominos/hapus/<?= $row['id']; ?>"
                        class="badge badge-danger float-right tombol-hapus">hapus</a>
                    <a href="<?= base_url(); ?>dominos/ubah/<?= $row['id']; ?>"
                        class="badge badge-success float-right">ubah</a>
                    <a href="<?= base_url(); ?>dominos/detail/<?= $row['id']; ?>"
                        class="badge badge-primary float-right">detail</a>
                </div>
              </div>
            </div>
              <?php endforeach;?>
        </div>
</div>