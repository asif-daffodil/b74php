<?php  
    function myFunc ($fname = "Asif", $lname = "Abir") {
       echo $fname." ".$lname."<br>"; 
    }

    myFunc("Sagar", "Takla");
    myFunc("Murad", "Chowdhury");
    myFunc();
    myFunc("Md");
    myFunc(null, "Asif");

    $x = "Jamal";
    $y = "Khan";
    myFunc($x, $y);
?>