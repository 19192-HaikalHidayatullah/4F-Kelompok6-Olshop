<!DOCTYPE html>
<html>

<head>
    <title><?= $title; ?></title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/style5.css">

</head>

<body>
    <header div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <img class="backheader" src="/img/opp.png">
                <div class="menu">
                    <ul class="nav nav-tabs">
                        <li class="">
                            <a href="/home/index">
                                <span class="">Home</span></a>
                        </li>
                        <li class="">
                            <a href="/home/hp">
                                <span class="">HP</span></a>
                        </li>
                        <li class="">
                            <a href="/home/laptop">
                                <span class="">Laptop</span></a>
                        </li>
                        <li class="active">
                            <a href="/home/aksesoris">
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

                        </li>
                        <li>

                        </li>
                        <li>
                            <div id="daftar"><a type="button" class="btn btn-info" href="<?= route_to('login') ?>">Login</a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="container-bordered">
        <div class="row">
            <div class="col-2">
                <div class="sidebar">
                    <nav>
                        <p2><b>Harga</b></p2><br>
                        <form action="/home/filterakse" class="form-horizontal">
                            <div class="form-group-xs">
                                <p2><b>Min Rp.</b></p2><input type="number" class="form-control" name="filtermin" placeholder="0" style="text-align: right; background: transparent"><br>
                            </div>
                            <div class="form-group-xs">
                                <p2><b>Max Rp.</b></p2><input type="number" class="form-control" name="filtermax" placeholder="0" style="text-align: right; background: transparent">
                            </div>
                            <div class="form-group-xs">
                                <br><button class="btn btn-info">Filter</button>
                            </div>
                        </form>
                    </nav>
                </div>
            </div>
            <div class="col-10">
                <?php foreach ($Aksesoris as $r) : ?>
                    <?php
                    $Harga = $r['Harga'];
                    $Harga_Format = number_format($Harga, 2, ",", ".");
                    ?>
                    <div class="col-xs-3">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 col-xss-8">
                            <div class="produk">
                                <a href="/home/detailakse/<?= $r['Id_Aksesoris']; ?>">
                                    <div class="gambar"><img src="/img/admin/<?= $r['Gambar']; ?>" /></div>
                                    <div class="nama_produk">
                                        <p><?= $r['Nama_Aksesoris']; ?></p>
                                        <p>Rp. <?= $Harga_Format; ?></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-12 py-5 footer">
                &copy; Online Tech Shop
            </div>
        </div>
    </div>
</body>

</html>