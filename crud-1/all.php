<?php
    include_once("./nav.php");
    $select_query = "SELECT * FROM `users`";
    $select = $conn->query($select_query);
?>

<table width="500" border="1" cellspacing="0" cellpadding="10">
    <tr>
        <td>S.N.</td>
        <td>Name</td>
        <td>City</td>
        <td>Action</td>
    </tr>
    <?php
    $x = 1;  
     while ($row = $select->fetchObject()) {
    ?>
        <tr>
            <td><?= $x; ?></td>
            <td><?= $row->name; ?></td>
            <td><?= $row->city; ?></td>
            <td>
                <a href="./update.php?id=<?= $row->id; ?>">Update</a>
                <a href="./delete.php?id=<?= $row->id; ?>">Dalete</a>
            </td>
        </tr>
    <?php
     $x++; }
    ?>
</table>