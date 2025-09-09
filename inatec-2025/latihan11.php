<!-- <?php
//loop, for

for($x = 0; $x <= 5; $x++){
    echo "*";
} ?>  -->


 <?php
//loop, for

for($x = 0; $x <= 5; $x++){
    for ($y = 0; $y <= $x; $y++) {
        echo "*";
    }
    echo "<br />";
}


for($x = 1; $x <= 9; $x++){
    echo $x;

    if($x % 3 == 0){
        echo "<br />";
    }
} ?>