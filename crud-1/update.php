<?php  
    include_once("./nav.php");
    if (!isset($_GET['id'])) {
       header("location: all.php");
    }else{
        $id = $_GET['id'];
    }

    $select = $conn->query("SELECT * FROM `users` WHERE id = $id");
    $PreData = $select->fetchObject();

    if (isset($_POST['up123']) || $_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = safe($_POST['name']);
        $city = safe($_POST['city']);
 
        if (empty($name)) {
            $errMsg = "<span style='color:red'>Please write your name</span>";
        }elseif (!preg_match("/^[A-Za-z. ]*$/", $name)) {
             $errMsg = "<span style='color:red'>Invalid name</span>";
        }else{
         //    $crrName = $conn->real_escape_string($name);
            $crrName = $name;
        }
 
        if (empty($city)) {
          $errCity = "<span style='color: red'>Please write your city</span>";
        }elseif (!preg_match("/^[A-Za-z0-9. ]*$/", $name)) {
          $errCity = "<span style='color:red'>Invalid name</span>";
        }else{
         $crrCity = $city;
         // $crrCity = $conn->real_escape_string($city);
        }
 
        if (isset($crrName) && isset($crrCity)) {
            
            $up_query = "UPDATE `users` SET `name` = :name, `city` = :city WHERE id = :id";
            $pre = $conn->prepare($up_query);
            $update = $pre->execute([
                ':name' => $crrName,
                ':city' => $crrCity,
                ':id' => $id
            ]);

            if($update){
                 $succMsg = "<span style='color: green;'>Data updated Successfully</span>";
                 $upName = $crrName;
                 $upCity = $crrCity;
                 echo '<meta http-equiv="refresh" content="2;url=./all.php" />';
            }else{
                 $succMsg = "<span style='color: red;'>Something went wrong</span>";
            }
        }
 
         
     }
 
?>

<?= $succMsg ?? null; ?>
<form action="<?= $_SERVER['PHP_SELF'].'?id='.$id ?>" method="post">
    <input type="text" placeholder="Your Name" name="name" value="<?= $upName ?? $PreData->name ?>">
    <?= $errMsg ?? null; ?>
    <br><br>
    <input type="text" placeholder="Your City" name="city" value="<?= $upCity ?? $PreData->city ?>">
    <?= $errCity ?? null ?>
    <br><br>
    <input type="submit" value="Update Data" name="up123">
</form>