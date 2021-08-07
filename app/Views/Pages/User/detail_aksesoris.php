<!DOCTYPE html>
<html>

<head>
	<title><?= $title; ?></title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/style3.css">
</head>

<body>
	<header class="container-fluid">
		<div class="row">
			<div class="col-12 text-left py-1">
				<p><a class="btn" href="/user/aksesoris"><img src="/img/back.png"></a> Detail Produk</p>
			</div>
		</div>
	</header>
	<div class="container-border">
		<div class="row">
			<div class="col-5 text-center">
				<?php
				$Harga = $akse['Harga'];
				$Harga_Format = number_format($Harga, 2, ",", ".");
				?>
				<img src="/img/admin/<?= $akse['Gambar']; ?>" style="width: 90%">
			</div>
			<div class="col-7 text-left" ;>
				<br>
				<h2><?= $akse['Nama_Aksesoris']; ?></h2>
				<h3 style="color: blue">Rp. <?= $Harga_Format; ?></h3>
				<br>
				<span><?= $akse['Deskripsi']; ?></span><br>
			</div>
		</div>
		<div class="container-fluid">
			<div class="col-12" style="text-align: right; padding-right: 2%">
				<!-- <a href=""><button class="btn btn-default" style="width: 250px;">Masukkan Ke Keranjang</button></a> -->
				<a href="/user/transaksiakse/<?= $akse['Id_Aksesoris']; ?>"><button class="btn btn-primary" style="width: 100px; color: black">Pesan</button></a>
			</div>
		</div>


</body>

</html>