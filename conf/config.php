<?php
$host = 'localhost'; 
$user = 'root'; 
$password = ''; 
$database = 'db_diskominfo'; 

$koneksi = mysqli_connect($host, $user, $password, $database);

// Mengecek koneksi
// if(!$koneksi){
//     die("Koneksi Gagal:" . mysqli_connect_error());
// } else {
//     echo "Koneksi Berhasil";
// }
?>