<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/style3.css">
</head>

<body>
	<header class="container-fluid">
		<div class="row">
			<div class="col-12 text-left py-1">
				<p><a class="btn" href="/user"><img src="/img/back.png"></a> Transaksi</p>
			</div>
		</div>
	</header>
	<div class="row">
		<div class="col-12">
				<table>
					<tbody>
						<?php foreach ($transaksi as $trans) : ?>
							<td class="nama2" style="width: 100%;">
								<p1><b><?= $trans['No_Produk']; ?></b></p1><br>
								<p2><?= $trans['Tanggal_Transaksi']; ?></p2><br>
								<p3>Metode Pembayaran : DANA (0856123456)</p3><br>
								<label for="bukti">Bukti Pembayaran: </label><br>
								<img style="width: 200px; padding: 5%" src="/img/user/<?= $trans['bukti']; ?>">								
							</td>
					</tbody>
				<?php endforeach; ?>
				</table>
			</div>
</body>

</html>