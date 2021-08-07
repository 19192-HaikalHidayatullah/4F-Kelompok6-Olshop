<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/bootstrap.css">

	<style type="text/css">
		body {
			background: url(/img/bgmasuk.jpg);
			background-size: 100%;
			font-family: "calibri light";
			font-size: 1.5em;
		}

		form {
			background: rgba(220, 219, 219, 0.6);
			width: 30%;
			padding: 3%;
			margin-top: 5%;
			margin-left: 35%;
			border-radius: 3%;
			margin-bottom: 5%;
		}

		.form-control {
			background: transparent;
			border-style: none;
			border-bottom-style: solid;
			border-radius: 0;
		}

		.form-control:enabled {
			box-shadow: none;
			border-style: none;
			border-bottom-style: solid;
			background: transparent;
			border-radius: 0;
		}

		.form-control:focus {
			box-shadow: none;
			border-style: none;
			border-bottom-style: solid;
			border-bottom-color: blue;
			background: transparent;
			border-radius: 0;
		}

		.btn {
			color: black;
		}

		.btn:hover,
		.btn:focus {
			color: #AADCF7;
			box-shadow: none;
			border-style: none;
		}

		#opsi {
			font-size: 2em;
			margin-bottom: 5%;
		}
	</style>
</head>

<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<form action="/user/updateprofile/<?= user()->id; ?>" autocomplete="off">
					<label>Username</label>
					<input type="text" name="username" class="form-control" value="<?= user()->username; ?>">
					<label>Nama</label>
					<input type="text" name="Nama_Lengkap" class="form-control" value="<?= user()->Nama_Lengkap; ?>">
					<label>Tempat, Tanggal Lahir</label>
					<input type="text" name="TTL" class="form-control" value="<?= user()->TTL; ?>">
					<label>Alamat</label>
					<input type="text" name="Alamat" class="form-control" value="<?= user()->Alamat; ?>">
					<label>Jenis Kelamin</label>
					<input type="text" name="Jenis_Kelamin" class="form-control" value="<?= user()->Jenis_Kelamin; ?>">
					<label>No. Hp</label>
					<input type="text" name="No_HP" class="form-control" value="<?= user()->No_HP; ?>">
					<div style="text-align: right; padding-top: 10%"><button class="btn btn-primary" type="submit" name="button">Simpan Perubahan</button></div><br>
					<div style="text-align: right; padding-top: 10%"><a class="btn btn-primary" type="submit" name="button" href="/user/index">Kembali</a></div><br>
					<div class="text-center">&copy; Online Tech Shop</div>
				</form>
			</div>
		</div>
	</div>

</body>

</html>