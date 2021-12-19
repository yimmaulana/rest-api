<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Menu
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="text" name="gambar" class="form-control" id="gambar">
                            <small class="form-text text-danger"><?= form_error('gambar'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" id="keterangan">
                            <small class="form-text text-danger"><?= form_error('keterangan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="crust">Crust</label>
                            <select class="form-control" id="crust" name="crust">
                                <option value="Original Crust">Original Crust</option>
                                <option value="Stuffed Crust">Stuffed Crust</option>
                                <option value="Sausage Crust">Sausage Crust</option>
                                <option value="Double Cheesy Bites">Double Cheesy Bites</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ukuran">Ukuran</label>
                            <select class="form-control" id="ukuran" name="ukuran">
                                <option value="Regular">Regular</option>
                                <option value="Jumbo">Jumbo</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" name="harga" class="form-control" id="harga">
                            <small class="form-text text-danger"><?= form_error('harga'); ?></small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>