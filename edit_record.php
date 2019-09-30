<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    ?>
    <script>
        window.location.href = "./index.php";
    </script>
<?php
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Record</title>

    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/dashboard.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="./fontawesome/css/brand.css">
    <link rel="stylesheet" href="./fontawesome/css/solid.css">
    <link rel="stylesheet" href="./alertify/css/alertify.css">
    <style>
        body {
            background-color: #fafafa;
        }
    </style>
</head>



<body>
    <?php
    // *header include
    include "./utils/header.php";
    ?>
    <br>
    <br>
    <br>
    <br>
    <!-----------------------container--------------------->
    <div class="container">
        <center>
            <?php

            if (isset($_GET["family_head_id"])) {
                include "./db.php";
                $family_head_id = $_GET["family_head_id"];
                $sql = "SELECT * FROM family_head_info where family_head_id='$family_head_id'";
                $result = $conn->query($sql);
                if ($row = $result->fetch_assoc()) {
                    // * if records Exist                    
                    ?>
                    <!-----------form card------------>
                    <div class="card w-75">
                        <div class="card-body">
                            <h5 class="card-title"><span class="fa fa-edit"></span> Edit Record</h5>
                            <hr>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <span style="font-weight:600">First Name:</span>
                                            </div>

                                            <div class="col-sm-8">
                                                <input type="text" value="<?php echo $row['first_name']; ?>" name="firstName" id="firstName" class="form-control" placeholder="First Name" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <span style="font-weight:600">Last Name:</span>
                                            </div>

                                            <div class="col-sm-8">
                                                <input type="text" value="<?php echo $row['last_name']; ?>" name="lastName" id="lastName" class="form-control" placeholder="Last Name" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <span style="font-weight:600">Gender:</span>
                                            </div>

                                            <div class="col-sm-8">
                                                <select name="gender" id="gender" class="form-control gender" style="cursor:pointer;" required>
                                                    <option><?php echo $row['gender']; ?></option>
                                                    <option value="">Select Gender</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                    <option>Other</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <span style="font-weight:600">Father Name:</span>
                                            </div>

                                            <div class="col-sm-8">
                                                <input type="text" value="<?php echo $row['father_name']; ?>" name="fatherName" id="fatherName" class="form-control" placeholder="Father Name" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <span style="font-weight:600">Sr. No.:</span>
                                            </div>

                                            <div class="col-sm-8">
                                                <input type="number" value="<?php echo $row['serial_number']; ?>" name="srNo" id="srNo" class="form-control" placeholder="Sr. No" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <span style="font-weight:600">Vote Number:</span>
                                            </div>

                                            <div class="col-sm-8">
                                                <input type="number" value="<?php echo $row['vote_number']; ?>" name="voteNumber" id="voteNumber" class="form-control" placeholder="Vote Number" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <span style="font-weight:600">ID Number:</span>
                                            </div>

                                            <div class="col-sm-8">
                                                <input type="text" value="<?php echo $row['id_number']; ?>" name="idNumber" id="idNumber" class="form-control" placeholder="ID Number" required>

                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <span style="font-weight:600">Mobile No.:</span>
                                            </div>

                                            <div class="col-sm-8">
                                                <input type="number" value="<?php echo $row['mobile_number']; ?>" name="mobileNumber" id="mobileNumber" class="form-control" placeholder="Mobile Number" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <span style="font-weight:600">Aadhaar No.:</span>
                                            </div>

                                            <div class="col-sm-8">
                                                <input type="number" value="<?php echo $row['aadhar_number']; ?>" name="aadharNumber" id="voteNumber" class="form-control" placeholder="Aadhar Number" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <span style="font-weight:600">Image:</span>
                                            </div>

                                            <div class="col-sm-8">
                                                <input type="file" name="aadharImage" accept="image/*" id="aadharImage" class="form-control" placeholder="aadharImage" required>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <br>
                                <button class="btn btn-dark" type="submit" name="addRecord">
                                    <i class="fa fa-save"></i> Update
                                </button>
                            </form>


                            <!-------------------second form ------------->

                            <!-------------------second form end------------->
                        </div>
                    </div>
                    <!-----------form card---------->
                <?php
                    }
                    ?>


            <?php
            } else {
                // * if family head id not exist then hide form
            }
            ?>
        </center>
    </div>
    <!-----------------------container--------------------->


    <?php
    // *footer include
    include "./utils/footer.php";
    ?>




    <script src="./js/jquery.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.min.js"></script>
    <script src="./alertify/js/alertify.js"></script>
</body>

<?php
if (isset($_POST["addRecord"])) {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $fatherName = $_POST["fatherName"];
    $gender = $_POST["gender"];
    $serialNumber = $_POST["srNo"];
    $voteNumber = $_POST["voteNumber"];
    $idNumber = $_POST["idNumber"];
    $mobileNumber = $_POST["mobileNumber"];
    $aadharNumber = $_POST["aadharNumber"];
    $aadharImage = $_FILES["aadharImage"]["tmp_name"];
    $aadhar_image_destination = "upload/aadhaarCardImages/$aadharNumber/$aadharNumber.jpg";
    $userId = $_SESSION["user_id"];
    include "./db.php";

    if (file_exists("upload/aadhaarCardImages/$aadharNumber/")) {
        // * if directory exists doing nothing
    } else {
        mkdir("upload/aadhaarCardImages/$aadharNumber/", 0777, true);
    }

    // * upload image
    if (move_uploaded_file($aadharImage, $aadhar_image_destination)) {
        // * if image upload

        $sql = "UPDATE family_head_info SET first_name='$firstName',last_name='$lastName',gender='$gender',father_name='$fatherName',serial_number='$serialNumber',vote_number='$voteNumber',id_number='$idNumber',mobile_number='$mobileNumber',aadhar_number='$aadharNumber',image_name='$aadharNumber.jpg',create_by='$userId',update_by='$userId'";

        $result = $conn->query($sql);

        if ($result == TRUE) {
            ?>
            <script>
                alertify.alert("Yay! Record Updated");
            </script>
        <?php
                } else {
                    ?>
            <script>
                alertify.alert("Sorry! Record Not Updated");
            </script>
        <?php
                }
            } else {
                // * if image not upload
                ?>
        <script>
            alertify.alert("Sorry Image Not Updated.");
        </script>
<?php
    }
}
?>



</html>