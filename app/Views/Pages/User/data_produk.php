<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="font-awesome.min.css">
	<script type="text/javascript" src="/css/bootstrap.js"></script>
	<style type="text/css">
		div1 {
			background: url(klu.jpg) no-repeat;
			background-size: 100%;
			display: block;
			height: initial;
		}

		div2 {
			background-color: #AADCF7;
			display: block;
			padding: 12px;
			border-radius: 10px;
		}

		div3 {
			display: block;
		}

		.col-xs-3 {
			width: 180px;
			margin-top: -5px;
		}

		p {
			font-size: 14px;
		}

		p2 {
			font-size: 12px;
			line-height: 20px;
		}

		img {
			height: 86px;
			padding: 10px;
		}

		.filter li {
			list-style: none;
			font-size: 12px;
			font-family: arial;
		}

		.menu li {
			list-style: none;
			display: inline;
			position: unset;
		}

		.menu li2 {
			list-style: none;
			display: inline;
			float: left;
			border-left: 140px solid transparent;
			box-shadow: initial;
		}

		.menu a {
			text-decoration: none;
		}

		a:hover {
			text-decoration: none;
			color: black;
		}

		.filter {
			margin-left: 12px;
		}

		.produk {
			background: white;
			height: 260px;
			width: 170px;
			margin-top: 30px;
			border-radius: 10px;
			margin-left: 26px;
			margin-left: -14px;
			border-style: solid;
			border-color: #4591CE;
			position: relative;
			box-shadow: 2px 2px 2px 2px rgba(40, 121, 190, 0.2);
		}

		.produk a {
			color: black;
			text-decoration: none;
		}

		.gambar img {
			width: 160px;
			height: 160px;
			margin-left: 9px;
		}

		.nama_produk p {
			font-family: arial;
			font-size: 15px;
			text-align: center;
			margin-top: 10px;
			margin-top: 10px;
		}

		#cart {
			margin-left: 30px;
			height: 34px;
			width: 34px;
			background: white;
			background-image: url(cart.jpg);
			border-radius: 8px;
			background-size: 100%;
			background-position: center;
		}

		#konfirmasi {
			margin-left: 10px;
			height: 34px;
			width: 34px;
			background: white;
			background-image: url(konfirmasi.jpg);
			border-radius: 8px;
			background-size: 100%;
			background-position: center;
		}

		#daftar {
			margin-left: 260px;
		}

		.form-horizontal>.form-group>.form-control {
			height: 34px;
			width: 500px;
			border-radius: 8px;
		}

		.form-group>.form-control {
			height: 30px;
			width: 190px;
		}

		.bawah {
			background: #1877BD;
			height: 100px;
			width: 100%;
			text-align: center;
			padding-top: 35px;
			margin-top: 30px;
		}

		p3 {
			font-size: 20pt;
			font-family: "calibri light";
			color: white;
		}

		@media (min-width: 1280px) {
			#daftar {
				margin-left: 174px;
			}

			.produk {
				background: white;
				max-height: 340px;
				max-width: 230px;
				margin-top: 30px;
				border-radius: 10px;
				margin-left: 26px;
				margin-left: -5px;
				border-style: solid;
				border-color: #4591CE;
				position: relative;
				box-shadow: 2px 2px 2px 2px rgba(40, 121, 190, 0.2);
			}

			.col-xs-3 {
				max-width: 250px;
				margin-top: -5px;
			}

			.gambar img {
				max-width: 220px;
				max-height: 220px;
				margin-left: 9px;
			}

			p3 {
				font-size: 24pt;
			}

			.bawah {
				padding-top: 25px;
			}

			p {
				font-size: 18pt;
			}

			div2 {
				background-color: #AADCF7;
				display: block;
				padding: 12px;
				border-radius: 10px;
				max-height: 90vh;
			}
		}

		@media (min-width: 1281px) {
			div2 {
				background-color: #AADCF7;
				height: 100vh;
				display: block;
				padding: 12px;
				border-radius: 10px;
			}
		}

		@media (min-width: 1900px) {
			div1 {
				background-size: 100%;
			}

			img {
				height: 120px;
			}

			span {
				font-size: 18pt;
			}

			.filter li,
			p2 {
				font-size: 14pt;
			}

			.form-horizontal>.form-group>.form-control {
				width: 650px;
				height: 43px;
				font-size: 16pt;
			}

			.produk {
				background: white;
				height: 540px;
				width: 430px;
				margin-top: 30px;
				border-radius: 20px;
				margin-left: 76px;
				margin-left: -15px;
				border-style: solid;
				border-color: #4591CE;
				position: relative;
				box-shadow: 2px 2px 2px 2px rgba(40, 121, 190, 0.2);
			}

			.col-xs-3 {
				width: 280px;
				margin-top: -5px;
			}

			.gambar img {
				width: 420px;
				height: 420px;
				margin-left: 9px;
			}

			.nama_produk p {
				font-family: arial;
				font-size: 18px;
				text-align: center;
				margin-top: 10px;
				margin-top: 10px;
				margin-left: 1px;
			}

			#daftar {
				margin-left: 300px;
			}

			.btn {
				height: 43px;
				font-size: 18pt;
				padding-left: 20pt;
				padding-right: 20pt;
				background-color: #76B3E1;
				border-radius: 8pt;
			}

			#cart {
				margin-left: 10px;
				height: 43px;
				width: 43px;
				background: white;
				background-image: url(cart.jpg);
				border-radius: 8px;
				background-size: 100%;
				background-position: center;
			}

			#konfirmasi {
				margin-left: -1px;
				height: 43px;
				width: 43px;
				background: white;
				background-image: url(konfirmasi.jpg);
				border-radius: 8px;
				background-size: 100%;
				background-position: center;
			}

			.menu li2 {
				list-style: none;
				display: inline;
				float: left;
				border-left: 180px solid transparent;
				box-shadow: initial;
			}

			.menu li {
				list-style: none;
				display: inline;
				position: unset;
				margin-left: 20px;
			}
		}
	</style>
