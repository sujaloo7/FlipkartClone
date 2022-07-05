<?php
    define('TITLE','My profile');
    include("../includefiles/header.php");
    include("../megamenu.php");


?>
<style>
  body
  {
      background-color:lightgrey;
  }

.account-settings .user-profile {
    margin: 0 0 1rem 0;
    padding-bottom: 1rem;
    text-align: center;
}
.account-settings .user-profile .user-avatar {
    margin: 0 0 1rem 0;
}
.account-settings .user-profile .user-avatar img {
    width: 90px;
    height: 90px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
}
.account-settings .user-profile h5.user-name {
    margin: 0 0 0.5rem 0;
}
.account-settings .user-profile h6.user-email {
    margin: 0;
    font-size: 0.8rem;
    font-weight: 400;
    color: #9fa8b9;
}
.account-settings .about {
    margin: 2rem 0 0 0;
}
.account-settings .about h5 {
    margin: 0 0 15px 0;
    color: #007ae1;
}
.account-settings .about p {
    font-size: 0.825rem;
}
.form-control {
    border: 1px solid #cfd1d8;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    font-size: .825rem;
    color: #2e323c;
}

.card {
    
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 0;
    margin-bottom: 1rem;
}
input:focus
{
    border:#F74300;
}


.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}
input:focus
{
   border-color:#BA68C8;
}

.profile-button {
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}

</style>

<?php
include("../dbconnection.php");

if($_SESSION['is_login'])
{
    $remail = $_SESSION['rEmail'];
}
else
{
    echo "<script>location.href='../requester/customerlogin.php'</script>";
}
$sql = "SELECT * FROM customerregistration WHERE s_email='$remail'";
$result = $con->query($sql);
if($result->num_rows == 1)
{
    $row = $result->fetch_assoc();
    $rname = $row["s_name"];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">

    <title>Document</title>
</head>
<body class="bg-light">

    <!-- start profile section-->
    <div class="container mt-5 py-5d ">
<div class="row gutters">
<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
<div class="card h-100 border-0 sda">
	<div class="card-body">
		<div class="account-settings">
			<div class="user-profile">
				<div class="user-avatar">
					<img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
				</div>
				<h5 class="user-name"><?php echo $rname;?></h5>
				<h6 class="user-email"><?php echo $remail;?></h6>
			</div>
			<div class="about">
            <ul class="nav flex-column">
                        <li class="nav-item ms-5 "><a class="nav-link ps-4 text-secondary " href="requesterprofile.php"><i class="fas fa-comment-alt me-3 text-primary"></i>MY ORDERS<i class="fas fa-arrow-circle-right ms-5 text-secondary"></i></a></li>
                          <li><hr class="dropdown-divider"></li>

                        <li class="nav-item ms-5  " ><a class="nav-link  ps-4 text-secondary " href="../requester/customerprofile.php"><i class="fas fa-user me-3 text-primary"></i>ACCOUNTS <i class="fas fa-arrow-circle-right ms-5 text-secondary"></i> </a></li>
                        <li class="nav-item ms-5 "  active><a class="nav-link ms-4 " href="../requester/customerprofile.php" >Profile information</a></li>
                        <li class="nav-item ms-5 "><a class="nav-link ms-4" href="../requester/address.php">Manage Addresses</a></li>
                        <li class="nav-item ms-5 "><a class="nav-link ms-4 " href="../requester/pancard.php">PAN Card Information</a></li>
                        <li><hr class="dropdown-divider"></li>

                        <li class="nav-item ms-5 "><a class="nav-link ps-4 text-secondary " href="../requesterlogout.php "><i class="fas fa-credit-card me-3 text-primary"></i>PAYMENTS<i class="fas fa-arrow-circle-right ms-5 text-secondary"></i></a></li>
                        <li class="nav-item ms-5 "  active><a class="nav-link ms-4 " href="requeststatus.php" >Gift Cards</a></li>
                        <li class="nav-item ms-5 "><a class="nav-link ms-4" href="requesterfeedback.php">Saved UPI</a></li>
                        <li class="nav-item ms-5 "><a class="nav-link ms-4 " href="requestersetting.php">Saved Cards</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li class="nav-item ms-5  " ><a class="nav-link  ps-4 text-secondary " href="submitrequest.php"><i class="fas fa-comment-alt me-3 text-primary"></i>MY CHATS <i class="fas fa-arrow-circle-right ms-5 text-secondary"></i> </a></li>
                        <li><hr class="dropdown-divider"></li>

                        
                    </ul>
			</div>
		</div>
	</div>
</div>
</div>
<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
<div class="card h-100 border-0 ">
	<div class="card-body">
        <form method="POST">
		<div class="row gutters">

</div>      
<div class="row mt-3 p-3 ">
 <div class="col-md-6"><label class="labels ">Mobile Number</label><input type="text" class="form-control p-2 mt-3" placeholder="enter phone number" value=""></div>
<div class="col-md-6"><label class="labels">Address Line 1</label><input type="text" class="form-control p-2 mt-3" placeholder="enter address line 1" value=""></div>
<div class="col-md-6"><label class="labels">Address Line 2</label><input type="text" class="form-control p-2 mt-3" placeholder="enter address line 2" value=""></div>
<div class="col-md-6"><label class="labels">Postcode</label><input type="text" class="form-control p-2 mt-3" placeholder="enter address line 2" value=""></div>
<div class="col-md-6"><label class="labels">State</label><input type="text" class="form-control p-2 mt-3" placeholder="enter address line 2" value=""></div>
 <div class="col-md-6"><label class="labels">Area</label><input type="text" class="form-control p-2 mt-3" placeholder="enter address line 2" value=""></div>
 <div class="col-md-6"><label class="labels">Email ID</label><input type="text" class="form-control p-2 mt-3" value="<?php echo $remail;?>" placeholder="enter email id" style="cursor: no-drop;" readonly ></div>
 <div class="col-md-6"><label class="labels">Pincode</label><input type="text" class="form-control p-2 mt-3" placeholder="enter email id" value=""></div>
                   
                </div>
                <div class="row mt-3 p-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control p-2 mt-3" placeholder="country" value=""></div>
                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control p-2 mt-3" value="" placeholder="state"></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Address</button></div>
            </div>
	<img src="../images/myfooter.png" width="auto">
        </div>
</div>
        <?php if(isset($regmsg)) {echo $regmsg; } ?>

</form>

</div>

</div>
</div>

        
            <!-- end profile section-->

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

            <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/all.min.js"></script>


    </body>
</html>