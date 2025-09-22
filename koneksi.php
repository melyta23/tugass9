<?php
// Tampilkan semua error biar jelas saat debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "localhost";   
$user = "xirpl1-13";       // username MySQL
$pass = "0089260734";      // password MySQL
$db   = "db_xirpl1-13_1";  // nama database

// Membuat koneksi
$koneksi = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
// jangan pakai echo di sini, biar tidak ganggu tampilan
?>
