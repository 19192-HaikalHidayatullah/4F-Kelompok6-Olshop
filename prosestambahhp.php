<?php
    include "koneksi.php";
    $No_Hp=$_POST["No_Hp"];
    $Nama_Hp=$_POST["Nama_Hp"];
    $Rilis=$_POST["Rilis"];
    $Chipset=$_POST["Chipset"];
    $RAM=$_POST["RAM"];
    $Memori_Internal=$_POST["Memori_Internal"];
    $Ukuran=$_POST["Ukuran"];
    $Kamera_Depan=$_POST["Kamera_Depan"];
    $Kamera_Belakang=$_POST["Kamera_Belakang"];
    $SIM=$_POST["SIM"];
    $Baterai=$_POST["Baterai"];
    $Harga=$_POST["Harga"];
    $Gambar=$_POST["Gambar"];
    
    $query=mysqli_query($koneksi, "INSERT INTO `hp` (`No_Hp`, `Nama_Hp`, `Rilis`, `Chipset`, 
    `RAM`, `Memori_Internal`, `Ukuran`, `Kamera_Depan`, `Kamera_Belakang`, `SIM`, `Baterai`, `Harga`, `Gambar`) 
    VALUES ('$No_Hp', '$Nama_Hp', '$Rilis', '$Chipset', '$RAM', '$Memori_Internal', '$Ukuran', '$Kamera_Depan'
    , '$Kamera_Belakang', '$SIM', '$Baterai', '$Harga', '$Gambar')") or die(mysqli_error($koneksi));

    if($query){
        header("Location: tambahhp.php");
    }else{
        echo "Gagal";
    }
?>