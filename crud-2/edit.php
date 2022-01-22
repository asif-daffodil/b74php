<?php
   include_once("common.php");
   $id = $_GET['id'] ?? header("location: index.php");
   $preData = $conn->query("SELECT * FROM `users` WHERE `id` = $id");
   ($preData->num_rows != 1)? header("location: index.php"):null;
   $preData = $preData->fetch_object();

    if (isset($_POST['update'])) {
        $uname = safe($_POST['uname']);

        if(empty($uname)){
            echo "<script>alert('Please provide all the data')</script>";
        }else{
            $uname = $conn->real_escape_string($uname);
            $update = $conn->query("UPDATE `users` SET `uname` = '$uname' WHERE `id` = $id");
            if($update) {
                echo "<script>alert('User update successfully'); location.href='index.php'</script>";
            }else{
                echo "<script>alert('something went wrong')</script>";
            }
        }
    }
?>

<form action="" method="post">
    <input type="text" placeholder="user name" name="uname" value="<?= $uname ?? $preData->uname; ?>">
    <input type="submit" value="Update User" name="update">
</form>