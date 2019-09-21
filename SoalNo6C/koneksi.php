<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "arkademy";

//membuat koneksi kedatabase
$conn = mysqli_connect($servername, $username, $password, $db_name);

//memeriksa apakah koneksi berhasil atau tidak
if (!$conn) {
    die("Koneksi Gagal : " . mysqli_connect_error());
}

?>