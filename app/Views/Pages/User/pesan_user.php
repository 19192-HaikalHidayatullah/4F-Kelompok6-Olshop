<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
	<header class="container-fluid">
		<div class="row">
			<div class="col-12 text-left py-1">
				<p><a class="btn" href="akse_admin.php"><img src=""></a> Bukti Pembayaran</p>			
			</div>
		</div>
	</header>
			<div class="row">
				<div class="col-12">
                <table>
                    <tbody>
                    	<tr>
                        <td><img src="images(11).jpeg" style="width: 70%"></td>
                        <td style="width: 55%"><p1><b>Nama</b></p1><br><p2>Harga</p2></td>
						<td style="width: 27%; text-align: right;">
							<label for="jumlah">Jumlah </label>
							<input type="number" name="jumlah" style="padding-left: 2%">
						</td>
					</tr>
                    </tbody>
                </table>
                <hr/>
                </div>
            </div>
        </div>
        <div class="container-fluid">
        	<div class="row">
        		<div class="col-12" style="padding-left: 3%">
        			<form>
        			<label for="alamat">Alamat Pengiriman</label>
        			<textarea class="form-control" style="width: 30%; height: 150px;" name="alamat"></textarea>

        			<label for="kode">Kode Pos</label>
        			<input type="text" class="form-control" style="width: 30%" name="kode">
        		</form>
        	</div>
        </div>
    </div>
    <div class="container-fluid text-center" style="padding-top: 2%">
    	<div class="row">
    		<div class="col-12">
    			Estimasi Pengiriman 3-7 hari untuk daerah Jabodetabek, 4-14 hari diluar Jabodetabek
    		</div>
    	</div>
    </div>
    <div class="container-fluid" style="padding-top: 2%">
    	<div class="row">
    		<div class="col-12 py-3" style="padding-left:2%; padding-right: 2%; background: #AFD2E0">
    			<table>
    				<tbody>
    					<tr>
    						<td style="width: 100%">Biaya Pengiriman :<br><b>Total Pembayaran</b></td>
    						<td>
							<a href=""><button class="btn btn-primary" style="width: 100%; color: black;" >Pembayaran</button></a>
						</td>
    					</tr>
    				</tbody>
    			</table>
    		</div>
    	</div>
    </div>    
</body>
</html>