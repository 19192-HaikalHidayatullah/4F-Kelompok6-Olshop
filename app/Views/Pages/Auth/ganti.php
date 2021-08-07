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
				<p><?= lang('Auth.enterEmailForInstructions') ?></p>
				<form action="<?= route_to('forgot') ?>" method="POST" autocomplete="off">
					<?= csrf_field() ?>
					<div class="form-group">
						<label for="email"><?= lang('Auth.emailAddress') ?></label>
						<input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>">
						<div class="invalid-feedback">
							<?= session('errors.email') ?>
						</div>
					</div>
					<div style="text-align: right; padding-top: 10%"><button class="btn btn-primary" type="submit" name="button">Kirim</button></div><br>
					<div class="text-center">&copy; Online Tech Shop</div>
				</form>
			</div>
		</div>
	</div>

</body>

</html>