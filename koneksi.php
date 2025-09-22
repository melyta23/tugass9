<?php
include "koneksi.php";

// Query ambil data
$sql = "SELECT * FROM bioskop";
$result = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1' cellpadding='8'>";
    echo "<tr><th>ID</th><th>Film</th><th>Jadwal</th><th>Penonton</th><th>Tiket</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['film']."</td>";
        echo "<td>".$row['jadwal']."</td>";
        echo "<td>".$row['penonton']."</td>";
        echo "<td>".$row['tiket']."</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada data.";
}

mysqli_close($koneksi);
?>
