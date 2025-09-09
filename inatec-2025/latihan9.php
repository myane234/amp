<?php
//switch mirip if tapi cek dulu
//lu mau cek mana?
$warna = "black"; //kalau ini massuk ke case black
switch ($warna) {
    case "black":
        echo "Warna Hitam";
        break;
    case "white":
        echo "Warna Putih";
        break;
    default:
        echo "Warna tidak terdeteksi, kocak";
}

?>