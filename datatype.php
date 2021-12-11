<?php  
    // string
    $x = "Hello World";
    var_dump($x);
    echo "<br>";

    // integer
    $x = 123;
    var_dump($x);
    echo "<br>";

    // float
    $x = 123.321;
    var_dump($x);
    echo "<br>";

    // boolean
    $x = false;
    var_dump($x);
    echo "<br>";

    // null
    $x = null;
    var_dump($x);
    echo "<br>";

    // array
    $x = ['Dhaka', 'Rajshahi', 'Khulna'];
    var_dump($x);
    echo "<br>";

    // object
    class xyz {
        public $abc = "Dhaka";
    }
    $x = new xyz;
    var_dump($x);
    echo "<br>";

    // resourse
?>