<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <center><h1>Masuk</h1></center>
        <div class="col-mid-6">
            <form class="" action="prosesmasuk.php" method="post">
                <label for="Username">Username</label>
                <input type="text" class="form-control" name="Username" value="">

                <label for="Password">Password</label>
                <input type="password" class="form-control" name="Password" value="">
                
                <p>Lupa Password?
                    <a href="">Ubah</a>
                </p>
                <table class="table">
                    <tbody>
                        <tr>
                            <td>
                                <p>Belum Punya Akun?
                                    <a href="daftarakun.php">Daftar</a>
                                </p>
                            </td>
                            <td>
                                <button class="btn btn-primary" type="submit" name="button">Masuk</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</body>
</html>