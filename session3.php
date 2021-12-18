<?php  
    session_start();
    session_unset();
    header("location: ./session2.php");
?>