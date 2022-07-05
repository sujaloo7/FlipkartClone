<?php
include('../dbConnection.php');
session_start();
if(!isset($_SESSION['is_alogin'])){
  if(isset($_REQUEST['adminlogin'])){
    $aEmail = mysqli_real_escape_string($con,trim($_REQUEST['aEmail']));
    $aPassword = mysqli_real_escape_string($con,trim($_REQUEST['aPassword']));
    $sql = "SELECT a_email, a_password FROM adminlogin WHERE a_email='".$aEmail."' AND a_password='".$aPassword."' limit 1";
    $result = $con->query($sql);
    if($result->num_rows == 1){
      
      $_SESSION['is_alogin'] = true;
      $_SESSION['aEmail'] = $aEmail;
      // Redirecting to RequesterProfile page on Correct Email and Pass
      echo "<script> location.href='index.php'</script>";
      exit;
    } else {
      $msg =  '<script>swal({
        icon: "warning",
        title:"Enter Valid Email and Password"

      });</script>';
    }
  }
} else {
  echo "<script> location.href='adminlogin.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="../images/favicon.png"type="image/icon">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="../css/all.min.css">
  <!-- custom  CSS -->
  <link rel="stylesheet" href="requesterloginstyle.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <title>ADMIN LOGIN | SIGN UP</title>
</head>

<body>
  <div class="mb-3 text-center mt-5 main" style="font-size: 30px;">
  </div>
  
  <div class="container-fluid mb-5">
    <div class="row justify-content-center custom-margin ">
      <div class="col-sm-6 col-md-4 mt-5">
        <form action="" class="shadow p-5 text-center text-dark bg-white  border-5" method="POST">
          <h2>LOGIN</h2>
          <img src="../images/avatar-01.jpg" class="mt-5" height="100px;" style="border-radius:100%;">
          <div class="form-group">
            <input type="email"class="form-control mt-5" placeholder="Email" name="aEmail">
            <!--Add text-white below if want text color white-->
          </div>
          <div class="form-group">
            <input type="password"class="form-control mt-5" placeholder="Password" name="aPassword">
          </div>
          <button type="submit" class="btn btn-outline-primary mt-5 w-25 btn-block shadow-sm font-weight-bold " name="adminlogin">Login</button>
        
        </form>
        <?php
          if(isset($msg))
          {
            echo $msg;
          }
        ?>
        
      </div>
    </div>
    <div class="container text-center mt-4 p-4">
    <a class="btn btn-primary text-light mt-5 " title="Facebook" target="_blank" href="https://www.facebook.com/login/"><i class="fab fa-facebook-f"></i></a>
						    <a class="btn btn-secondary text-light mt-5 ms-2" title="Instagram" target="_blank" href="https://www.instagram.com/accounts/login/"><i class="fab fa-instagram"></i></a>
						    <a class="btn btn-danger text-light mt-5 ms-2" title="Youtube" target="_blank" href="https://www.pinterest.ca/login/"><i class="fab fa-pinterest"></i></a>
						    <a class="btn btn-info text-light mt-5 ms-2 " title="Twitter" target="_blank" href="https://twitter.com/search?q=%23login&lang=en"><i class="fab fa-twitter"></i></a>
        </div>
  </div>

  <!-- Boostrap JavaScript -->
  <script src="../js/jquery.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/all.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</body>

</html>