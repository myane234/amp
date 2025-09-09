<!DOCTYPE html>
<html>
<head>
    <title>KalkuGam</title>
</head>
<body>
    <h2>Kalkulator PHP Native</h2>

    <form method="post" action="">
        <label>Angka 1:</label>
        <input type="number" name="angka1" required><br><br>

        <label>Angka 2:</label>
        <input type="number" name="angka2" required><br><br>

        <label>Operasi:</label>
        <select name="operasi">
            <option value="tambah">Tambah (+)</option>
            <option value="kurang">Kurang (-)</option>
            <option value="kali">Kali (×)</option>
            <option value="bagi">Bagi (/)</option>
        </select><br><br>

        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operasi = $_POST['operasi'];
        $hasil = 0;
        $simbol = '';

        switch ($operasi) {
            case 'tambah':
                $hasil = $angka1 + $angka2;
                $simbol = '+';
                break;
            case 'kurang':
                $hasil = $angka1 - $angka2;
                $simbol = '-';
                break;
            case 'kali':
                $hasil = $angka1 * $angka2;
                $simbol = '×';
                break;
            case 'bagi':
                if ($angka2 != 0) {
                    $hasil = $angka1 / $angka2;
                    $simbol = '/';
                } else {
                    echo "<p style='color:red;'>Angka 2 tidak boleh nol!</p>";
                    exit;
                }
                break;
        }

        echo "<h3>Hasil Perhitungan</h3>";
        echo "<p>$angka1 $simbol $angka2 = $hasil</p>";
    }
    ?>
</body>
</html>