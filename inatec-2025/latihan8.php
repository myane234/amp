<?php
//ternary, cuman jawaban bener salah dan tdk kompleks
$warna = "black";
$ukuran = "besar";

//echo  $warna == "black" ? "warna Hitam" : "Warna Tidak terdeteksi"
?>



<?php if($warna == "white"): ?> //jika ada html lebih baik ini
    <?php if($ukuran == "besar"):?>
        <h1>Warna Putih Besar</h1>
    <?php else: ?>
        <h1>Warna Putih Kecil</h1>
    <?php endif;?>
<?php else: ?>
    <h1>Warna Tidak Terdeteksi</h1>
<?php endif; ?>