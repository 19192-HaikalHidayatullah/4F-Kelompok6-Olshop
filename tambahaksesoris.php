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
        <h1>Tambah Produk Aksesoris</h1>
        <div class="col-mid-6">
            <form class="" action="prosestambahaksesoris.php" method="post">
                <label for="No_Aksesoris">No Aksesoris</label>
                <input type="text" class="form-control" name="No_Aksesoris" value="">

                <label for="Nama_Aksesoris">Nama Aksesoris</label>
                <input type="text" class="form-control" name="Nama_Aksesoris" value="">

                <label for="Deskripsi">Deskripsi</label>
                <input type="textarea" class="form-control" name="Deskripsi" value="">

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