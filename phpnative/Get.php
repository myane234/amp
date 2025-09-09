<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') { //GET digunakan untuk mengambil data, data muncul di url
    $nama = $_GET['nama'] ?? '';
    echo "Nama yang dikirim : $nama";
} else {
    echo "Silahkan isi form dibawah ini !";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="get">
    <table>
        <tr>
            <td>
                Nama
            </td>
            <td> <input type="text" name="nama" id=""></td>
        </tr>
    </table>
        <input type="submit" value="Kirim">
    </form>
</body>
</html>