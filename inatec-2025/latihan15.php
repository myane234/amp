<?php
// error_reporting(E_ERROR); untuk tampilin eror
// function sebuahFungsi(){
//     return "Ini adalah sebuah fungsi";
// }
// echo sebuahFungsi();
 //post ambil parameter di url
//isset gunanya untuk param ini  ada atau ga, apakah ada post alas


// function luasPersegi($sisi){
//     $luas = $sisi * $sisi;
//     return$luas;
// }

// function kelilingPersegi($sisi){
//     $keliling = 4 * $sisi;
//     return $keliling;
// }

// /**
//  * Ini adalah sebuah fungsi untuk
//  * menghitung luas dari sebuah
//  * segitiga dengan memberikan
//  * parameter alas dan tinggi
//  */

function luasSegitiga($alas, $tinggi)
{
    if(!is_numeric($_POST['alas']) && !is_numeric($_POST['tinggi'])){
        return"Alas dan Tinggi harus berupa angka";
    }
    if(!is_numeric($_POST['alas'])){
        return"Alas harus berupa angka";
    }
    if(!is_numeric($_POST['tinggi'])){
        return"Tinggi harus berupa angka";
    }
    $luas = $alas * $tinggi / 2;
    return "Luas: " . $luas;
}

// echo luasPersegi(25);
// echo kelilingPersegi(25);
// echo luasSegitiga(4, 8);
if (isset($_POST['alas']) && isset($_POST['tinggi'])) {

  echo luasSegitiga($_POST['alas'], $_POST['tinggi']);
}
?>
<form action="<?= $_SERVER['PHP_SELF'] ?>"method=post>
    <div>
        <label fof="alas">Alas</label>
        <input type="number" name="alas" id="las" />
    </div>
    <div>
        <label fof="tinggi">Tinggi</label>
        <input type="number" name="tinggi" id="tinggi" />
    </div>
    <div>
        <button type="submit">Kirim</button>
</div>
</form>