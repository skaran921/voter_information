<?php
session_start();
if (isset($_SESSION["user_id"])) {
  ?>
  <script>
    window.location.href = "./dashboard.php";
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
  <title>Voter Information</title>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/index.css">
  <link rel="stylesheet" href="./fontawesome/css/fontawesome.css">
  <link rel="stylesheet" href="./fontawesome/css/brand.css">
  <link rel="stylesheet" href="./fontawesome/css/solid.css">
  <!-- <link rel="stylesheet" href="./alertify/css/alertify.css"> -->
  <script src="./js/jquery.js"></script>
  <script src="./js/popper.min.js"></script>
  <script src="./js/bootstrap.min.min.js"></script>
  <!-- <script src="./alertify/js/alertify.js"></script> -->
</head>

<body>

  <div class="" id="main">

    <!-- row start here -->
    <div class="row">
      <!--  col 1 start here -->
      <div class="col-sm-6" id="firstPart">
        <div id="innerFirstPart">
          <span class="greenText">Welcome Back!</span>
          <br>
          <span> Please Login </span>
        </div>
      </div>
      <!--  col 1 end here -->

      <!--  col 2 start here -->
      <div class="col-sm-6">
        <div class="myCard">
          <form action="" method="post">
            <div class="input-group mb-3 input-group-sm">
              <div class="input-group-prepend">
                <span class="input-group-text"><span class="fa fa-user-circle"></span></span>
              </div>
              <input type="text" class="form-control" name="userName" id="userName" placeholder="Username" required autofocus maxlength="10">
            </div>

            <div class="input-group mb-3 input-group-sm">
              <div class="input-group-prepend">
                <span class="input-group-text"><span class="fa fa-lock"></span></span>
              </div>
              <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
            </div>
            <center>
              <button type="submit" name="formSubmit" class="myBtn submitBtn"> Login</button>
              <button type="reset" class="myBtn resetBtn"> Reset</button>
            </center>
            <br />

            <div class="indexBottom">
              <center>
                <span>Designed and Develope By skaran<sup>921</sup></span>
              </center>
            </div>
            <br>
            <?php
            if (isset($_POST["formSubmit"])) {
              include "./db.php";
              $userName = $_POST["userName"];
              $password = $_POST["password"];
              $sql = "SELECT * FROM users WHERE userName='$userName' AND password='$password'";
              $result = $conn->query($sql);
              if ($row = $result->fetch_assoc()) {
                $_SESSION["user_id"] = $row["user_id"];
                ?>
                <script>
                  window.location.href = "./dashboard.php";
                </script>
            <?php
              } else {
                echo  '<span class="worngInformation"> <span class="fa fa-arrow-right"></span> Sorry Authentication Failed!</span>';
              }
            }

            ?>
            <!-- <span class="forgotPasswordText">forgot password? click here</span> -->
          </form>
        </div>
      </div>
    </div>
    <!--  col 2 end here -->



  </div>
  <!-- row end here -->
  <!-- validation script -->


  <!--validation script -->

</body>

</html>