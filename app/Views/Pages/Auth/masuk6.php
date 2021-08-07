<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/bootstrap.css">
	<link rel="stylesheet" href="/css/style6.css">

</head>

<body>
	<div class="bg">
		<div class="isi">
			<div class="atas"></div>
			<div1><br>
				<h1>MASUK</h1>
				<?= view('Myth\Auth\Views\_message_block') ?>
			</div1>
			<div class="daftar">
				<div class="col-md-* col-sm-*" id="satu">
					<form action="<?= route_to('login') ?>" method="post">
						<?= csrf_field() ?>
						<label for="login">Username</label><br>
						<input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" id="login" name="login" placeholder="Masukkan Username" value="">
						<div class="invalid-feedback">
							<?= session('errors.login') ?>
						</div>

						<label for="password">Password</label><br>
						<input type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" id="password" name="password" placeholder="Masukkan Password" value="">
						<div class="invalid-feedback">
							<?= session('errors.password') ?>
						</div>
						<!-- Lupa password?<a href="<?= route_to('forgot') ?>"> Ubah</a> -->

				</div>
				<?php if ($config->allowRegistration) : ?>
					<div class="col-md-* co" id="dua">
						<br>
						Belum Punya akun? <a href="<?= route_to('register') ?>">Buat Akun</a>
					<?php endif; ?>
					<div id="masuk"><button class="btn btn-primary" type="submit" name="button">Masuk</button></div>
					</form>
					</div>
			</div>
		</div>
</body>

</html>