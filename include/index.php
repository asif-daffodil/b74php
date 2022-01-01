<?php include_once("./header.php") ?>
    <div class="container">
        <div class="row py-5">
            <div class="col-md-6 m-auto text-center fs-1">
                <?= basename($_SERVER['PHP_SELF']); ?>
            </div>
        </div>
    </div>
<?php include_once("./footer.php") ?>



<!-- 
if (basename($_SERVER['PHP_SELF']) == "index.php") {
    echo "active";
}else{
    echo null;
}
(basename($_SERVER['PHP_SELF']) == "index.php")? "active":null; 
-->