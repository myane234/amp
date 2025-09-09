<?php
include "koneksi.php";

$jurusan_data = mysqli_query($conn, "SELECT * FROM jurusan");

//print_r($jurusan_data);die;

?>

<h2>Form Tambah Mahasiswa</h2>
<form method="POST" action="index.php">
    Nama: <input type="text" name="nama" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Jurusan: <select name="jurusan" required>
        
    <option value=""> Pilih Jurusan </option>
    <?php while ($j = mysqli_fetch_assoc($jurusan_data)) : ?>
            <option value="<?= $j['id']?>"> <?= $j['nama_jurusan'] ?></option>
    <?php endwhile; ?>
    </select><br><br><br><br>

    <button type="submit" name="tambah">Tambah</button>
</form>
<a href="index.php">Kembali</a>