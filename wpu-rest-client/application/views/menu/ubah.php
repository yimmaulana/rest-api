<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Menu
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $menu['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $menu['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="text" name="gambar" class="form-control" id="gambar" value="<?= $menu['gambar']; ?>">
                            <small class="form-text text-danger"><?= form_error('gambar'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" id="keterangan" value="<?= $menu['keterangan']; ?>">
                            <small class="form-text text-danger"><?= form_error('keterangan'); ?></small>
                        </div>
                        <div class="fo rm-group">
                            <label for="crust">Crust</label>
                            <select class="form-control" id="crust" name="crust">
                                <?php foreach( $crust as $c ) : ?>
                                    <?php if( $c == $menu['crust'] ) : ?>
                                        <option value="<?= $c; ?>" selected><?= $c; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $c; ?>"><?= $c; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="fo rm-group">
                            <label for="ukuran">Ukuran</label>
                            <select class="form-control" id="ukuran" name="ukuran">
                                <?php foreach( $ukuran as $u ) : ?>
                                    <?php if( $u == $menu['ukuran'] ) : ?>
                                        <option value="<?= $u; ?>" selected><?= $u; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $u; ?>"><?= $u; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" name="harga" class="form-control" id="harga" value="<?= $menu['harga']; ?>">
                            <small class="form-text text-danger"><?= form_error('harga'); ?></small>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>