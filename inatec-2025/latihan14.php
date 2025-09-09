<?php

// for ($x = 5; $x >= 0; $x--) { 
//     for ($y = 0; $y <= $x; $y++) {
//         echo "*";
//     }
//     echo "<br />";
// }

for ($x = 5; $x > 0; $x--){
    for($y = 1; $y <= $x; $y++){
        echo "&nbsp;";
    }
    for($z = 5; $z > $x; $z--){
        echo "*";
    }
    echo "<br />";
}


?>

<?php

for ($x = 5; $x > 0; $x--){
    for($y = 1; $y <= $x; $y++){
        echo "&nbsp;";
        echo "&nbsp;";
    }
    for($z = 5; $z > $x; $z--){
        echo "😗";
    }
    echo "<br />";
}

?>


