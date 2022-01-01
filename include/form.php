<?php 
    include_once("./header.php"); 
    include_once("./countryCode.php");
    if (isset($_POST['addstu123']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = safe($_POST['name']);
        $email = safe($_POST['email']);
        $ccode = safe($_POST['ccode']);
        $phone = safe($_POST['phone']);
        $gender = safe($_POST['gender'] ?? null);
        $skills = safe($_POST['skills'] ?? null);
        $imgName = $_FILES['img']['name'];
        $tmp_img = $_FILES['img']['tmp_name'];
        
        if (empty($name)) {
            $errNameClass = "is-invalid";
            $errNameMsg = "Please write your name";
        }elseif(!preg_match("/^[A-Za-z. ]*$/", $name)){
            $errNameClass = "is-invalid";
            $errNameMsg = "Invalid Name format";
        }
    }

    function safe ($data) {
        $kata = htmlspecialchars($data);
        $tata = trim($kata);
        $fata = stripslashes($tata);
        return $fata;
    }
?>
    <div class="container">
        <div class="row min-vh-100 d-flex">
            <div class="col-md-5 m-auto border shahow px-4 py-5">
                <h2 class="mb-4">Add Student</h2>
                <form action="<?= substr(basename($_SERVER['PHP_SELF']), 0, -4); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control <?= $errNameClass ?? null; ?>" placeholder="Student Name" name="name">
                        <label for="">Student Name</label>
                        <div class="invalid-feedback">
                                <?= $errNameMsg ?? null; ?>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" placeholder="Email Address" name="email">
                        <label for="">Email Address</label>
                        <div class="invalid-feedback">
                                
                        </div>
                    </div>
                    <div class="mb-3 input-group">
                        <select class="form-select" name="ccode">
                            <?php foreach ($cc as $code => $country) { ?>
                                <option value="<?= $code;?>">+<?= $code; ?></option>
                            <?php } ?>
                        </select>
                        <input type="text" class="form-control w-75" placeholder="Phone Number" name="phone">
                        <div class="invalid-feedback">
                                
                        </div>
                    </div>
                    <div class="form-control">
                        <div class="form-check-inline">
                            <label for="" class="form-check-label">
                                Gender :
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="gender">
                            <label for="form-check-label">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="gender">
                            <label for="" class="form-checl-label">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="gender">
                            <label for="" class="form-check-label">Others</label>
                        </div>
                    </div>
                    <div class="invalid-feedback">
                                
                    </div>
                    <div class="mb-3"></div>
                    <div class="form-control">
                        <div class="form-check-inline">
                            <label for="" class="form-check-label">Skills :</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input" name="skills[]">
                            <label for="" class="form-check-label">HTML</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input" name="skills[]">
                            <label for=""class="form-check-label">CSS</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input" name="skills[]">
                            <label for="" class="form-check-label">JS</label>
                        </div>
                        <div class="from-check form-check-inline">
                            <input type="checkbox" class="form-check-input" name="skills[]">
                            <label for="" class="form-check-label">jQuery</label>
                        </div>
                    </div>
                    <div class="invalid-feedback"></div>
                    <div class="mb-3"></div>
                    <div class="input-group form-control">
                        <input type="file" class="form-control d-none" id="imgup" name="img">
                        <label for="imgup" class="input-group-text w-100 fs-5 d-flex- justify-content-center">Upload Student Image</label>
                    </div>
                    <div class="invalid-feedback"></div>
                    <div class="mb-3"></div>
                    <input type="submit" value="Add Student" class="btn btn-primary" name="addstu123">
                </form>
            </div>
        </div>
    </div>
<?php include_once("./footer.php") ?>