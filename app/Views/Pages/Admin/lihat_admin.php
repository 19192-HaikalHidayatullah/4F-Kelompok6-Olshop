<?= $this->extend('Layout/Template'); ?>

<?= $this->section('konten'); ?>

<div class="row">
	<div class="col-3">
		<div class="sidebar">
			<nav>
				<ul>
					<form action="" method="post">
						<li><input type="text" id="cari" class="form-control" name="cari" placeholder="Cari Pengguna"></li>
					</form>
					<li><a href="/admin/index"><img src="/img/admin/user.png" class="icon" /> Lihat Data Pengguna</a></li>
					<li><a href="/admin/produk"><img src="/img/admin/produk.png" class="icon" /> Kelola Data Produk</a></li>
					<li><a href="/admin/transaksi"><img src="/img/admin/transaksi.png" class="icon" /> Kelola Data Transaksi</a></li>
				</ul>
			</nav>
		</div>
	</div>
	<div class="col-9">
		<span>Lihat Data Pengguna</span>
		<hr />
		<br>
		<table class="table">
			<thead>
				<tr>
					<th>Username</th>
					<th>Nama</th>
					<th>Jenis Kelamin</th>
					<th>Alamat</th>
					<th>Tempat, Tanggal Lahir</th>
					<th>Kab/Kota</th>
					<th>Provinsi</th>
					<th>No HP</th>

				</tr>
			</thead>
			<tbody>
				<?php foreach ($Pengguna as $p) : ?>
					<tr>
						<td><?= $p['username']; ?></td>
						<td><?= $p['Nama_Lengkap']; ?></td>
						<td><?= $p['TTL']; ?></td>
						<td><?= $p['Jenis_Kelamin']; ?></td>
						<td><?= $p['Alamat']; ?></td>
						<td><?= $p['Kab_Kota']; ?></td>
						<td><?= $p['Provinsi']; ?></td>
						<td><?= $p['No_HP']; ?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	<?= $this->endSection(); ?>