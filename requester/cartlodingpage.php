<?php

include("../includefiles/header.php");
// include("../dbconnection.php");
?>

<div class="container shadow mt-5 text-center p-5">
    <div class="row p-4">
        <img src="../images/cart.png" class="ms-auto me-auto" style="height:160px; width:230px;">
        <p style="font-size:12px;">Missing Cart items?</p>
        <small>Login to see the items you added previously</small>
        <div class="text-center mt-4    ">
      <a href="../requester/customerlogin.php">  <button class="btn btn px-5 py-2 text-light mt-3 " style="background-color:#ff581b;">LOGIN</button></a>
</div>
    </div>
</div>

<?php
include("../includefiles/footer.php");

?>