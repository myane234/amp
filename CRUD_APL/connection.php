<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "crud";

$conn = mysqli_connect($host, $user, $pass, $db);

// if (!$conn) {
//     die("koneksi gagal: " . mysqli_connect_error());
// }
// else {
//    echo "connected";
// }