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
    <title>Records</title>

    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/dashboard.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="./fontawesome/css/brand.css">
    <link rel="stylesheet" href="./fontawesome/css/solid.css">
    <link rel="stylesheet" href="./alertify/css/alertify.css">
    <!-- data-tabel -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-table.min.css" />
</head>

<body onload="getElectricityRecord()">
    <!---------------header---------------->
    <?php include "./utils/header.php" ?>
    <br>
    <br>
    <br>
    <br>
    <!-- dashboard start-->
    <!-- main row start -->
    <div class="card" style="width:100% !important;margin-left:0px;">
        <div class="card-header bg-dark text-light">
            <span class="fas fa-list-alt"></span> Family Info
            <span style="float:right">
                <span class="fa fa-print" onclick="window.print();"></span>
            </span>
        </div>
        <!-- card-heading -->
        <div class="card-body">
            <div class="mainRow" id="data">
            </div>
            <!-- main row end -->
        </div>
    </div>
    <!-- card end -->
    <!-- dashboard end-->


    <script src="./js/jquery.js"></script>
    <script src="./alertify/js/alertify.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.min.js"></script>


    <script>
        function getElectricityRecord() {
            $.ajax({
                url: "./getFamilyInfo.php?family_head_id=<?php echo $_GET['family_head_id']; ?>",
                success: function(result) {

                    $("#data").html(result);
                }
            });
        }
    </script>
</body>

</html>