<?php

$contoh = "smk negeri 2 jakarta - gambir - jakarta pusat"; #gunanya untuk manipulasi ssstring

echo "strlen(): " . strlen($contoh) . "<br />";  #Menghitung panjang srtring.//berapa banak karakter
echo "str_replace(): " . str_replace("smk", "sma", $contoh) . "<br />";  //aliassss
echo "strtolower(): " . strtolower($contoh) . "<br />";  //huruf kecil sssmwwwa
echo "strtoupper(): " . strtoupper($contoh) . "<br />";  //huruf besssar ssssmwa
echo "ucfirst(): " . ucfirst($contoh) . "<br />";  //huruf awwwal yang bessar (Smk)
echo "ucwords(): " . ucwords($contoh) . "<br />"; //huruf awwwwal ssemua huruf jadi kapital
?> 
