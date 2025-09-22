<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Bioskop</title>
  <style>
    /* Background gradient */
    body {
      font-family: 'Poppins', sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background: linear-gradient(135deg, #667eea, #764ba2);
    }

    /* Card */
    .card {
      background: #fff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
      width: 350px;
      animation: fadeIn 0.8s ease-in-out;
    }

    /* Animasi masuk */
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* Judul */
    .card h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    /* Label */
    label {
      font-weight: 500;
      display: block;
      margin-bottom: 5px;
      color: #444;
    }

    /* Input */
    input {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border-radius: 8px;
      border: 1px solid #ccc;
      transition: 0.3s;
      font-size: 14px;
    }

    input:focus {
      border-color: #667eea;
      outline: none;
      box-shadow: 0 0 8px rgba(102, 126, 234, 0.4);
    }

    /* Tombol */
    button {
      width: 100%;
      padding: 12px;
      background: #667eea;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: 0.3s;
    }

    button:hover {
      background: #5a67d8;
      transform: scale(1.05);
    }
  </style>
</head>
<body>
  <div class="card">
    <h2>Tambah Data Bioskop</h2>
    <form action="proses.php" method="post">
      <label>Film</label>
      <input type="text" name="film" placeholder="Masukkan judul film" required>

      <label>Jadwal</label>
      <input type="text" name="jadwal" placeholder="Masukkan jadwal tayang" required>

      <label>Penonton</label>
      <input type="number" name="penonton" placeholder="Jumlah penonton" required>

      <label>Tiket</label>
      <input type="text" name="tiket" placeholder="Harga tiket" required>

      <button type="submit">Simpan</button>
    </form>
  </div>
</body>
</html>
