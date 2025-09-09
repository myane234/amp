<?php
include 'koneksi.php';

$id = intval($_GET['id']);

mysqli_query($conn, "DELETE FROM mahasiswa WHERE id=$id LIMIT 1");

header("Location: index.php");
exit();
?>