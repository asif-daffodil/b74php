<?php  
    $conn = mysqli_connect('localhost', 'root', '', 'b74c2');
    function safe ($data) {
        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
    }
?>