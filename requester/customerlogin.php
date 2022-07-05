<?php
// include('../dbconnection.php');
session_start();
if(!isset($_SESSION['is_login'])){
  if(isset($_REQUEST['rEmail'])){
    $rEmail = mysqli_real_escape_string($con,trim($_REQUEST['rEmail']));
    $rPassword = mysqli_real_escape_string($con,trim($_REQUEST['rPassword']));
    $sql = "SELECT s_email, s_password FROM customerregistration WHERE s_email='".$rEmail."' AND s_password='".$rPassword."' limit 1";
    $result = $con->query($sql);
    if($result->num_rows == 1){
      
      $_SESSION['is_login'] = true;
      $_SESSION['rEmail'] = $rEmail;
      // Redirecting to RequesterProfile page on Correct Email and Pass
      echo "<script> location.href='../index.php'; </script>";
      exit;
    } else {
      $msg = '<div class="alert alert-warning mt-2" role="alert"> Enter Valid Email and Password </div>';
    }
  }
} else {
  echo "<script> location.href='../index.php'; </script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../images/favicon.png"type="image/icon">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="../css/all.min.css">
  <!-- custom  CSS -->
  <link rel="stylesheet" href="../css/customerlogin.css">

  <title>Login</title>
</head>

<body>

 
  <div class="container text-center ">

    <div class="row justify-content-center custom-margin ">
      <div class="col-sm-4 col-md-4 p-4">

        <form action="" class=" p-5 border shadow-lg bg-white mt-5" method="POST" data-aos="fade-in">

  <img src="../images/download.png" class="text-center" height="160px">
          <div class="form-group">
              <input type="email"class="form-control  p-3" placeholder="Email" name="rEmail">
            <!--Add text-white below if want text color white-->
            <small class="form-text">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
           <input type="password"class="form-control mt-4 p-3" placeholder="Password" name="rPassword" >
          </div>
          <button type="submit" class="btn btn-outline-primary me-3 px-5 w-100 mt-5 text-center mt-3 btn-block  font-weight-bold b1" >Login &nbsp;<i class="fas fa-arrow-right"></i></button>
          <br></br>
          <em style="font-size:10px;" class="mt-3">Note - By clicking Sign Up, you agree to our Terms, Data
          Policy and Cookie Policy.</em>
          <br></br>

          <?php if(isset($msg)) {echo $msg; } ?>
        </form>
        <div class="text-center"><a class="btn btn text-primary mt-3  font-weight-bold" href="../index.php"><i class="fas fa-long-arrow-alt-left"></i> &nbsp; Back
            to Home</a>
        </div>   
      </div>
    </div>
    


  <!-- Boostrap JavaScript -->
  <script src="../js/jquery.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/all.min.js"></script>
  <script src="../js/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   
</body>

</html>