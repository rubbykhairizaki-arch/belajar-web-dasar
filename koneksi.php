<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "web rubby"; // HARUS SAMA PERSIS

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>