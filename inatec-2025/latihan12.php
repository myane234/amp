<?php
for($x = 1; $x <= 30; $x++){
    if($x % 4 == 0){
        echo  $x . "<br />";
        for($y = $x+4; $y > $x; $y--){
            echo $y;
        }
        echo "<br />";
        $x = $x + 4;
    }else{
        echo $x;
    }
}