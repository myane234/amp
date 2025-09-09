<?php
include "connection.php";

//Proses Tambah Data
if(isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $judul = $_POST['judul'];
    $tanggal_pinjam = $_POST['tanggal_pinjam'];
    $tanggal_pengembalian = $_POST['tanggal_pengembalian'];
    $genre = $_POST['genre'];

    $query = "INSERT INTO orank (nama, judul, tanggal_pinjam, tanggal_pengembalian, genre) VALUES ('$nama', '$judul', '$tanggal_pinjam', '$tanggal_pengembalian', '$genre') ";

    $check = mysqli_query($conn, $query);

    header("Location: index.php");
    exit();
}

//Ambil Data Peminjaman Buku
$result = mysqli_query($conn, "
    SELECT o.id, o.nama, o.judul, o.tanggal_pinjam, o.tanggal_pengembalian, g.genre_buku
    FROM orank o
    JOIN genre g ON o.genre = g.id
    ");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Peminjaman Buku</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #ecdaffff;
            margin: 20px;
            color: #2f3640;
        }
        h2 {
            text-align: center;
            color: #4e2775ff;
        }
        a {
            text-decoration: none;
            color: #c400e6ff;
            font-weight: bold;
            margin: 0 5px;
        }
        a:hover {
            color: #e84118;
        }
        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0px 2px 8px rgba(0,0,0,0.1);
            border-radius: 10px;
            overflow: hidden;
        }
        th {
            background: #7300e6ff;
            color: #fff;
            padding: 12px;
            text-align: center;
        }
        td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #eee;
        }
        tr:nth-child(even) {
            background: #f1f2f6;
        }
        tr:hover {
            background: #dcdde1;
        }
        .navbar {
            text-align: center;
            margin-bottom: 15px;
        }
        .navbar a {
            padding: 8px 12px;
            border-radius: 6px;
            transition: 0.3s;
        }
        .navbar a:hover {
            background: #9d00e6ff;
            color: #fff;
        }
    </style>
</head>
<body>

    <h2>📚Data Peminjaman Buku📚</h2>
    <div class="navbar">
        <a href="index.php">Beranda</a> | 
        <a href="form.php">Tambah Peminjam</a>
    </div>

    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Judul Buku</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Pengembalian</th>
            <th>Genre Buku</th>
            <th>Aksi</th>
        </tr>
        <?php $no = 1; while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['judul'] ?></td>
            <td><?= $row['tanggal_pinjam'] ?></td>
            <td><?= $row['tanggal_pengembalian'] ?></td>
            <td><?= $row['genre_buku'] ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>">✏ Edit</a> |
                <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Hapus data?')">🗑 Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>

</body>
</html>
