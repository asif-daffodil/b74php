<?php  
    $x = "We live in Bangladesh. Murad Takla is in canada now";
    echo strlen($x)."<br>";
    echo str_word_count($x)."<br>";
    echo strrev($x)."<br>";
    echo str_replace("We", "I", $x)."<br>";
    echo substr($x, 0, 22)."<br>";
    $y = "kamal_mia.jpg";
    echo substr($y, -4)."<br>";
    echo strpos($y, ".png")
?>