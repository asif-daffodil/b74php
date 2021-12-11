<?php  
    // Arithmetic operators
    // + - * / % **

    /* Assignment Operator
     * =
     * +=
     * -=
     * *=
     * /=
     * %=
     */
    $x = 5;
    $x += 3;
    echo $x; // $x = $x + 3
    echo "<br>";

    /* Comparison operator
     * ==
     * ===
     * !=
     * <>
     * !==
     * >
     * <
     * >=
     * <=
     * <=>
     */ 
    $a = 5;
    $b = "2";
    $c = 6;

    // if ($a == $b) {
    //     echo "Amar Bangladesh";
    // }

    // if ($a === $b) {
    //     echo "Amar Bangladesh";
    // }

    // if ($a !== $c) {
    //     echo "Amar Bangladesh";
    // }

    echo ($a <=> $b);
    echo "<br>";

    /* increment - decrement
     * ++
     * --
    */
    
    $m = 6;
    echo ++$m."<br>";
    echo $m++."<br>";
    echo --$m."<br>";
    echo $m--."<br>";
    echo $m."<br>";

    $n = 5;
    $n++;
    echo $n."<br>";

    /* logical operators
     * &&
     * and
     * ||
     * or
     * xor
     */ 

    $age_p1 = 25;
    $age_p2 = 35;

    if ($age_p1 > $age_p2 xor $age_p2 > 40 xor $age_p1 < 40) {
        echo "Vai-brother<br>";
    }

    /* Conditional assignment operator
     * ?:
     * ??
     */ 

    $city = "Dhaka"; 
    // if($city == "Dhaka"){
    //     return "Hi";
    // } else{
    //     return "Hello";
    // }

    
    echo ($city == "Dhaka")? "Hi":"Hello";
    echo "<br>";

    // if(isset($abc)){
    //     echo $abc;
    // }
    // echo (isset($abc))? $abc:null;
    echo $abc ?? null;
?>