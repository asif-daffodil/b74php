<?php  
    include_once("./nav.php");
    if (!isset($_GET['id'])) {
       header("location: all.php");
    }else{
        $id = $_GET['id'];
    }

    if(isset($_POST['del123']) && $_SERVER['REQUEST_METHOD'] === 'POST'){
        $del_id = $_POST['id'];
        $del_query = "DELETE FROM `users` WHERE id = :id";
        $pre = $conn->prepare($del_query);
        $delete = $pre->execute([':id' => $del_id]);
        if($delete) {
            $succMsg = "<span style='color: green;'>Data Deleted Successfully</span>";
            echo '<meta http-equiv="refresh" content="2;url=./all.php" />';
        }
    }
?>

<h2>Do you realy want to delete the data?</h2>

<form action="<?= $_SERVER['PHP_SELF'].'?id='.$id ?>" method="post" style="display: inline;">
    <input type="hidden" name="id" value="<?= $id ?>">
    <input type="submit" value="Yes" name="del123">
</form>
<a href="./all.php">
    <button>No</button>
</a>
<br><br>
<?= $succMsg ?? null; ?>