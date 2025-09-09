<?php
//if condition, ada if, {}elseif,else;ternary

$warna = "black";
$ukuran = "besar"; ///ini bisa dihilangkan

if($warna == "white"){ //bisa ada if di dalam if
    if($ukuran == "besar"){ //ini ada karena di atas ada $ukuran
        echo "Warna Putih Besar";
    }else{
        echo "Warna Putih Kecil";
    }
    //echo "Warna Putih";
//}elseif($warna == "black"){}    
}elseif($warna == "black" && $ukuran == "Besar"){
    echo "Warna Hitam Besar";
}elseif($warna == "black" && $ukuran == "Kecil"){
    echo "Warna Hitam Kecil";
}else{
    echo "Warna Tidak Terdeteksi"; //else tidak digunakan tidak apa //php sangat sensitif terhadap ;, semua line harus diakhiri dengannya
}
?>