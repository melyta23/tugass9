<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
    $film = $_POST['film'];
    $jadwal = $_POST['jadwal'];
    $penonton = $_POST['penonton'];
    $tiket = $_POST['tiket'];

    $query = mysqli_query($koneksi, "INSERT INTO bioskop (film, jadwal, penonton, tiket) 
                                     VALUES ('$film', '$jadwal', '$penonton', '$tiket')");
    if ($query) {
        header("Location: index.php");
    } else {
        echo "Gagal menyimpan data!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
</head>
<body>
    <h2>Tambah Data Bioskop</h2>
    <form method="POST">
        <label>Film</label><br>
        <input type="text" name="film" required><br><br>

        <label>Jadwal</label><br>
        <input type="text" name="jadwal" required><br><br>

        <label>Penonton</label><br>
        <input type="text" name="penonton" required><br><br>

        <label>Tiket</label><br>
        <input type="text" name="tiket" required><br><br>

        <button type="submit" name="simpan">Simpan</button>
    </form>
</body>
</html>
