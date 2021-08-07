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
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container-fluid">
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" aria-current="page" href="/admin/akse">Aksesoris</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" aria-current="page" href="/admin/laptop">Laptop</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="/admin/hp">Hp</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<span>Data HP</span>
		<form class="" action="/admin/savehp" method="post" enctype="multipart/form-data">
			<label for="No_Hp">No HP</label>
			<input type="text" class="form-control <?= ($validation->hasError('No_Hp')) ? 'is-invalid' : ''; ?>" name="No_Hp" placeholder="Ketikkan No HP" value="">
			<div class="invalid-feedback">
				<?= $validation->getError('No_Hp'); ?>
			</div>

			<label for="Nama_Hp">Nama HP</label>
			<input type="text" class="form-control" name="Nama_Hp" placeholder="Ketikkan Nama HP" value="">

			<label for="Rilis">Rilis</label>
			<input type="text" class="form-control" name="Rilis" placeholder="Ketikkan Rilis" value="">

			<label for="Chipset">Chipset</label>
			<input type="text" class="form-control" name="Chipset" placeholder="Ketikkan Chipset" value="">

			<label for="RAM">RAM</label>
			<input type="text" class="form-control" name="RAM" placeholder="Ketikkan RAM" value="">

			<label for="Memori_Internal">Memori Internal</label>
			<input type="text" class="form-control" name="Memori_Internal" placeholder="Ketikkan Memori Internal" value="">
	</div>
	<div class="col-4">
		<div class="dua">
			<label for="Ukuran">Ukuran</label>
			<input type="text" class="form-control" name="Ukuran" placeholder="Ketikkan Ukuran" value="">

			<label for="Kamera_Depan">Kamera Depan</label>
			<input type="text" class="form-control" name="Kamera_Depan" placeholder="Ketikkan Kamera Depan" value="">

			<label for="Kamera_Belakang">Kamera Belakang</label>
			<input type="text" class="form-control" name="Kamera_Belakang" placeholder="Ketikkan Kamera Belakang" value="">

			<label for="SIM">SIM</label>
			<input type="text" class="form-control" name="SIM" placeholder="Ketikkan SIM" value="">

			<label for="Baterai">Baterai</label>
			<input type="text" class="form-control" name="Baterai" placeholder="Ketikkan Baterai" value="">


			<label for="Harga">Harga</label>
			<input type="number" class="form-control" name="Harga" value="">

			<label for="Gambar">Gambar</label>
			<input type="file" class="form-control" name="Gambar" value="">
		</div>
		<br>
		<br>
		<div style="text-align: right;"><button class="btn btn-primary" type="submit" name="button">Simpan</button></div><br>
		</form>
	</div>
	<br>
	<?= $this->endSection(); ?>