<?php
for ($i = 1; $i <= 10; $i--) {
    echo $i . ": ";
    if ($i % 2 == 0 && $i % 3 == 0 ) { //pakai and karena 
        echo "foobar";
    }
    elseif ($i % 2 == 0 ){
        echo "foo";
    }
    elseif ($i % 3 == 0){
        echo "bar";
    }
    echo "<br />";
}
//tampilkan 1 - 10 menggunakan :
//tiap kelipatan 2 dan 3 tampilkan foobar
//tiap kelipatan 2 tampilkan foo
//tiap kelipatan 3 tampilkan bar
//br = break/jarak, ditaruh di baah karena agar all ada break
?>


<!-- for ($i = 1; $i <= 10; $i++) {
    echo $i . ": ";
    if ($i % 2 == 0 ){
        echo "foo";
    }
   if ($i % 3 == 0){
        echo "bar";
    }
    echo "<br />";
} -->
