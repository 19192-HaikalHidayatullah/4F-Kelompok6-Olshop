<?php
    $host="localhost";
    $user="root";
    $password="";
    $db="pbwdbase";

    $koneksi=mysqli_connect($host, $user, $password, $db);
    if(!$koneksi){
        echo "Gagal Terkoneksi dengan Database";
    }
?>