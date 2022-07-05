<?php
    define('TITLE','My profile');
    include("../includefiles/header.php");
    include("../megamenu.php");


?>
<style>
    body {
    margin: 0;
    color: #2e323c;
    background: #f5f6fa;
    position: relative;
    height: 100%;
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
    background: #ffffff;
    color: #2e323c;
}

.card {
    background: #ffffff;
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

if(isset($_REQUEST['nameupdate']))
{
    if(($_REQUEST['rname']== ""))
    {
        $msg = "<div class='alert alert-danger'>name  element is empty please give a name to the current user</div>";
    }
    else
    {
        $rname = $_REQUEST['rname'];
        $sql = "UPDATE customerregistration SET s_name = '$rname' WHERE s_email='$remail'";
            if($con->query($sql) == TRUE)
            {
                 $regmsg = '<script>swal({
                    icon: "success",
                    title:"Name Successfully Edited"
                    });</script>';
                }
            else
            {
                $msg = "<div class='alert alert-warning'>name not updated  due to technical error</div>";
            }
    }
}
?>
    <!-- start profile section-->
    <div class="container mt-5 py-5d">
<div class="row gutters">
<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
<div class="card h-100">
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

                        <li class="nav-item ms-5  " ><a class="nav-link  ps-4 text-secondary " href="submitrequest.php"><i class="fas fa-user me-3 text-primary"></i>ACCOUNTS <i class="fas fa-arrow-circle-right ms-5 text-secondary"></i> </a></li>
                        <li class="nav-item ms-5 "  active><a class="nav-link ms-4 " href="requeststatus.php" >Profile information</a></li>
                        <li class="nav-item ms-5 "><a class="nav-link ms-4" href="../requester/address.php">Manage Addresses</a></li>
                        <li class="nav-item ms-5 "><a class="nav-link ms-4 " href="requestersetting.php">PAN Card Information</a></li>
                        <li><hr class="dropdown-divider"></li>

                        <li class="nav-item ms-5 "><a class="nav-link ps-4 " href="../requesterlogout.php"><i class="fas fa-credit-card me-3"></i>PAYMENTS<i class="fas fa-arrow-circle-right ms-5 text-secondary"></i></a></li>
                        <li class="nav-item ms-5 "  active><a class="nav-link ms-4 " href="requeststatus.php" >Profile information</a></li>
                        <li class="nav-item ms-5 "><a class="nav-link ms-4" href="requesterfeedback.php">Manage Addresses</a></li>
                        <li class="nav-item ms-5 "><a class="nav-link ms-4 " href="requestersetting.php">PAN Card Information</a></li>
                    </ul>
			</div>
		</div>
	</div>
</div>
</div>
<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
<div class="card h-100 ">
	<div class="card-body">
        <form method="POST">
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h6 class="mb-2 text-primary">Personal Details</h6>
			</div>
			
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>
    

<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
     
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name" value=""></div>
                    <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="" placeholder="surname"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="enter phone number" value=""></div>
                    <div class="col-md-12"><label class="labels">Address Line 1</label><input type="text" class="form-control" placeholder="enter address line 1" value=""></div>
                    <div class="col-md-12"><label class="labels">Address Line 2</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12"><label class="labels">Postcode</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12"><label class="labels">State</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12"><label class="labels">Area</label><input type="text" class="form-control" placeholder="enter address line 2" value=""></div>
                    <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="enter email id" value=""></div>
                    <div class="col-md-12"><label class="labels">Education</label><input type="text" class="form-control" placeholder="education" value=""></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
            </div>
        </div>
        
    </div>
</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

				</div>
			</div>
		</div>
	</div>
  
	<img src="../images/myfooter.png" width="auto">

</div>

</form>

</div>

</div>
</div>

<script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/all.min.js"></script>
