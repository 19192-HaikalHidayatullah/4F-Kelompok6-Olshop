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
        <span>Data Laptop</span>
        <form class="" action="/admin/updatelaptop/<?= $laptop['Id_Laptop']; ?>" method="post">
            <label for="No_Laptop">No Laptop</label>
            <input type="text" class="form-control <?= ($validation->hasError('No_Laptop')) ? 'is-invalid' : ''; ?>" name="No_Laptop" placeholder="Ketikkan No Laptop" value="<?= $laptop['No_Laptop']; ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('No_Laptop'); ?>
            </div>

            <label for="Nama_Laptop">Nama Laptop</label>
            <input type="text" class="form-control" name="Nama_Laptop" placeholder="Ketikkan Nama Laptop" value="<?= $laptop['Nama_Laptop']; ?>">

            <label for="Processor">Processor</label>
            <input type="text" class="form-control" name="Processor" placeholder="Ketikkan Processor" value="<?= $laptop['Processor']; ?>">

            <label for="Display">Display</label>
            <input type="text" class="form-control" name="Display" placeholder="Ketikkan Display" value="<?= $laptop['Display']; ?>">

            <label for="Sistem_Operasi">Sistem Operasi</label>
            <input type="text" class="form-control" name="Sistem_Operasi" placeholder="Ketikkan Sistem Operasi" value="<?= $laptop['Sistem_Operasi']; ?>">
    </div>
    <div class="col-4">
        <div class="" style="padding-top: 63px;">
            <label for="RAM">RAM</label>
            <input type="text" class="form-control" name="RAM" placeholder="Ketikkan RAM" value="<?= $laptop['RAM']; ?>">

            <label for="Hard_Drive">Hard Drive</label>
            <input type="text" class="form-control" name="Hard_Drive" placeholder="Ketikkan Hard Drive" value="<?= $laptop['Hard_Drive']; ?>">

            <label for="Konektivitas">Konektivitas</label>
            <input type="text" class="form-control" name="Konektivitas" placeholder="Ketikkan Konektivitas" value="<?= $laptop['Konektivitas']; ?>">

            <label for="Harga">Harga</label>
            <input type="number" class="form-control" name="Harga" placeholder="Ketikkan Harga" value="<?= $laptop['Harga']; ?>">

            <label for="Gambar">Gambar</label>
            <input type="file" class="form-control" name="Gambar">
            <br>
            <div style="text-align: right;"><button class="btn btn-primary">Update</button></div><br>
            </form>
        </div>
    </div>
    <br>
</div>
<?= $this->endSection(); ?>