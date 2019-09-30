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
    <title>Dashboard</title>

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
    <!-- dashboard -->
    <br><br><br><br>
    <div class="container">
        <!-- row start -->
        <div class="row">
            <div class="col-sm-4 ">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Welcome</h5>

                        <center>
                            <div class="rounded-circle bg-success text-center text-light" style="display:flex;align-items:center;justify-content:center;width:80px;height:70px">
                                <span style="font-size:34px;"> <?php
                                                                include "./function.php";
                                                                $userName = $_SESSION["user_id"];
                                                                echo showUserName($userName);
                                                                ?>
                                </span>
                            </div>
                            <?php echo getUserNameByID($userName); ?>
                        </center>
                        <center> <a href="#" class="btn btn-primary mt-1">Check Profile</a></center>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Total Records</h5>
                        <center>
                            <div class="rounded-circle bg-info text-center text-light" style="display:flex;align-items:center;justify-content:center;width:80px;height:70px">
                                <span style="font-size:34px;"> <?php
                                                                $userName = $_SESSION["user_id"];
                                                                echo totalFamilyHeadInfo() + totalFamilyMemberInfo();
                                                                ?>
                                </span>
                            </div>
                            <br>
                        </center>
                        <center> <a href="#" class="btn btn-primary mt-1" onclick="window.location.href='./records.php'">Check Record</a></center>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Total Family Head Records</h5>
                        <center>
                            <div class="rounded-circle bg-dark text-center text-light" style="display:flex;align-items:center;justify-content:center;width:80px;height:70px">
                                <span style="font-size:34px;"> <?php
                                                                $userName = $_SESSION["user_id"];
                                                                echo totalFamilyHeadInfo()
                                                                ?>
                                </span>
                            </div>
                            <br>
                        </center>
                        <center> <a href="#" class="btn btn-primary mt-1" onclick="window.location.href='./records.php'">Check Record</a></center>
                    </div>
                </div>
            </div>
        </div>
        <!-- row end -->

        <br>
        <!-- row start -->
        <div class="row">
            <div class="col-sm-4 ">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"> Family Member Records</h5>
                        <center>
                            <div class="rounded-circle bg-success text-center text-light" style="display:flex;align-items:center;justify-content:center;width:80px;height:70px">
                                <span style="font-size:34px;"> <?php
                                                                $userName = $_SESSION["user_id"];
                                                                echo totalFamilyMemberInfo()
                                                                ?>
                                </span>
                            </div>
                            <br>
                        </center>
                        <center> <a href="#" class="btn btn-primary mt-1" onclick="window.location.href='./records.php'">Check Record</a></center>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"> Deleted Records</h5>
                        <center>
                            <div class="rounded-circle bg-success text-center text-light" style="display:flex;align-items:center;justify-content:center;width:80px;height:70px">
                                <span style="font-size:34px;"> <?php
                                                                $userName = $_SESSION["user_id"];
                                                                echo totalInActiveFamilyHeadInfo()
                                                                ?>
                                </span>
                            </div>
                            <br>
                        </center>
                        <center> <a href="#" class="btn btn-primary mt-1" onclick="window.location.href='./records.php'">Check Record</a></center>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"> Today Added Records</h5>
                        <center>
                            <div class="rounded-circle bg-success text-center text-light" style="display:flex;align-items:center;justify-content:center;width:80px;height:70px">
                                <span style="font-size:34px;"> <?php
                                                                $userName = $_SESSION["user_id"];
                                                                echo totalTodaysEntry()
                                                                ?>
                                </span>
                            </div>
                            <br>
                        </center>
                        <center> <a href="#" class="btn btn-primary mt-1" onclick="window.location.href='./records.php'">Check Record</a></center>
                    </div>
                </div>
            </div>
        </div>
        <!-- row end -->

    </div>
    <!-- dashboard end-->
    <?php
    // *footer include
    include "./utils/footer.php";
    ?>
</body>

<script src="./js/jquery.js"></script>
<script src="./alertify/js/alertify.js"></script>
<script src="./js/popper.min.js"></script>
<script src="./js/bootstrap.min.min.js"></script>


</html>