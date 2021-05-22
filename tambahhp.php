<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Tambah Produk Hp</h1>
        <div class="col-mid-6">
            <form class="" action="prosestambahhp.php" method="post">
                <label for="No_Hp">No Hp</label>
                <input type="text" class="form-control" name="No_Hp" value="">

                <label for="Nama_Hp">Nama Hp</label>
                <input type="text" class="form-control" name="Nama_Hp" value="">

                <label for="Rilis">Rilis</label>
                <input type="text" class="form-control" name="Rilis" value="">

                <label for="Chipset">Chipset</label>
                <input type="text" class="form-control" name="Chipset" value="">

                <label for="RAM">RAM</label>
                <input type="text" class="form-control" name="RAM" value="">

                <label for="Memori_Internal">Memori Internal</label>
                <input type="text" class="form-control" name="Memori_Internal" value="">

                <label for="Ukuran">Ukuran</label>
                <input type="text" class="form-control" name="Ukuran" value="">

                <label for="Kamera_Depan">Kamera Depan</label>
                <input type="text" class="form-control" name="Kamera_Depan" value="">

                <label for="Kamera_Belakang">Kamera Belakang</label>
                <input type="text" class="form-control" name="Kamera_Belakang" value="">

                <label for="SIM">SIM</label>
                <input type="text" class="form-control" name="SIM" value="">

                <label for="Baterai">Baterai</label>
                <input type="text" class="form-control" name="Baterai" value="">

                <label for="Harga">Harga</label>
                <input type="number" class="form-control" name="Harga" value="">

                <label for="Gambar">Gambar</label>
                <input type="file" class="form-control" name="Gambar" value="">

                <br>
                <button class="btn btn-primary" type="submit" name="button">Simpan</button>
            </form>
        </div>
    </div>
</body>
</html>