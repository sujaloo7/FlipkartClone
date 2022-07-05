<?php
     define('TITLE','sell report');
    include("includefiles/header.php");
    include("../dbconnection.php");
    session_start();
    if($_SESSION['is_alogin'])
    {
        $remail = $_SESSION['aEmail'];
    }
    else
    {
        echo "<script>location.href='adminlogin.php'</script>";
    }
?>
<div class="col-sm-8 col-md-10 mt-5 text-center">
    <p class="bg-success text-white p-2"> List of Registerd users</p>
    <?php
        $sql ="SELECT * FROM userregistration";
        $result= $con->query($sql);
        if($result->num_rows > 0)
        {
            echo '<table class="table">
            <thead>
            <tr>
            <th scope="col"> Requester Id</th>
            <th scope="col"> Requester name</th>
            <th scope="col"> Requester email</th>
            <th scope="col"> Action</th>
            </tr>
            </thead>
            </tbody>';
            while($row =$result->fetch_assoc())
            {
                echo '<tr>';
                echo '<th scope="row">'.$row["r_id"].'</th>';
                echo '<td>'.$row["r_name"].'</td>';
                echo '<td>'.$row["r_email"].'</td>';
                echo '<td><form action="editreq.php" method="POST" class="d-inline">
                <input type="hidden" name="id" value='.$row["r_id"].'>
                <button class="btn btn-info mx-3 py-2 px-4" type="submit" name="edit"><i class="fas fa-pen"></i></button></form>
                <form action="" method="POST" class="d-inline">
                <input type="hidden" name="id" value='.$row["r_id"].'>
                <button class="btn btn-warning mx-2 py-2 px-4" type="submit" name="delete"><i class="fas fa-trash"></i></button></form>
                </td></tr>';
            }
            echo '</tbody>';
            echo '</table>';
        }
        else
        {
            echo '<div class="alert alert-primary mt-2" role="alert">no  requester found in database </div>';
        }
        if(isset($_REQUEST['delete']))
        {
            $sql = "DELETE FROM userregistration WHERE R_ID = {$_REQUEST['id']}";
            if($con->query($sql) == TRUE)
            {
                echo '<meta http-equiv="refresh" content="0;URL=?deleted" />';
            }
            else
            {
                echo "unable to delete ";
            }
        }

    ?>
</div>
<?php
    include("includefiles/footer.php");
?>