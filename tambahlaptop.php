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
        <h1>Tambah Produk Laptop</h1>
        <div class="col-mid-6">
            <form class="" action="prosestambahlaptop.php" method="post">
                <label for="No_Laptop">No Laptop</label>
                <input type="text" class="form-control" name="No_Laptop" value="">

                <label for="Nama_Laptop">Nama Laptop</label>
                <input type="text" class="form-control" name="Nama_Laptop" value="">

                <label for="Processor">Processor</label>
                <input type="text" class="form-control" name="Processor" value="">

                <label for="Display">Display</label>
                <input type="text" class="form-control" name="Display" value="">

                <label for="Sistem_Operasi">Sistem Operasi</label>
                <input type="text" class="form-control" name="Sistem_Operasi" value="">

                <label for="RAM">RAM</label>
                <input type="text" class="form-control" name="RAM" value="">

                <label for="Hard_Drive">Hard Drive</label>
                <input type="text" class="form-control" name="Hard_Drive" value="">

                <label for="Konektivitas">Konektivitas</label>
                <input type="text" class="form-control" name="Konektivitas" value="">

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