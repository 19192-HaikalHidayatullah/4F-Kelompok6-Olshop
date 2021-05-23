<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <center><h1>Daftar Akun</h1></center>
        <form action="prosesdaftar.php" method="post">
            <table class="table">
                <tbody>
                    <tr>
                        <td>
                            <label for="Nama_Lengkap">Nama Lengkap</label>
                            <input type="text" class="form-control" name="Nama_Lengkap" value="">
                        </td>
                        <td>
                            <label for="Kab_Kota">Kota/Kabupaten</label>
                            <input type="text" class="form-control" name="Kab_Kota" value="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="TTL">Tempat, Tanggal Lahir</label>
                            <input type="text" class="form-control" name="TTL" value="">
                        </td>
                        <td>
                            <label for="Provinsi">Provinsi</label>
                            <input type="text" class="form-control" name="Provinsi" value="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Jenis_Kelamin">Jenis Kelamin</label>
                            <select name="Jenis_Kelamin" class="form-control">
                                <option>Laki-laki</option>
                                <option>Perempuan</option>
                            </select>
                        </td>
                        <td>
                            <label for="No_Hp">No.Hp</label>
                            <input type="text" class="form-control" name="No_Hp" value="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Alamat">Alamat</label>
                            <input type="text" class="form-control" name="Alamat" value="">
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="table" action="prosesdaftar.php" method="post">
                <tbody>
                    <tr>
                        <td>
                            <label for="Username">Username</label>
                            <input type="text" class="form-control" name="Username" value="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="Password">Password</label>
                            <input type="password" class="form-control" name="Password" value="">
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="table">
                <tbody>
                    <tr>
                        <td>   
                            <p>Punya Akun?
                            <a href="masuk.php">Masuk</a>
                            </p>
                        </td>
                        <td>
                            <button class="btn btn-primary" type="submit" name="button">Daftar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</body>
</html>