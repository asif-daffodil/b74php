<?php  
    echo readfile("./myFile.txt")."<br>";

    $opn = fopen("./myFile.txt", "r");
    echo fread($opn, filesize("./myFile.txt"))."<br>";
    fclose($opn);

    // echo fread($opn, filesize("./myFile.txt"));
    // echo filesize("./myFile.txt");

    $opn = fopen("./myFile.txt", "r");
    while (!feof($opn)) {
       echo fgets($opn)."<br>";
    }
    fclose($opn);

    $kamal = fopen("./dipti.txt", 'a');
    fwrite($kamal, "Kamal is not a bad boy\n");
    fclose($kamal);

    $opn = fopen("./dipti.txt", "r");
    while (!feof($opn)) {
       echo fgets($opn)."<br>";
    }
    fclose($opn);

    $opn = fopen("./test.pdf", "w");
    fwrite($opn, "halum");
    fclose($opn);

    mkdir("./dhaka");
?>