<?php  
    $x = 1;
    $a = 2;
    while ($x <= 10) {
        echo $a." X ".$x." = ".($x*$a)."<br>";
        $x++;
    }

    $y = 15;
    do {
        echo $y;
        $y++;
    } while ($y < 10);

    while ($y < 10) {
        echo $y;
        $y++;
    }

    echo "<br>";

    for ($i=0; $i <= 100; $i++) { 
        if($i % 2 == 0){
            echo $i,", ";
        }
    }

    // for ($i=0; $i <= 100; $i += 2) { 
    //      echo $i,", "; 
    // }

    // for ($i=0; $i <= 100; $i++) { 
    //     echo ($i % 2 == 0)? $i.", ":null;
    // }
?>