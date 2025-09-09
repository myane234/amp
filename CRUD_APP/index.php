<?php
include "koneksi.php";

//Proses Tambah Data
if(isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $jurusan = $_POST['jurusan'];

    $query = "INSERT INTO mahasiswa (nama, email, jurusan) VALUES ('$nama', '$email', '$jurusan') ";

    $check = mysqli_query($conn, $query);

    header("Location: index.php");

    exit();
}

//Ambil Data Mahasiswa
$result = mysqli_query($conn, "
    SELECT m.id, m.nama, m.email, j.nama_jurusan
    FROM mahasiswa m
    JOIN jurusan j ON m.jurusan = j.id
    ");
?>

<h2>Data Mahasiswa</h2>
<a href="index.php">Beranda</a> | <a href="form.php">Tambah Mahasiswa</a>
<table border="1" cellpadding="8">
    <tr>
        <th>No</th><th>Nama</th><th>Email</th><th>Jurusan</th><th>Aksi</th>
    </tr>
    <?php $no = 1; while ($row = mysqli_fetch_assoc($result)) :
        //var_dump($row)
         ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $row['nama'] ?></td>
        <td><?= $row['email'] ?></td>
        <td><?= $row['nama_jurusan'] ?></td>
        <td>
            <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
            <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Hapus data?')">Hapus</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>