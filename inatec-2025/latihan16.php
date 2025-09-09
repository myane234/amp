<?php
//NESTED FUNCTION

$hasilAngka = array();
function dibagiDua($angka, $hasilAngka = []){
    if(empty($hasilAngka)){
    $hasilAngka[] = $angka;
    }
        $newAngka = $angka / 2;
        $hasilAngka[] =$newAngka;
        if($newAngka > 2){
            return dibagiDua($newAngka, $hasilAngka);
        }

        return $hasilAngka;
    }
    
echo implode("<br />", dibagiDua(80));
