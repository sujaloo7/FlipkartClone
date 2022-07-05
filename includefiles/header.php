<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <!-- link section -->
    <link rel="icon" href="../images/favicon.png"type="image/icon">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/mainstyle.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>
<body>

<?php
 session_start();
$count = 0;
if(isset($_SESSION['cart']))
{
  $count = count($_SESSION['cart']);
}

?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary p-2 sticky-top ">
  <div class="container">
    <a class="navbar-brand" href="../index.php"><img src="../images/flipkart-plus.png" height="15px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input type="text" class="form-control ms-5" placeholder="Search for products, brands and more" style="height:27px; width:400px;">
   <a href="../index.php"> <i class="fas fa-search text-primary" style="margin-left:-25px; font-size:17px;"></i></a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav  mb-2 mb-lg-0 ms-auto">
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            More
          </a>
          <ul class="dropdown-menu px-1 shadow mt-3 " aria-labelledby="navbarDropdown" style="border:none;">
          <li><a class="dropdown-item " href="#"><i class="fas fa-bell me-3 text-primary"></i>Notification Prefrences</a></li>
          <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#"><i class="fab fa-sellcast me-3 text-primary"></i>Sell on flipkart</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#"><i class="fas fa-concierge-bell me-3 text-primary"></i>24x7 customers care</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#"><i class="fas fa-chart-line me-3 text-primary"></i>Advertise</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#"><i class="fas fa-download me-3 text-primary"></i>Download app</a></li>
          </ul>
        </li>
        <li class="nav-item ms-4">
         <a href="../requester/cart.php" class="text-light nav-link"> <i class="fas fa-shopping-cart text-light me-2"></i>Cart(<?php  echo $count?>)</a>
        </li>
        <li class="nav-item ms-4">
         <a href="../requester/customerregistration.php" class="text-light nav-link"> <i class="fas fa-user-plus me-2"></i>Sign up</a>
        </li>
       <a href="../requester/customerlogin.php"> <button class="btn btn-light text-primary ms-4 mt-1 px-4 py-1" type="submit"style="height:25px;" >Login</button></a>
     </ul>
     <div class="dropdown text-end  ms-5">
          <a href="#" class="d-block link text-decoration-none dropdown-toggle text-white" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="../images/profile.jpg" alt="mdo" width="32" height="32" class="rounded-circle">     &nbsp;sujal
          </a>
          <ul class="dropdown-menu shadow border-none text-small px-1 mt-3" aria-labelledby="dropdownUser1" style="border:none;">
            <li><a class="dropdown-item" href="#"><i class='bx bxs-user me-3 text-primary'></i>profile</a></li>
            <li><hr class="dropdown-divider"></li>

            <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-3 text-primary"></i>Settings</a></li>
            <li><hr class="dropdown-divider"></li>

            <li><a class="dropdown-item" href="#"><i class="fas fa-heart me-3 text-primary"></i>Wishlist</a></li>
            <li><hr class="dropdown-divider"></li>

            <li><a class="dropdown-item" href="#"><i class="fab fa-first-order-alt me-3 text-primary"></i>Orders</a></li>
            <li><hr class="dropdown-divider"></li>

            <li><a class="dropdown-item" href="#"><i class="fas fa-gift me-3 text-primary"></i>Rewards</a></li>
            <li><hr class="dropdown-divider"></li>

            <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt me-3 text-primary"></i>Sign out</a></li>

          </ul>
        </div>
    </div>
  </div>
</nav>