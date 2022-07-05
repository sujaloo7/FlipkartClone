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
// include("../dbconnection.php");

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

                        <li class="nav-item ms-5  " ><a class="nav-link  ps-4 text-secondary " href="../requester/customerprofile.php"><i class="fas fa-user me-3 text-primary"></i>ACCOUNTS <i class="fas fa-arrow-circle-right ms-5 text-secondary"></i> </a></li>
                        <li class="nav-item ms-5 "  active><a class="nav-link ms-4 " href="../requester/customerprofile.php" >Profile information</a></li>
                        <li class="nav-item ms-5 "><a class="nav-link ms-4" href="../requester/address.php">Manage Addresses</a></li>
                        <li class="nav-item ms-5 "><a class="nav-link ms-4 " href="../requester/pancard.php">PAN Card Information</a></li>
                        <li><hr class="dropdown-divider"></li>

                        <li class="nav-item ms-5 "><a class="nav-link ps-4 text-secondary " href="../requesterlogout.php"><i class="fas fa-credit-card me-3 text-primary"></i>PAYMENTS<i class="fas fa-arrow-circle-right ms-5 text-secondary"></i></a></li>
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
<div class="card h-100 ">
	<div class="card-body">
        <form method="POST">
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h6 class="mb-2 text-primary">Personal Details</h6>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 ">
				<div class="form-group">
					<label for="fullName">Full Name <button href="" type="submit" class="btn text-primary" name="nameupdate" style="text-decoration:none; margin-left:300px; " >edit </button></label>
					<input type="text" class="form-control p-3 mt-1" name="rname" value="<?php echo $rname;?>" id="fullName" placeholder="Enter full name" >
				</div>
			</div>
            
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="eMail">Email Address</label>
					<input type="email" class="form-control p-3 mt-3" id="eMail" name="remail" value="<?php echo $remail;?>" placeholder="Enter email ID" style="cursor: no-drop;" disabled>
				</div>
			</div>
            <div class="d-flex mt-4">
        <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
  <label class="form-check-label" for="flexRadioDefault1">
    Male
  </label>
</div class="">
<div class="form-check ms-3">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" disabled >
  <label class="form-check-label" for="flexRadioDefault2">
    Female
  </label>
</div>
</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-3">
				<div class="form-group">
					<label for="phone">Phone</label>
					<input type="text" class="form-control p-3" id="phone" placeholder="Enter phone number">
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 mt-3">
				<div class="form-group">
					<label for="website">BackUp Phone</label>
					<input type="url" class="form-control p-3" id="website" placeholder="Enter phone number">
				</div>
			</div>
		</div>
        
	
        
		<div class="row gutters mt-5">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
				<div class="text-right">
					<a href="../index.php" type="button" id="submit" name="submit" class="btn btn-outline-primary">Back To Home</a>

					<button type="button" id="submit" name="submit" class="btn btn-secondary">Deactivate Account</button>
				</div>
			</div>
		</div>
	</div>
    <h4 class="p-3">FAQs</h4>
    <p class="p-3">
   <b> What happens when I update my email address (or mobile number)?</b>
   </p>
   <p class="p-1 ms-2">
   Your login email id (or mobile number) changes, likewise. You'll receive all your account related <br>communication on your updated email address (or mobile number).
   </p>
   <p class="p-1 ms-2">
   <b>When will my Flipkart account be updated with the new email address (or mobile number)?</b>
   </p>
   <p class="p-1 ms-2">
   It happens as soon as you confirm the verification code sent to your email (or mobile) and save the changes.
   </p>
	<img src="../images/myfooter.png" width="auto">

</div>
        <?php if(isset($regmsg)) {echo $regmsg; } ?>

</form>

</div>

</div>
</div>

        
            <!-- end profile section-->

            <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/all.min.js"></script>

    <!--    <div class="col-sm-8 ms-auto me-auto  mt-5 bg-white ms">
                <form action="" method="POST " class="pt-2 ms-auto me-auto">
                    <div class="form-group col-sm-4 ">
                        <input type="email" class="form-control" name="remail" value="<?php echo $remail;?>" readonly>
                    </div>
                    <div class="form-group mt-4 col-sm-4">
                        <input type="text" class="form-control " name="rname" value="<?php echo $rname;?>">
                    </div>
                    <button type="submit" class="btn btn-success mt-4 px-5" name="nameupdate">UpDate</button>
                    <?php
                        if(isset($msg))
                        {
                            echo $msg;
                        }
                    ?>
                </form>
            </div> -->