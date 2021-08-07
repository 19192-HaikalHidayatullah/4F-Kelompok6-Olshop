<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/style8.css">
</head>

<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<?= view('Myth\Auth\Views\_message_block') ?>
				<form action="<?= route_to('reset-password') ?>" method="POST" autocomplete="off">
					<?= csrf_field() ?>
					<div class="text-center" id="opsi">GANTI PASSWORD</div>
					<label for="token"><?= lang('Auth.token') ?></label>
					<input type="text" class="form-control <?php if (session('errors.token')) : ?>is-invalid<?php endif ?>" name="token" placeholder="<?= lang('Auth.token') ?>" value="<?= old('token', $token ?? '') ?>">
					<div class="invalid-feedback">
						<?= session('errors.token') ?>
					</div>

					<label for="email"><?= lang('Auth.email') ?></label>
					<input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">>
					<div class="invalid-feedback">
						<?= session('errors.email') ?>
					</div>

					<label for="password"><?= lang('Auth.newPassword') ?></label>
					<input type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password">
					<div class="invalid-feedback">
						<?= session('errors.password') ?>
					</div>

					<label for="pass_confirm"><?= lang('Auth.newPasswordRepeat') ?></label>
					<input type="password" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" name="pass_confirm">
					<div class="invalid-feedback">
						<?= session('errors.pass_confirm') ?>
					</div>
					<div style="text-align: right; padding-top: 10%"><button class="btn btn-primary" type="submit" name="button">Simpan Perubahan</button></div><br>
					<div class="text-center">&copy; Online Tech Shop</div>
				</form>
			</div>
		</div>
	</div>

</body>

</html>