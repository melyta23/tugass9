<?php
include "koneksi.php";
$query = mysqli_query($koneksi, "SELECT * FROM bioskop");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Bioskop</title>
</head>
<body>
    <h2>Daftar Data Bioskop</h2>
    <a href="tambah.php">+ Tambah Data</a><br><br>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Film</th>
            <th>Jadwal</th>
            <th>Penonton</th>
            <th>Tiket</th>
            <th>Aksi</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($query)) { ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['film'] ?></td>
            <td><?= $row['jadwal'] ?></td>
            <td><?= $row['penonton'] ?></td>
            <td><?= $row['tiket'] ?></td>
            <td>
                <a href="ubah.php?id=<?= $row['id'] ?>">Ubah</a> | 
                <a href="hapus.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin mau hapus?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
