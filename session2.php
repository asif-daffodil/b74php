<?php  
    session_start();
    if(isset($_SESSION['name']) && isset($_SESSION['gender'])){
        echo "you are loged in";
    }else{
        echo "you are log out";
    }

?>