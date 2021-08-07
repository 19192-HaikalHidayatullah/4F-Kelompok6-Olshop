<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/bootstrap.css">
	<link rel="stylesheet" href="/css/style7.css">

</head>

<body>
	<div class="bg">
		<div class="col-md-7">
			<div class="daftar" action="" method="post">
				<div class="atas"></div>
				<div1><br>
					<h1>DAFTAR AKUN</h1>
					<div class="notif">
						<?= view('Myth\Auth\Views\_message_block') ?>
					</div>
				</div1>

				<div class="col-md-3" id="satu">
					<form action="<?= route_to('register') ?>" method="POST" enctype="multipart/form-data">
						<?= csrf_field() ?>
						<label for="Nama_Lengkap">Nama Lengkap</label><br>
						<input type="text" class="form-control" id="Nama_Lengkap" name="Nama_Lengkap" placeholder="Masukkan Nama Lengkap" value="<?= old('Nama_Lengkap') ?>">

						<label for="TTL">Tempat, Tanggal Lahir</label><br>
						<input type="text" class="form-control" id="TTL" name="TTL" placeholder="Contoh : Karawang, 26 Mei 2021" value="<?= old('TTL') ?>">

						<label for="Jenis_Kelamin">Jenis Kelamin</label><br>
						<select id="Jenis_Kelamin" name="Jenis_Kelamin" class="form-control">
							<div class="custom-select">
								<option style="display:none">Pilih</option>
								<option>Laki-laki</option>
								<option>Perempuan</option>
							</div>
						</select>

						<label for="Alamat">Alamat</label><br>
						<input type="text" class="form-control" id="Alamat" name="Alamat" placeholder="Masukkan Alamat Lengkap" value="<?= old('Alamat') ?>">
						<br>
				</div>
				<div class="col-md-3" id="dua">
					<label for="Kab_Kota">Kabupaten/Kota</label><br>
					<input type="text" class="form-control" id="Kab_Kota" name="Kab_Kota" placeholder="Masukkan Kota/Kabupaten" value="<?= old('Kab_Kota') ?>">

					<label for="Provinsi">Provinsi</label><br>
					<input type="text" class="form-control" id="Provinsi" name="Provinsi" placeholder="Masukkan Provinsi" value="<?= old('Provinsi') ?>">

					<label for="No_Hp">No. Hp</label><br>
					<input type="number" class="form-control" id="No_HP" name="No_HP" placeholder="Masukkan No Hp" value="<?= old('No_HP') ?>">
				</div>
				<div class="col-md-6" id="tiga">
					<label for="email">Email</label><br>
					<input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" id="email" name="email" placeholder="Masukkan Email" value="<?= old('email') ?>">

					<label for="username">Username</label><br>
					<input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" id="username" name="username" placeholder="Masukkan Username" value="<?= old('username') ?>">

					<label for="password">Password</label><br>
					<input type="password" class="form-control" id="" name="password" placeholder="Masukkan Password" value="" autocomplete="off">


					<br><br><br>
					Punya akun? <a href="<?= route_to('login') ?>">Masuk</a>
					<div class="bawah" style="text-align: right;"><br><button class="btn btn-primary" type="submit">Daftar</button></div>

				</div>
				</form>
			</div>
		</div>
</body>

</html>