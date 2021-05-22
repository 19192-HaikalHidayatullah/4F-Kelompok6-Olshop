<?php
    include "koneksi.php";
    $No_Aksesoris=$_POST["No_Aksesoris"];
    $Nama_Aksesoris=$_POST["Nama_Aksesoris"];
    $Deskripsi=$_POST["Deskripsi"];
    $Harga=$_POST["Harga"];
    $Gambar=$_POST["Gambar"];
    
    $query=mysqli_query($koneksi, "INSERT INTO `aksesoris` (`No_Aksesoris`, `Nama_Aksesoris`, `Deskripsi`, `Harga`, `Gambar`) 
    VALUES ('$No_Aksesoris', '$Nama_Aksesoris', '$Deskripsi', '$Harga', '$Gambar')") or die(mysqli_error($koneksi));

    if($query){
        header("Location: tambahaksesoris.php");
    }else{
        echo "Gagal";
    }
?>