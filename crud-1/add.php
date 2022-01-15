<?php  
    // $conn = mysqli_connect("localhost", "root", "", "b74c1");
    include_once("./nav.php");
    if (isset($_POST['sub123']) || $_SERVER['REQUEST_METHOD'] === 'POST') {
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
           $insert_query = "INSERT INTO `users` (`name`, `city`) VALUES (:name, :city)";
           $insert_prepare = $conn->prepare($insert_query);
           $insert = $insert_prepare->execute([':name' => $crrName, ':city' => $crrCity]);
           if($insert){
                $succMsg = "<span style='color: green;'>Data Inserted Successfully</span>";
           }else{
                $succMsg = "<span style='color: red;'>Something went wrong</span>";
           }
       }

        // if (isset($crrName) && isset($crrCity)) {
        //     $insert_query = "INSERT INTO `users` (`name`, `city`) VALUES ('$crrName', '$crrCity')";
        //     $insert = $conn->query($insert_query);
        //     if($insert){
        //         $succMsg = "<span style='color: green;'>Data Inserted Successfully</span>";
        //     }else{
        //         $succMsg = "<span style='color: red;'>Something went wrong</span>";
        //     }
        // }
    }

    $select_query = "SELECT * FROM `users`";
    $select = $conn->query($select_query);

?>
<?= $succMsg ?? null; ?>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="text" placeholder="Your Name" name="name">
    <?= $errMsg ?? null; ?>
    <br><br>
    <input type="text" placeholder="Your City" name="city">
    <?= $errCity ?? null ?>
    <br><br>
    <input type="submit" value="Add Data" name="sub123">
</form>

