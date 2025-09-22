<?php
$host = "localhost";
$user = "root";   // atau username MySQL di server sekolah
$pass = "";       // kalau server pakai password, isi di sini
$db   = "db_xirpl1-13_1";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
