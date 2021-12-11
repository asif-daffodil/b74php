<?php
    $age = -55;
    if ($age <= 12 && $age > 0) {
        echo "You are a baby";
    }elseif($age <= 19 && $age > 12){
        echo "You are a teenager";
    }elseif($age <= 29 && $age > 19){
        echo "You are a young";
    }elseif($age <= 49 && $age > 29){
        echo "You are a middle aged person";
    }elseif ($age >= 50 && $age <= 150) {
        echo "You are an old person";
    }else{
        echo "You are not in this world";
    }

    echo "<br>";

    $age = 10;
    switch ($age) {
        case ($age <= 12 && $age > 0):
            echo "You are a baby";
            break;
        
        case ($age <= 19 && $age > 12):
            echo "You are a baby";
            break;    

        default:
            echo "Joy Bangla";
            break;
    }
?>