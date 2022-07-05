<?php
include("../includefiles/header.php");  
include("../megamenu.php");
include("../dbconnection.php");
define('TITLE','electronics | Flipkart.Com');

$id = "";
if(isset($_GET["id"]))
{
    $id = $_GET["id"];
}
?>
<?php



?>
<div class="container">
    <?php
    $sql_query ="SELECT * FROM electronics WHERE srno = $id";
    $result=$con->query($sql_query);
    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            ?>

            <div class="row">
                <div class="col-sm-6">
                <img src="../images/<?php echo $row['images']?>" class="card-img-top" alt="...">
                    
                </div>
                <div class="col-sm-6"></div>


            </div>
            <?php
        }

    }
    ?>
      
</div>



<?php
include("../includefiles/footer.php")
?>