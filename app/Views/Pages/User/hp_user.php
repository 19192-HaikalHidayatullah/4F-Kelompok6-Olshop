<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/dropdown.css">    
    <script src="/css/dropdown.js"></script>

    <style type="text/css">
header {
  background: url(../img/dahlah.png);
  background-size: 100%;
  background-repeat: no-repeat;
}

.menu li {
  list-style: none;
  display: inline;
  position: auto;
}

.menu li2 {
  list-style: none;
  display: inline;
  margin-left: auto;
  margin-right: 0;
  border-left: solid transparent;
  box-shadow: initial;
  text-shadow: pink;
}

.menu li3 {
  margin-left: auto;
}

.menu a {
  text-decoration: none;
}

a:hover {
  text-decoration: none;
  color: black;
}

#cart {
  margin-left: 70%;
  height: 34px;
  width: 34px;
  background: white;
  background-image: url(../img/cart.jpg);
  border-radius: 8px;
  background-size: 100%;
  background-position: center;
}

#konfirmasi {
  margin-left: 120%;
  height: 34px;
  width: 34px;
  background: white;
  background-image: url(../img/konfirmasi.jpg);
  border-radius: 8px;
  background-size: 100%;
  background-position: center;
}

#daftar {
  margin-left: 45vh;
}

.form-horizontal > .form-group > .form-control {
  height: 34px;
  width: 500px;
  border-radius: 8px;
}

.form-group > .form-control {
  height: 30px;
  width: 190px;
}

.backheader {
  width: 43%;
  padding-bottom: 0.3%;
}

.nav-tabs,
.nav-tabs > li.active > a:focus {
  border-style: none;
  border: none;
  margin-top: 0.86%;
}

.nav-tabs > li.hover {
  background-color: #76b3e1;
}

.sidebar li {
  list-style: none;
  font-size: 12px;
  font-family: arial;
  padding-left: 2%;
}

nav {
  padding-left: 10%;
  background: #aadcf7;
  padding-right: 10%;
  padding-top: 5%;
  width: 115%;
  padding-bottom: 15%;
  border-radius: 2%;
}

.col-xs-3 {
  width: 180px;
  margin-top: -5px;
}

.produk {
  background: white;
  height: 260px;
  width: 170px;
  margin-top: 2.5vh;
  border-radius: 10px;
  margin-left: 2.5vh;
  border-style: solid;
  border-color: #4591ce;
  position: relative;
  box-shadow: 2px 2px 2px 2px rgba(40, 121, 190, 0.2);
}

.produk a {
  color: black;
  text-decoration: none;
}

.gambar img {
  width: 150px;
  height: 150px;
  margin-left: 9px;
}

.nama_produk p {
  font-family: arial;
  font-size: 15px;
  text-align: center;
  margin-top: 10px;
  margin-top: 10px;
}

.footer {
  background: #76b3e1;
  margin-top: 2.5%;
}
        
    </style>
</head>

<body>
    <header div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <img class="backheader" src="../img/opp.png">
                <div class="menu">
                    <ul class="nav nav-tabs">
                        <li class="">
                            <a href="/user/index">
                                <span class="">Home</span></a>
                        </li>
                        <li class="active">
                            <a href="/User/hp">
                                <span class="">HP</span></a>
                        </li>
                        <li class="">
                            <a href="/user/laptop">
                                <span class="">Laptop</span></a>
                        </li>
                        <li class="">
                            <a href="/user/aksesoris">
                                <span class="">Aksesoris</span></a>
                        </li>
                        <li2>
                            <form action="" class="form-horizontal">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="cari" placeholder="Cari Produk">
                                </div>
                            </form>
                        </li2>
                        <?php if (in_groups('user')) : ?>                       
                        <li>
                            <a type="button" id="konfirmasi" class="btn btn-info" href="/user/bukti"></a>
                        </li>                                               
                        <li class="dropdown">
                            <div id="daftar">
                                <button onclick="myFunction()" class="btn btn-info dropbtn"><?= user()->username; ?></button>
                                <div id="myDropdown" class="dropdown-content">
                                    <a href="/user/profile">Profile</a>
                                    <a href="/user/bukti">Transaksi</a>
                                    <a href="<?= base_url('logout'); ?>" name="logout">Logout</a>
                                </div>
                            </div>
                        </li>
                        <?php endif; ?>                     
                        <?php if (in_groups('admin')) : ?>
                        <li class="dropdown">
                            <div id="daftar">
                                <button onclick="myFunction()" class="btn btn-info dropbtn">Admin</button>
                                <div id="myDropdown" class="dropdown-content">
                                    <a href="/admin/index">Kelola</a>
                                    <a href="<?= base_url('logout'); ?>" name="logout">Logout</a>
                                </div>
                            </div>
                        </li> 
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="container-bordered">
        <div class="row">
            <div class="col-2">
                <div class="sidebar">
                    <form action="/user/filter" class="form-horizontal">
                        <nav>
                            <p2><b>Filter</b></p2><br>
                            <p2><b>Merek</b></p2><br>
                            <ul>
                                <li>
                                    <div class="checkbox checkbox-primary">
                                        <input type="checkbox" name="merk" style="margin-left: -1px" value="all">
                                        <label for="all" style="margin-top: 3px">ALL</label>
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
                                        <input type="checkbox" name="merk" style="margin-left: -1px" value="apple">
                                        <label for="merk" style="margin-top: 3px">APPLE</label>
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
                                        <input type="checkbox" name="merk" style="margin-left: -1px" value="oppo">
                                        <label for="merk" style="margin-top: 3px">OPPO</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-primary">
                                        <input type="checkbox" name="merk" style="margin-left: -1px" value="samsung">
                                        <label for="merk" style="margin-top: 3px">SAMSUNG</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-primary">
                                        <input type="checkbox" name="merk" style="margin-left: -1px" value="vivo">
                                        <label for="merk" style="margin-top: 3px">VIVO</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox checkbox-primary">
                                        <input type="checkbox" name="merk" style="margin-left: -1px" value="xiaomi">
                                        <label for="merk" style="margin-top: 3px">XIAOMI</label>
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
            <?php foreach ($Hp as $p) : ?>
                    <?php
                    $Harga = $p['Harga'];
                    $Harga_Format = number_format($Harga, 2, ",", ".");
                    ?>
                    <div class="col-xs-3">
                        <div class="col-2">
                            <div class="produk">
                                <a href="/user/detailhp/<?= $p['Id_Hp']; ?>">
                                    <div class="gambar"><img src="/img/admin/<?= $p['Gambar']; ?>" /></div>
                                    <div class="nama_produk">
                                        <p><?= $p['Nama_Hp']; ?></p>
                                        <p>Rp. <?= $Harga_Format; ?></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
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