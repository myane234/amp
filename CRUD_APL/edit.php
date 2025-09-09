<?php
include 'connection.php';

$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM orank WHERE id=$id");
$row = mysqli_fetch_assoc($data);

// ambil list genre
$genre_list = mysqli_query($conn, "SELECT * FROM genre");

// Proses Update
if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $judul = $_POST['judul'];
    $tanggal_pinjam = $_POST['tanggal_pinjam'];
    $tanggal_pengembalian = $_POST['tanggal_pengembalian'];
    $genre = $_POST['genre'];

    $query = "UPDATE orank SET nama='$nama', judul='$judul', tanggal_pinjam='$tanggal_pinjam', tanggal_pengembalian='$tanggal_pengembalian', genre='$genre' WHERE id=$id";
    mysqli_query($conn, $query);

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Peminjam</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f0ff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
        }
        .container {
            background: #fff;
            margin-top: 40px;
            padding: 30px 40px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
            width: 400px;
        }
        h2 {
            text-align: center;
            color: #6a0dad;
            margin-bottom: 25px;
        }
        label {
            font-weight: bold;
            color: #444;
            display: block;
            margin-top: 12px;
            margin-bottom: 6px;
        }
        input[type="text"],
        input[type="date"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
            margin-bottom: 15px;
            transition: 0.3s;
        }
        input:focus, select:focus {
            border-color: #6a0dad;
            box-shadow: 0 0 5px rgba(106,13,173,0.5);
            outline: none;
        }
        button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background: #9709e3ff;
            color: #fff;
            font-size: 16px;
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
            color: #5d09e3ff;
            font-weight: bold;
            transition: 0.3s;
        }
        a:hover {
            color: #dc0808ff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Edit Data Peminjam</h2>
        <form method="POST" action="">
            <label>Nama:</label>
            <input type="text" name="nama" value="<?= $row['nama']?>" required>

            <label>Judul:</label>
            <input type="text" name="judul" value="<?= $row['judul']?>" required>

            <label>Tanggal Pinjam:</label>
            <input type="date" name="tanggal_pinjam" value="<?= $row['tanggal_pinjam']?>" required>

            <label>Tanggal Pengembalian:</label>
            <input type="date" name="tanggal_pengembalian" value="<?= $row['tanggal_pengembalian']?>" required>

            <label>Genre:</label>
            <select name="genre" required>
                <option value="">Pilih Genre</option>
                <?php while ($j = mysqli_fetch_assoc($genre_list)): ?>
                    <option value="<?= $j['id'] ?>" <?= ($row['genre'] == $j['id']) ? 'selected' : '' ?>>
                        <?= $j['genre_buku'] ?>
                    </option>
                <?php endwhile; ?>
            </select>

            <button type="submit" name="update">Update</button>
        </form>
        <a href="index.php">⬅ Kembali</a>
    </div>
</body>
</html>
