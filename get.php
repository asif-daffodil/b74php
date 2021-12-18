<?php  
    if(!isset($_GET['id'])){
       header("location: ./".basename($_SERVER['PHP_SELF'])."?id=1");
    }
    echo $_GET['id'];
?>
<br>
<a href="./<?= basename($_SERVER['PHP_SELF']); ?>?id=1">1</a>
<a href="./<?= basename($_SERVER['PHP_SELF']); ?>?id=2">2</a>
<a href="./<?= basename($_SERVER['PHP_SELF']); ?>?id=3">3</a>
<a href="./<?= basename($_SERVER['PHP_SELF']); ?>?id=4">4</a>