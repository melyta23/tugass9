<?php
include "koneksi.php";

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM bioskop WHERE id='$id'");
$data = mysqli_fetch_assoc($query);

if (isset($_POST['update'])) {
    $film = $_POST['film'];
    $jadwal = $_POST['jadwal'];
    $penonton = $_POST['penonton'];
    $tiket = $_POST['tiket'];

    $update = mysqli_query($koneksi, "UPDATE bioskop SET 
                                      film='$film', 
                                      jadwal='$jadwal', 
                                      penonton='$penonton', 
                                      tiket='$tiket' 
                                      WHERE id='$id'");
    if ($update) {
        header("Location: index.php");
    } else {
        echo "Gagal mengubah data!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ubah Data</title>
</head>
<body>
    <h2>Ubah Data Bioskop</h2>
    <form method="POST">
        <label>Film</label><br>
        <input type="text" name="film" value="<?= $data['film'] ?>" required><br><br>

        <label>Jadwal</label><br>
        <input type="text" name="jadwal" value="<?= $data['jadwal'] ?>" required><br><br>

        <label>Penonton</label><br>
        <input type="text" name="penonton" value="<?= $data['penonton'] ?>" required><br><br>

        <label>Tiket</label><br>
        <input type="text" name="tiket" value="<?= $data['tiket'] ?>" required><br><br>

        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>
