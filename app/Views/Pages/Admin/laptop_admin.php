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
							<a class="nav-link active" aria-current="page" href="/admin/laptop">Laptop</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/admin/hp">Hp</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<span>Data Laptop</span>
		<form class="" action="/admin/savelaptop" method="post" enctype="multipart/form-data">
			<label for="No_Laptop">No Laptop</label>
			<input type="text" class="form-control <?= ($validation->hasError('No_Laptop')) ? 'is-invalid' : ''; ?>" name="No_Laptop" placeholder="Ketikkan No Laptop">
			<div class="invalid-feedback">
				<?= $validation->getError('No_Laptop'); ?>
			</div>

			<label for="Nama_Laptop">Nama Laptop</label>
			<input type="text" class="form-control" name="Nama_Laptop" placeholder="Ketikkan Nama Laptop">

			<label for="Processor">Processor</label>
			<input type="text" class="form-control" name="Processor" placeholder="Ketikkan Processor">

			<label for="Display">Display</label>
			<input type="text" class="form-control" name="Display" placeholder="Ketikkan Display">

			<label for="Sistem_Operasi">Sistem Operasi</label>
			<input type="text" class="form-control" name="Sistem_Operasi" placeholder="Ketikkan Sistem Operasi">
	</div>
	<div class="col-4">
		<div class="dua">
			<label for="RAM">RAM</label>
			<input type="text" class="form-control" name="RAM" placeholder="Ketikkan RAM">

			<label for="Hard_Drive">Hard Drive</label>
			<input type="text" class="form-control" name="Hard_Drive" placeholder="Ketikkan Hard Drive">

			<label for="Konektivitas">Konektivitas</label>
			<input type="text" class="form-control" name="Konektivitas" placeholder="Ketikkan Konektivitas">

			<label for="Harga">Harga</label>
			<input type="number" class="form-control" name="Harga" placeholder="Ketikkan Harga">

			<label for="Gambar">Gambar</label>
			<input type="file" class="form-control" name="Gambar">
			<br>
			<div style="text-align: right;"><button class="btn btn-primary">Simpan</button></div><br>
			</form>
		</div>
	</div>
	<br>
</div>
<?= $this->endSection(); ?>