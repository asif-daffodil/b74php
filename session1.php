<?php  
    session_start();

    $_SESSION['name'] = "Asif Abir";
    $_SESSION['gender'] = "Male";

    header("location: ./session2.php");
?>