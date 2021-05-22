<?php
    include "koneksi.php";
    $No_Laptop=$_POST["No_Laptop"];
    $Nama_Laptop=$_POST["Nama_Laptop"];
    $Processor=$_POST["Processor"];
    $Display=$_POST["Display"];
    $Sistem_Operasi=$_POST["Sistem_Operasi"];
    $RAM=$_POST["RAM"];
    $Hard_Drive=$_POST["Hard_Drive"];
    $Konektivitas=$_POST["Konektivitas"];
    $Harga=$_POST["Harga"];
    $Gambar=$_POST["Gambar"];
    
    $query=mysqli_query($koneksi, "INSERT INTO `laptop` (`No_Laptop`, `Nama_Laptop`, `Processor`, `Display`, 
    `Sistem_Operasi`, `RAM`, `Hard_Drive`, `Konektivitas`, `Harga`, `Gambar`) 
    VALUES ('$No_Laptop', '$Nama_Laptop', '$Processor', '$Display', '$Sistem_Operasi', '$RAM', '$Hard_Drive', '$Konektivitas'
    , '$Harga', '$Gambar')") or die(mysqli_error($koneksi));

    if($query){
        header("Location: tambahlaptop.php");
    }else{
        echo "Gagal";
    }
?>