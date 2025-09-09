<?php
include 'koneksi.php';


$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id=$id" );
$row = mysqli_fetch_assoc($data);

// Proses Update
if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $jurusan = $_POST['jurusan'];

    $query = "UPDATE mahasiswa SET nama='$nama', email='$email', jurusan='$jurusan' WHERE id=$id";
    mysqli_query($conn, $query);

    header("Location: index.php");
    exit();
}
?>

<h2>Edit Data Mahasiswa</h2>
<form method="POST" action="">
    Nama: <input type="text" name="nama" value="<?= $row['nama']?>" required><br><br>
    Email: <input type="email" name="email" value="<?= $row['email']?>" required><br><br>
    Jurusan: 
    <select name="jurusan_id" required>
        <option value="">Pilih Jurusan</option>
        <?php while ($j = mysqli_fetch_assoc($jurusan_list)): ?>
            <option value="<?= $j['id'] ?>" <?= ($edit_data['jurusan_id'] ?? '') == $j['id'] ? 'selected' : '' ?>>
                <?= $j['nama_jurusan'] ?>
            </option>
                <?php endwhile; ?>
        </select><br><br>
    <button type="submit" name="update">Update</button>
</form>
<a href="index.php">Kembali</a>