<?php  
    $conn = new PDO("mysql:host=localhost; dbname=b74c1", "root", "");
    function safe ($data) {
        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
    }
?>
<a href="./add.php"><button>Add Data</button></a>
<a href="./all.php"><button>All Data</button></a>
<br><br>