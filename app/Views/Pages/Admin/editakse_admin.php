<?= $this->extend('Layout/Template'); ?>

<?= $this->section('konten'); ?>
<div class="row">
    <div class="col-3">
        <div class="sidebar">
            <nav>
                <ul>
                    <li><a href="/admin/index"><img src="/img/admin/user.png" class="icon" /> Lihat Data Pengguna</a></li>
                    <li><a href="/admin/produk"><img src="/img/admin/produk.png" class="icon" /> Kelola Data Produk</a></li>
                    <li><a href="/admin/transaksi"><img src="/img/admin/transaksi.png" class="icon" /> Kelola Data Transaksi</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="col-5">
        <span>Data Aksesoris</span>
        <form class="" action="/admin/updateakse/<?= $aksesoris['Id_Aksesoris']; ?>" method="post">
            <?= csrf_field(); ?>
            <label for="No_Aksesoris">No Aksesoris</label>
            <input type="text" class="form-control <?= ($validation->hasError('No_Aksesoris')) ? 'is-invalid' : ''; ?>" id="No_Aksesoris" name="No_Aksesoris" placeholder="Ketikkan No Aksesoris" value="<?= $aksesoris['No_Aksesoris']; ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('No_Aksesoris'); ?>
            </div>

            <label for="Nama_Aksesoris">Nama Aksesoris</label>
            <input type="text" class="form-control" id="No_Aksesoris" name="Nama_Aksesoris" placeholder="Ketikkan Nama Aksesoris" value="<?= $aksesoris['Nama_Aksesoris']; ?>">

            <label for="Deskripsi">Deskripsi</label>
            <textarea class="form-control" id="Deskripsi" name="Deskripsi" placeholder="Ketikkan Deskripsi"><?= $aksesoris['Deskripsi']; ?></textarea>

            <label for="Harga">Harga</label>
            <input type="number" class="form-control" id="Harga" name="Harga" value="<?= $aksesoris['Harga']; ?>">

            <label for="Gambar">Gambar</label>
            <input type="file" class="form-control" id="Gambar" name="Gambar" value="">
            <br>
            <br>
            <div style="text-align: right;"><button class="btn btn-primary">Update</button></div><br>
        </form>
    </div>
    <?= $this->endSection(); ?>