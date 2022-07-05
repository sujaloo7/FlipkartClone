<?php
  // include('../dbconnection.php');
  if(isset($_REQUEST['rSignup'])){
    // Checking for Empty Fields
    if(($_REQUEST['rName'] == "") || ($_REQUEST['rEmail'] == "") || ($_REQUEST['rPassword'] == "")){
      $regmsg = '<script>swal({
        icon: "warning",
        title:"All Fields Are Required"

      });</script>';
    } else {
      $sql = "SELECT s_email FROM customerregistration WHERE s_email='".$_REQUEST['rEmail']."'";
      $result = $con->query($sql);
      if($result->num_rows == 1){
        $regmsg = '<script>swal({
          icon: "warning",
          title:"You have Already registered"
  
        });</script>';
      } else {
        // Assigning User Values to Variable
        $rName = $_REQUEST['rName'];
        $rEmail = $_REQUEST['rEmail'];
        $rPassword = $_REQUEST['rPassword'];
        $sql = "INSERT INTO customerregistration(s_name, s_email, s_password) VALUES ('$rName','$rEmail', '$rPassword')";
        if($con->query($sql) == TRUE){
          $regmsg = '<script>swal({
            icon: "success",
            title:"Welcome"
    
          });</script>';
        } else {
          $regmsg = '<script>swal({
            icon: "danger",
            title:"Oops! something went wrong"
    
          });</script>';
        }
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up !</title>

    <!-- link section -->

    <link rel="icon" href="../images/favicon.png"type="image/icon">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/mainstyle.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<div class="container pt- p-4 me-auto ms-auto" id="registration">

  <div class="row mt-3    ">
  <h2 class="text-center">--- Looks like you're new here! ---</h2>
  <p class="text-center">Get access to your Orders, Wishlist and Recommendations</p>
  
  <div class="col-sm-4 me-auto ms-auto p-5 mt-3 offset-md-3 ">
     <img src="../images/img2.jpg" class=" ms-3 logo" height="460px" width="440px">
    </div>
    <div class="col-sm-4 me-auto ms-auto p-3 mt-5 offset-md-3 ">
  <h2 class="text-center">Sign up here!</h2>

      <form action="" class=" p-5 bg-white me-3 " method="POST">
        <div class="form-group mt-2">
         <input type="text" class="form-control mt-1 " placeholder="Name" name="rName" style="border:none; border-bottom:1px solid lightgrey;">
        </div>
        <div class="form-group mt-4">
          <input type="email"  class="form-control" placeholder="Email" name="rEmail" style="border:none; border-bottom:1px solid lightgrey;">
          <!--Add text-white below if want text color white-->
          <small class="form-text">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group mt-3">
         <input type="password" class="form-control" placeholder="Password" name="rPassword" style="border:none; border-bottom:1px solid lightgrey;">
        </div>
        <button type="submit" class="btn btn  w-100  mt-5 btn-block text-light shadow- font-weight-bold" name="rSignup" style="background-color:#F74300">Sign Up</button>
        <button type="submit" class="btn btn w-100 p-2  mt-4 btn-block shadow border font-weight-bold" name="rSignup" style="background-color:; ">Request OTP</button>
<br></br><br></br>
        <em style="font-size:10px;" class="mt-3">Note - By clicking Sign Up, you agree to our Terms, Data
          Policy and Cookie Policy.</em>
          <a href="../index.php" class="nav-link text-center mt-3">GO TO BACK</a>
        <?php if(isset($regmsg)) {echo $regmsg; } ?>
      </form>
    </div>
  </div>
</div>
<script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/all.min.js"></script>
</body>
</html>