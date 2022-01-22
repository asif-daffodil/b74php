<?php
    include_once("common.php");
    $id = $_GET['id'] ?? header("location: index.php");
    $preData = $conn->query("SELECT * FROM `users` WHERE `id` = $id");
    ($preData->num_rows != 1)? header("location: index.php"):null;
    $preData = $preData->fetch_object();
    if (isset($_POST['del'])) {
        $uid = safe($_POST['id']);
        $uid = $conn->real_escape_string($uid);
        $delete = $conn->query("DELETE FROM `users` WHERE id = $uid");
            if($delete) {
                echo "<script>alert('User has been deleted'); location.href='index.php'</script>";
            }else{
                echo "<script>alert('something went wrong')</script>";
            }
    }
    
?>

Do you realy want to delete the data? <br>
<a href="index.php"><button>No</button></a>
<form action="" method="post" style="display: inline;">
    <input type="hidden" value="<?= $id ?>" name="id">
    <button type="submit" name="del">Yes</button>
</form>
