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
	<div class="col-9">
		<span>Kelola Data Order</span>
		<hr />
		<br>
		<table class="table table-responsive">
			<thead>
				<tr>
					<th>No Transaksi</th>
					<th>No Produk</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td></td>
					<td></td>
					<td>
						<button class="btn btn-primary">Konfirmasi</button>
					</td>
				</tr>
			</tbody>
		</table>
	</div>

	<?= $this->endSection(); ?>