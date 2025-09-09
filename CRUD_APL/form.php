<?php
include "connection.php";

$genre_data = mysqli_query($conn, "SELECT * FROM genre");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Tambah Peminjam😗</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f6fa;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .form-container {
            background: #ffffff;
            padding: 25px 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0,0,0,0.1);
            width: 400px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #6a0dad;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #636e72;
        }
        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #dcdde1;
            border-radius: 6px;
            font-size: 14px;
            transition: 0.3s;
        }
        input:focus, select:focus {
            border-color: #6a0dad;
            outline: none;
            box-shadow: 0 0 5px rgba(9,132,227,0.3);
        }
        button {
            width: 100%;
            padding: 12px;
            background: #9709e3ff;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background: #e27affff;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 15px;
            text-decoration: none;
            font-weight: bold;
            color: #5d09e3ff;
        }
        a:hover {
            color: #dc0808ff;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Form Tambah Data Peminjam</h2>
    <form method="POST" action="index.php">
        <label>Nama</label>
        <input type="text" name="nama" required>

        <label>Judul Buku</label>
        <input type="text" name="judul" required>

        <label>Tanggal Pinjam</label>
        <input type="date" name="tanggal_pinjam" value="<?= $row['tanggal_pinjam'] ?? '' ?>" required>

        <label>Tanggal Pengembalian</label>
        <input type="date" name="tanggal_pengembalian" value="<?= $row['tanggal_pengembalian'] ?? '' ?>" required>


        <label>Genre Buku</label>
        <select name="genre" required>
            <option value="">Pilih Genre</option>
            <?php while ($j = mysqli_fetch_assoc($genre_data)) : ?>
                <option value="<?= $j['id']?>"> <?= $j['genre_buku'] ?></option>
            <?php endwhile; ?>
        </select>

        <button type="submit" name="tambah">Tambah</button>
    </form>
    <a href="index.php">⬅ Kembali</a>
</div>

</body>
</html>