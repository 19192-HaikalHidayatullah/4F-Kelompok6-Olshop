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
        <span>Data HP</span>
        <form class="" action="/admin/updatehp/<?= $hp['Id_Hp']; ?>" method="post">

            <label for="No_Hp">No HP</label>
            <input type="text" class="form-control <?= ($validation->hasError('No_Hp')) ? 'is-invalid' : ''; ?>" name="No_Hp" placeholder="Ketikkan No HP" value="<?= $hp['No_Hp']; ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('No_Hp'); ?>
            </div>

            <label for="Nama_Hp">Nama HP</label>
            <input type="text" class="form-control" name="Nama_Hp" placeholder="Ketikkan Nama HP" value="<?= $hp['Nama_Hp']; ?>">

            <label for="Rilis">Rilis</label>
            <input type="text" class="form-control" name="Rilis" placeholder="Ketikkan Rilis" value="<?= $hp['Rilis']; ?>">

            <label for="Chipset">Chipset</label>
            <input type="text" class="form-control" name="Chipset" placeholder="Ketikkan Chipset" value="<?= $hp['Chipset']; ?>">

            <label for="RAM">RAM</label>
            <input type="text" class="form-control" name="RAM" placeholder="Ketikkan RAM" value="<?= $hp['RAM']; ?>">

            <label for="Memori_Internal">Memori Internal</label>
            <input type="text" class="form-control" name="Memori_Internal" placeholder="Ketikkan Memori Internal" value="<?= $hp['Memori_Internal']; ?>">
    </div>
    <div class="col-4">
        <div class="" style="padding-top: 63px;">
            <label for="Ukuran">Ukuran</label>
            <input type="text" class="form-control" name="Ukuran" placeholder="Ketikkan Ukuran" value="<?= $hp['Ukuran']; ?>">

            <label for="Kamera_Depan">Kamera Depan</label>
            <input type="text" class="form-control" name="Kamera_Depan" placeholder="Ketikkan Kamera Depan" value="<?= $hp['Kamera_Depan']; ?>">

            <label for="Kamera_Belakang">Kamera Belakang</label>
            <input type="text" class="form-control" name="Kamera_Belakang" placeholder="Ketikkan Kamera Belakang" value="<?= $hp['Kamera_Belakang']; ?>">

            <label for="SIM">SIM</label>
            <input type="text" class="form-control" name="SIM" placeholder="Ketikkan SIM" value="<?= $hp['SIM']; ?>">

            <label for="Baterai">Baterai</label>
            <input type="text" class="form-control" name="Baterai" placeholder="Ketikkan Baterai" value="<?= $hp['Baterai']; ?>">


            <label for="Harga">Harga</label>
            <input type="number" class="form-control" name="Harga" value="<?= $hp['Harga']; ?>">

            <label for="Gambar">Gambar</label>
            <input type="file" class="form-control" name="Gambar" value="">
        </div>
        <br>
        <br>
        <div style="text-align: right;"><button class="btn btn-primary" type="submit" name="button">Update</button></div><br>
        </form>
    </div>
    <br>
    <?= $this->endSection(); ?>