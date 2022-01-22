<?php  
    include_once("common.php");

    if (isset($_POST['add'])) {
        $uname = safe($_POST['uname']);
        $pass = safe($_POST['pass']);

        if(empty($uname) || empty($pass)){
            echo "<script>alert('Please provide all the data')</script>";
        }else{
            $uname = $conn->real_escape_string($uname);
            $pass = md5($conn->real_escape_string($pass));
            $insert = $conn->query("INSERT INTO `users` (`uname`, `pass`) VALUES ('$uname', '$pass')");
            if($insert) {
                echo "<script>alert('User inserted successfully')</script>";
            }else{
                echo "<script>alert('something went wrong')</script>";
            }
        }
    }

    $select = $conn->query("SELECT * FROM `users`");
?>

<form action="" method="post">
    <input type="text" placeholder="user name" name="uname">
    <input type="password" placeholder="Password" name="pass">
    <input type="submit" value="Add User" name="add">
</form>

<?php if ($select->num_rows > 0) { ?>
    <table>
        <tr>
            <td>S.N.</td>
            <td>User Name</td>
            <td>Action</td>
        </tr>
        <?php $x = 1; while($row = $select->fetch_object()) { ?>
            <tr>
                <td><?= $x; ?></td>
                <td><?= $row->uname; ?></td>
                <td>
                    <a href="edit.php?id=<?= $row->id; ?>"><button>Edit</button></a>
                    <a href="delete.php?id=<?= $row->id; ?>"><button>delete</button></a>
                </td>
            </tr>
        <?php $x++; } ?>
    </table>
<?php } ?>