<?php

$host = 'localhost';
$user = 'root';
$pass = 'mysql';
$db = 'latihan1';

$conn = mysqli_connect($host, $user, $pass, $db);

if($conn == false){
    echo "Koneksi Gagal";
    die();
} #else echo "Koneksi Berhasil";

?>