<?php

    if (isset($_POST['addStu123'])) {
       $sname = $_POST['sname'];
       $semail = $_POST['semail'];
       $sgen = $_POST['sgen'] ?? null;
       $sski = $_POST['sski'] ?? null;

       if (empty($sname)) {
           $err_sname = "<span style='color:red'>Please write your name</span>";
       }elseif(!preg_match('/^[A-Za-z. ]*$/', $sname)){
            $err_sname = "<span style='color:red'>Invalid name format</span>";
       }else{
           $crrSname = $sname;
       }

       if (empty($semail)) {
           $err_email = "<span style='color:red'>Please write your email address</span>";
       }elseif(!filter_var($semail, FILTER_VALIDATE_EMAIL)){
            $err_email = "<span style='color:red'>Invalid email address</span>";
       }else{
           $crrSemail = $semail;
       }

       if (empty($sgen)){
        $err_gen = "<span style='color:red'>Please select your gender</span>";
       }else{
           $crrSgen = $sgen;
       }

       if (empty($sski)){
        $err_ski = "<span style='color:red'>Please select your skills</span>";
       }else{
           $crrSski = $sski;
       }

       if (isset($crrSname) && isset($crrSemail) && isset($crrSgen) && isset($crrSski)) {
            $succMsg =  "<span style='color:green'>Your Name : $crrSname <br> Your Email : $crrSemail <br> Your Gender : $crrSgen <br> Your Skills : ".implode(", ", $crrSski)."</span>";
       }
    }
?>
<form action="" method="post">
    <input type="text" placeholder="Your Name" name="sname" value="<?= $sname ?? null ?>">
    <?= $err_sname ?? null ; ?>
    <br><br>
    <input type="text" placeholder="Your Email" name="semail" value="<?= $semail ?? null ?>">
    <?= $err_email ?? null ?>
    <br><br>
    Gerder :
    <input type="radio" name="sgen" value="Male" <?= (isset($sgen) && $sgen == "Male")? "checked":null ?> >Male
    <input type="radio" name="sgen" value="Female" <?= (isset($sgen) && $sgen == "Female")? "checked":null ?> >Female
    <?= $err_gen ?? null ?>
    <br><br>
    Skills : 
    <input type="checkbox" name="sski[]" value="HTML" <?= (isset($sski) && in_array("HTML", $sski))? "checked":null; ?> > HTML
    <input type="checkbox" name="sski[]" value="CSS" <?= (isset($sski) && in_array("CSS", $sski))? "checked":null; ?> > CSS
    <input type="checkbox" name="sski[]" value="Bootstrap" <?= (isset($sski) && in_array("Bootstrap", $sski))? "checked":null; ?>> Bootstrap
    <input type="checkbox" name="sski[]" value="jQuery" <?= (isset($sski) && in_array("jQuery", $sski))? "checked":null; ?>> jQuery
    <?= $err_ski ?? null; ?>
    <br><br>
    <input type="submit" value="Add Student" name="addStu123">
</form>

<?= $succMsg ?? null; ?>