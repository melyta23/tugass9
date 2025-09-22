<?php
// Tampilkan semua error biar jelas
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "localhost";   // atau bisa coba "127.0.0.1"
$user = "root";        // username MySQL (cek lagi di server sekolah, bisa jadi bukan root)
$pass = "0089260734";            // isi password kalau ada
$db   = "db_xirpl1-13_1"; // nama database

// Membuat koneksi
$koneksi = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi berhasil!";
}
?>
