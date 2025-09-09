<?php //melakukan eksekusi di dalam file nya sendiri
if ($_SERVER['REQUEST_METHOD'] === 'POST') { //POT digunakan untuk mengirim data, data muncul di halaman itu sendiri
    $nama = $_POST['nama'] ?? '';
    echo "Nama yang dikirim : $nama";
} else {
    echo "Silahkan isi form dibawah ini !";
}
?>

    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
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