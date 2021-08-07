<?= $this->extend('Layout/Template1'); ?>

<?= $this->section('konten'); ?>
<div class="row">
	<div class="col-3">
		<div class="sidebar">
			<nav>
				<ul>
					<form action="" method="post">
						<li><input type="text" id="cari" class="form-control" name="cari" placeholder="Cari Transaksi"></li>
					</form>
					<li><a href="/admin/index"><img src="/img/admin/user.png" class="icon" /> Lihat Data Pengguna</a></li>
					<li><a href="/admin/produk"><img src="/img/admin/produk.png" class="icon" /> Kelola Data Produk</a></li>
					<li><a href="/admin/transaksi"><img src="/img/admin/transaksi.png" class="icon" /> Kelola Data Transaksi</a></li>
				</ul>
			</nav>
		</div>
	</div>
	<div class="col-9">
		<span>Kelola Data Transaksi</span>
		<hr />
		<br>
		<table class="table">
			<thead>
				<tr>
					<th>Id Transaksi</th>
					<th>No Produk</th>
					<th>Tanggal Transaksi</th>
					<th>Bukti Pembayaran</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($Transaksi as $p) : ?>
					<tr>
						<td><?= $p['Id_Transaksi']; ?></td>
						<td><?= $p['No_Produk']; ?></td>
						<td><?= $p['Tanggal_Transaksi']; ?></td>
						<td><img src="/img/user/<?= $p['bukti']; ?>" height="200" /></td>
						<td>
							<a href="/admin/deletetransaksi/<?= $p['Id_Transaksi']; ?>" class="btn btn-primary">Konfirmasi</a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>

	<?= $this->endSection(); ?>