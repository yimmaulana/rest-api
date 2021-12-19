<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Menu
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $dominos['nama']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><img src="<?= $dominos['gambar']; ?>"/></h6>
                    <p class="card-text"><?= $dominos['keterangan']; ?></p>
                    <p class="card-text"><?= $dominos['crust']; ?></p>
                    <p class="card-text"><?= $dominos['ukuran']; ?></p>
                    <p class="card-text"><?= $dominos['harga']; ?></p>
                    <a href="<?= base_url(); ?>dominos" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>