<?= $this->extend('Layout/Template'); ?>

<?= $this->section('konten'); ?>
<div class="row">
    <div class="col-3">
        <div class="sidebar">
            <nav>
                <ul>
                    <form action="" method="post">
                        <li><input type="text" id="cari" class="form-control" name="cari" placeholder="Cari Produk"></li>
                    </form>
                    <li><a href="/admin/index"><img src="/img/admin/user.png" class="icon" /> Lihat Data Pengguna</a></li>
                    <li><a href="/admin/produk"><img src="/img/admin/produk.png" class="icon" /> Kelola Data Produk</a></li>
                    <li><a href="/admin/transaksi"><img src="/img/admin/transaksi.png" class="icon" /> Kelola Data Transaksi</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="col-9">
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif ?>
        <table class="table table-responsive">
            <tbody>
                <tr>
                    <td><span>Data HP</span></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <div style="text-align: right; padding-right: 7%; padding-top: 7%">
                            <a class="btn btn-success" href="/admin/hp">Tambah</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <br>
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>No Hp</th>
                    <th>Nama Hp</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($Hp as $p) : ?>
                    <?php
                    $Harga = $p['Harga'];
                    $Harga_Format = number_format($Harga, 2, ",", ".");
                    ?>
                    <tr>
                        <td><?= $p['No_Hp']; ?></td>
                        <td><?= $p['Nama_Hp']; ?></td>
                        <td>Rp. <?= $Harga_Format; ?></td>
                        <td>
                            <a href="/admin/edithp/<?= $p['Id_Hp']; ?>" class="btn btn-warning">Edit</a>
                            <a href="/admin/deletehp/<?= $p['Id_Hp']; ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <table class="table table-responsive">
            <tbody>
                <tr>
                    <td><span>Data Laptop</span></td>
                    <td></td>
                    <td>
                        <div style="text-align: right; padding-right: 7%; padding-top: 7%">
                            <a class="btn btn-success" href="/admin/laptop">Tambah</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>No Laptop</th>
                    <th>Nama Laptop</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($Laptop as $p) : ?>
                    <?php
                    $Harga = $p['Harga'];
                    $Harga_Format = number_format($Harga, 2, ",", ".");
                    ?>
                    <tr>
                        <td><?= $p['No_Laptop']; ?></td>
                        <td><?= $p['Nama_Laptop']; ?></td>
                        <td>Rp. <?= $Harga_Format; ?></td>
                        <td>
                            <a href="/admin/editlaptop/<?= $p['Id_Laptop']; ?>" class="btn btn-warning">Edit</a>
                            <a href="/admin/deletelaptop/<?= $p['Id_Laptop']; ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <table class="table table-responsive">
            <tbody>
                <tr>
                    <td><span>Data Aksesoris</span></td>
                    <td></td>
                    <td>
                        <div style="text-align: right; padding-right: 7%; padding-top: 7%">
                            <a class="btn btn-success" href="/admin/akse">Tambah</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>No Aksesoris</th>
                    <th>Nama Aksesoris</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($Aksesoris as $p) : ?>
                    <?php
                    $Harga = $p['Harga'];
                    $Harga_Format = number_format($Harga, 2, ",", ".");
                    ?>
                    <tr>
                        <td><?= $p['No_Aksesoris']; ?></td>
                        <td><?= $p['Nama_Aksesoris']; ?></td>
                        <td>Rp. <?= $Harga_Format ?></td>
                        <td>
                            <a href="/admin/editakse/<?= $p['Id_Aksesoris']; ?>" class="btn btn-warning">Edit</a>
                            <a href="/admin/deleteakse/<?= $p['Id_Aksesoris']; ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?= $this->endSection(); ?>