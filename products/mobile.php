<?php
include("../includefiles/header.php");  
include("../megamenu.php");
include("../dbconnection.php");
?>




<style>

.card:hover {
    transform: scale(0.90);
    box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
}
</style>
<div class="container-fluid text-center">
    <div class="" >
    <img src="../images/smartphone.jpg" style="width:800px;">  
</div>
</div>
<div class="container-fluid  mt-5">
  <div class="row mt-5 p-3 ms-auto me-auto ">
    <?php  
       $query = "SELECT * FROM mobiles";
       $query_run = mysqli_query($con , $query);
       $check_items =  mysqli_num_rows($query_run) > 0;


       if($check_items)
       {
         while($row = mysqli_fetch_assoc($query_run))
         {
           ?>
           <div class="col-sm-2 ">
             <div class="card ms-2 p-2 mt-5" style="width: 16rem; border:none; ">
  <a href=""><img src="../images/<?php echo $row['images']?>" class="card-img-top" alt="..."></a>
  <div class="card-body">
  <p class="card-text"><a href=""><small> <?php echo $row['details']?></a></small></p>
    
    <a href="#" class="btn btn text-white py-0 px-1 mb-2 me-3" style="background-color:#008000;"><small>4.4<i class="fas fa-star"></i></small></a><img src="../images/ass.png" class="mb-2 ms-5" height="18px">
    <small class="text-secondary "><?php echo $row['price']?></small>  <small class="text-success ms-4 ">23% off</small>

  
  </div>

</div>
</div>
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
include("../includefiles/footer.php");  
?>