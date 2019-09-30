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
    <title>Add Record</title>

    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/dashboard.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="./fontawesome/css/brand.css">
    <link rel="stylesheet" href="./fontawesome/css/solid.css">
    <link rel="stylesheet" href="./alertify/css/alertify.css">

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
            <!-----------form card------------>
            <div class="card w-75">
                <div class="card-body">
                    <h5 class="card-title"><span class="fa fa-plus-square"></span> Add New Record</h5>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" name="firstName" id="firstName" class="form-control" placeholder="First Name" required>
                            </div>

                            <div class="col-md-4">
                                <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Last Name" required>
                            </div>

                            <div class="col-md-4">
                                <select name="gender" id="gender" class="form-control gender" style="cursor:pointer;" required>

                                    <option value="">Select Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <input type="text" name="fatherName" id="fatherName" class="form-control" placeholder="Father Name" required>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="number" name="srNo" id="srNo" class="form-control" placeholder="Sr. No" required>
                            </div>

                            <div class="col-md-4">
                                <input type="number" name="voteNumber" id="voteNumber" class="form-control" placeholder="Vote Number" required>
                            </div>

                            <div class="col-md-4">
                                <input type="text" name="idNumber" id="idNumber" class="form-control" placeholder="ID Number" required>
                            </div>
                        </div>
                        <br>
                        <!------------row 1 end----------->
                        <div class="row">
                            <div class="col-md-4">
                                <input type="number" name="mobileNumber" id="mobileNumber" class="form-control" placeholder="Mobile Number" required>
                            </div>

                            <div class="col-md-4">
                                <input type="number" name="aadharNumber" id="voteNumber" class="form-control" placeholder="Aadhar Number" required>
                            </div>

                            <div class="col-md-4">
                                <input type="file" name="aadharImage" accept="image/*" id="aadharImage" class="form-control" placeholder="aadharImage" required>
                            </div>
                        </div>
                        <br>
                        <hr>

                        <!-------------------------family Information -------------->
                        <center> <button type="button" class="btn btn-success mb-4" onClick="addFamilyMember()"> <i class="fa fa-plus-square"></i> Add Member</button>
                            <button type="button" class="btn btn-danger mb-4" onClick="removeFamilyMember()"> <i class="fa fa-times-circle"></i> Remove Member</button> </center>

                        <div class="row familyInfoDiv mb-2">
                            <div class="col-md-3">
                                <input type="text" name="familyMemberName[]" id="familyMemberName" class="form-control" max="10" placeholder="Family Member Name" required>
                            </div>

                            <div class="col-md-3">
                                <select name="familyMemberGender[]" id="familyMemberGender" class="form-control familyMemberGender" style="cursor:pointer;" required>

                                    <option value="">Select Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                            </div>

                            <div class="col-md-3">
                                <input type="text" name="familyVoteNumber[]" id="familyVoteNumbers" class="form-control" placeholder="Member Vote Number" required>
                            </div>

                            <div class="col-md-3">
                                <input type="text" name="familyIdNumber[]" id="familyIdNumber" class="form-control" placeholder="ID Number" required>
                            </div>
                        </div>

                        <div class="extendedDiv"></div>
                        <!-------------------------family Information -------------->

                        <button class="btn btn-primary" type="submit" name="addRecord">
                            <i class="fa fa-save"></i> Save
                        </button>
                    </form>
                </div>
            </div>
            <!-----------form card---------->
        </center>
    </div>
    <!-----------------------container--------------------->


    <?php
    // *footer include
    include "./utils/footer.php";
    ?>


    <script>
        function addFamilyMember() {
            let myClone = ` <div class="row familyInfoDiv mb-2">
                            <div class="col-md-3">
                                <input type="text" name="familyMemberName[]" id="familyMemberName" class="form-control" max="10" placeholder="Family Member Name" required>
                            </div>

                            <div class="col-md-3">
                                <select name="familyMemberGender[]" id="familyMemberGender" class="form-control familyMemberGender" style="cursor:pointer;" required>

                                    <option value="">Select Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                            </div>


                            <div class="col-md-3">
                                <input type="text" name="familyVoteNumber[]" id="familyVoteNumbers" class="form-control" placeholder="Member Vote Number" required>
                            </div>

                            <div class="col-md-3">
                                <input type="text" name="familyIdNumber[]" id="familyIdNumber" class="form-control" placeholder="ID Number" required>
                            </div>
                        </div>`;
            $(".extendedDiv").append(myClone);
        }

        function removeFamilyMember() {
            myFormLength = $(".familyInfoDiv").length;

            if (myFormLength > 1) {

                $(".familyInfoDiv:last").remove();
            }


        }
    </script>

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
    $familyMemberName = $_POST["familyMemberName"];
    $familyVoteNumber = $_POST["familyVoteNumber"];
    $familyIdNumber = $_POST["familyIdNumber"];
    $familyMemberGender = $_POST["familyMemberGender"];
    $userId = $_SESSION["user_id"];
    include "./db.php";
    $sql = "SELECT family_head_id FROM family_head_info WHERE aadhar_number='$aadharNumber' AND status='Active'";
    $result = $conn->query($sql);
    if ($row = $result->fetch_assoc()) {
        // * if record exists
        ?>
        <script>
            alertify.alert("Sorry Record Already Exist!")
        </script>
        <?php
            } else {
                $sql1 = "INSERT INTO family_head_info(first_name,last_name,gender,father_name,serial_number,vote_number,id_number,mobile_number,aadhar_number,image_name,create_by,update_by)VALUES('$firstName','$lastName','$gender','$fatherName','$serialNumber','$voteNumber','$idNumber','$mobileNumber','$aadharNumber','$aadharNumber.jpg','$userId','$userId')";

                $result1 = $conn->query($sql1);
                if ($result == TRUE) {
                    //    * if reccord saved
                    $last_insert_id = $conn->insert_id;

                    for ($i = 0; $i < count($familyMemberName); $i++) {
                        $sql2 = "INSERT INTO family_member_info(family_head_id,family_member_name,family_member_gender,family_member_vote_number,family_member_id_card_number,added_by,updated_by)VALUES('$last_insert_id','$familyMemberName[$i]','$familyMemberGender[$i]','$familyVoteNumber[$i]','$familyIdNumber[$i]','$userId','$userId')";

                        $result2 = $conn->query($sql2);
                    }

                    ?>
            <script>
                alertify.alert("Record Saved!")
            </script>
        <?php
                } else {
                    //    * if reccord not saved
                    ?>
            <script>
                alertify.alert("Sorry Record Not Saved!")
            </script>
        <?php

                }

                // *if record not exist               
                if (file_exists("upload/aadhaarCardImages/$aadharNumber/")) {
                    // * if directory exists doing nothing
                } else {
                    mkdir("upload/aadhaarCardImages/$aadharNumber/", 0777, true);
                }

                // * upload image
                if (move_uploaded_file($aadharImage, $aadhar_image_destination)) {
                    // * if image upload
                } else {
                    // * if image not upload
                    ?>
            <script>
                alertify.alert("");
            </script>
<?php
        }
    }
}
?>



</html>