<?php

$servername = "localhost";
$database = "skripsweet";
$username = "root";
$password = "";

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

// Cek koneksi
if (!$conn) {
      die("Koneksi gagal: " . mysqli_connect_error());
}

 ?>