</head>

<body>
	<div class="row">
		<div1 class="col-lg-12 col-md-12 col-sm-12 col-xs-24 col-xss-48">
			<img src="opp.png" /><br>
			<div class="menu">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#home">
							<span class="">Home</span></a>
					</li>
					<li class="">
						<a href="#hp">
							<span class="">HP</span></a>
					</li>
					<li class="">
						<a href="data_akse.php">
							<span class="">Laptop</span></a>
					</li>
					<li class="">
						<a href="data_akse.php">
							<span class="">Aksesoris</span></a>
					</li>
					<li2>
						<form action="" class="form-horizontal">
							<div class="form-group">
								<input type="text" class="form-control" name="cari" placeholder="Cari Produk">
							</div>
						</form>
					</li2>
					<li>
						<div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 col-xss-4" id="cart">
						</div>
					</li>
					<li>
						<div id="konfirmasi">
						</div>
					</li>
					<li>
						<div id="daftar"><button type="button" class="btn btn-info">Daftar</button></div>
					</li>
				</ul>
			</div>
		</div1>
		<div2 class="col-lg-2 col-md-2 col-sm-2 col-xs-4 col-xss-8">
			<div class="filter">
				<p2><b>Filter</b>
					<p2><br>
						<p2><b>Merek</b></p2><br>
						<ul>
							<li>
								<div class="checkbox checkbox-primary">
									<input type="checkbox" style="margin-left: -1px">
									<label for="all" style="margin-top: 3px">ALL</label>
								</div>
							</li>
							<li>
								<div class="checkbox checkbox-primary">
									<input type="checkbox" style="margin-left: -1px">
									<label for="basa" style="margin-top: 3px">ASUS</label>
								</div>
							</li>
							<li>
								<div class="checkbox checkbox-primary">
									<input type="checkbox" style="margin-left: -1px">
									<label for="asam" style="margin-top: 3px">SAMSUNG</label>
								</div>
							</li>
							<li>
								<div class="checkbox checkbox-primary">
									<input type="checkbox" style="margin-left: -1px">
									<label for="kal" style="margin-top: 3px">OPPO</label>
								</div>
							</li>
							<li>
								<div class="checkbox checkbox-primary">
									<input type="checkbox" style="margin-left: -1px">
									<label for="al" style="margin-top: 3px">LENOVO</label>
								</div>
							</li>
							<li>
								<div class="checkbox checkbox-primary">
									<input type="checkbox" style="margin-left: -1px">
									<label for="ol" style="margin-top: 3px">APPLE</label>
								</div>
							</li>
							<li>
								<div class="checkbox checkbox-primary">
									<input type="checkbox" style="margin-left: -1px">
									<label for="apa" style="margin-top: 3px">ASUS</label>
								</div>
							</li>
							<li>
								<div class="checkbox checkbox-primary">
									<input type="checkbox" style="margin-left: -1px">
									<label for="akl" style="margin-top: 3px">SAMSUNG</label>
								</div>
							</li>
							<li>
								<div class="checkbox checkbox-primary">
									<input type="checkbox" style="margin-left: -1px">
									<label for="aa" style="margin-top: 3px">OPPO</label>
								</div>
							</li>
							<li>
								<div class="checkbox checkbox-primary">
									<input type="checkbox" style="margin-left: -1px">
									<label for="l" style="margin-top: 3px">LENOVO</label>
								</div>
							</li>
							<li>
								<div class="checkbox checkbox-primary">
									<input type="checkbox" style="margin-left: -1px">
									<label for="kl" style="margin-top: 3px">APPLE</label>
								</div>
							</li>
						</ul>
						<p2><b>Harga</b></p2><br>
						<form action="" class="form-horizontal">
							<div class="form-group-xs">
								<p2><b>Min Rp.</b></p2><input type="number" class="form-control" name="cari" placeholder="0" style="text-align: right; background: transparent"><br>
							</div>
							<div class="form-group-xs">
								<p2><b>Max Rp.</b></p2><input type="number" class="form-control" name="cari" placeholder="0" style="text-align: right; background: transparent">
							</div>
						</form>
			</div>
		</div2>
		<div3 class="col-lg-10 col-md-10 col-sm-10 col-xs-20 col-xss-40">
			<?php
			include "koneksi2.php";
			$data1 = mysqli_query($koneksi, "SELECT * FROM laptop") or die(mysqli_error($koneksi));
			foreach ($data1 as $baris1) { ?>
				<div class="col-xs-3">
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 col-xss-8">
						<div class="produk">
							<a href="data_akse.php">
								<div class="gambar"><img src="images(11).jpeg" /></div>
								<div class="nama_produk">
									<p><?php echo $baris1["Nama_Laptop"] ?></p>
								</div>
							</a>
						</div>
					</div>
				</div>
			<?php }
			?>
			<?php
			include "koneksi2.php";
			$data2 = mysqli_query($koneksi, "SELECT * FROM hp") or die(mysqli_error($koneksi));
			foreach ($data2 as $baris2) { ?>
				<div class="col-xs-3">
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 col-xss-8">
						<div class="produk">
							<a href="data_akse.php">
								<div class="gambar"><img src="images(11).jpeg" /></div>
								<div class="nama_produk">
									<p><?php echo $baris2["Nama_Hp"] ?></p>
								</div>
							</a>
						</div>
					</div>
				</div>
			<?php }
			?>
			<?php
			include "koneksi2.php";
			$data3 = mysqli_query($koneksi, "SELECT * FROM aksesoris") or die(mysqli_error($koneksi));
			foreach ($data3 as $baris3) { ?>
				<div class="col-xs-3">
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 col-xss-8">
						<div class="produk">
							<a href="data_akse.php">
								<div class="gambar"><img src="images(11).jpeg" /></div>
								<div class="nama_produk">
									<p><?php echo $baris3["Nama_Aksesoris"] ?></p>
								</div>
							</a>
						</div>
					</div>
				</div>
			<?php }
			?>
		</div3>
		<div class="bawah">
			<p3>Online Tech Shop&trade;</p3>
		</div>
	</div>
</body>

</html>