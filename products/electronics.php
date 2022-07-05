<?php
include("../includefiles/header.php");  
include("../megamenu.php");
include("../dbconnection.php");
define('TITLE','electronics | Flipkart.Com');
?>

<div class="container-fluid  mt-5">
  <div class="row mt-5 p-3 ms-auto me-auto ">
    <?php  
       $query = "SELECT * FROM electronics";
       $query_run = mysqli_query($con , $query);
       $check_items =  mysqli_num_rows($query_run) > 0;


       if($check_items)
       {
         while($row = mysqli_fetch_assoc($query_run))
         {
           ?>
           <div class="col-sm-3 ">
             <form action="../insert.php" method="POST" >
             <div class="card ms-auto me-auto p-2 mt-5" style="width: 16rem; border:none; ">
  <a href="../requester/show.php"><img src="../images/<?php echo $row['images']?>" name="image" class="card-img-top" alt="..."></a>
  <div class="card-body">
  <p class="card-text"><a href=""><small> <?php echo $row['details']?></a></small></p>
    
    <a href="#" class="btn btn text-white py-0 px-1 mb-2 me-3" style="background-color:#008000;"><small>4.4<i class="fas fa-star"></i></small></a><img src="../images/ass.png" class="mb-2 ms-5" height="18px">
    <small class="text-secondary "><?php echo $row['price']?></small>  <small class="text-success ms-4 ">23% off</small> 
    <select class="form-control mt-2" name="Pquantity">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
		</select>
    <input type="hidden" name="Pdetails" value="<?php echo $row['details']?>">
    <input type="hidden" name="PPrice" value="<?php echo $row['price']?>">


  </div>
  <div class="d-flex"><button class="btn btn-primary w-50" name="addCart" title="ADD TO CART" style="font-size:15px;"><i class="fas fa-shopping-cart"></i></button>
 <a href="" class="btn btn text-light w-50 ms-1"  title="BUY NOW" style="font-size:15px; background-color:#F74300;"><i class="fas fa-shopping-bag"></i></a></div>




</div>

</div>
         </form>
           <?php
         }
       }
       else
       {
         echo "NO RECORD FOUND";
       }
    ?>
 
  </div>
</div>
<?php
include("../includefiles/footer.php")
?>


