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
                        <li class="active">
                            <a href="/home/laptop">
                                <span class="">Laptop</span></a>
                        </li>
                        <li class="">
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
                    <form action="/home/filterlaptop" class="form-horizontal">
                        <nav>
                            <p2><b>Filter</b></p2><br>
                            <p2><b>Merek</b></p2><br>
                            <ul>
                                <li>
                                    <div class="checkbox checkbox-primary">
                                        <input type="checkbox" name="merk" style="margin-left: -1px" value="all">
                                        <label for="merk" style="margin-top: 3px">ALL</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-primary">
                                        <input type="checkbox" name="merk" style="margin-left: -1px" value="acer">
                                        <label for="merk" style="margin-top: 3px">ACER</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-primary">
                                        <input type="checkbox" name="merk" style="margin-left: -1px" value="asus">
                                        <label for="merk" style="margin-top: 3px">ASUS</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-primary">
                                        <input type="checkbox" name="merk" style="margin-left: -1px" value="hp">
                                        <label for="merk" style="margin-top: 3px">HP</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-primary">
                                        <input type="checkbox" name="merk" style="margin-left: -1px" value="lenovo">
                                        <label for="merk" style="margin-top: 3px">LENOVO</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-primary">
                                        <input type="checkbox" name="merk" style="margin-left: -1px" value="samsung">
                                        <label for="merk" style="margin-top: 3px">SAMSUNG</label>
                                    </div>
                                </li>
                            </ul>
                            <p2><b>Harga</b></p2><br>
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
                <?php foreach ($Laptop as $q) : ?>
                    <?php
                    $Harga = $q['Harga'];
                    $Harga_Format = number_format($Harga, 2, ",", ".");
                    ?>
                    <div class="col-xs-3">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 col-xss-8">
                            <div class="produk">
                                <a href="/home/detaillaptop/<?= $q['Id_Laptop']; ?>">
                                    <div class="gambar"><img src="/img/admin/<?= $q['Gambar']; ?>" /></div>
                                    <div class="nama_produk">
                                        <p><?= $q['Nama_Laptop']; ?></p>
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