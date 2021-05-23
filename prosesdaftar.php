<?php
    include "koneksi.php";
    $Username=$_POST["Username"];
    $Password=$_POST["Password"];
    $Nama_Lengkap=$_POST["Nama_Lengkap"];
    $TTL=$_POST["TTL"];
    $Jenis_Kelamin=$_POST["Jenis_Kelamin"];
    $Alamat=$_POST["Alamat"];
    $Kab_Kota=$_POST["Kab_Kota"];
    $Provinsi=$_POST["Provinsi"];
    $No_Hp=$_POST["No_Hp"];
    
    $query=mysqli_query($koneksi, "INSERT INTO `pengguna` (`Username`, `Password`, `Nama_Lengkap`, `TTL`, 
    `Jenis_Kelamin`, `Alamat`, `Kab_Kota`, `Provinsi`, `No_Hp`) 
    VALUES ('$Username', '$Password', '$Nama_Lengkap', '$TTL', '$Jenis_Kelamin', '$Alamat', '$Kab_Kota', '$Provinsi'
    , '$No_Hp')") or die(mysqli_error($koneksi));

    if($query){
        header("Location: daftarakun.php");
    }else{
        echo "Gagal";
    }
?>