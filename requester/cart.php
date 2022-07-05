<?php
 include("../includefiles/header.php");
include("../megamenu.php");
// include("../dbconnection.php");

if($_SESSION['is_login'])
{
    $remail = $_SESSION['rEmail'];
}
else
{
    echo "<script>location.href='../requester/cartlodingpage.php'</script>";
}

?>

<div class="container mt-5 p-3   ">
	<div class="row justify-content-around shadow">
		<div class="col-sm-6">
			<table class="table table-responsive border-white " style=>
				<thead>
					<th></th>
					<th></th>
					<th></th>
					<th></th>


					<th></th>
					<th></th>
					

					<th></th>
					<th></th>

					<th></th>
					

				</thead>
				<tbody>
					<?php 

					if(isset($_SESSION['cart']))
					{
						foreach($_SESSION['cart'] as $Key => $value)
							//$total = $value['productPrice'] * $value['productQuantity'];
						{
							?>
							<form  method="POST">
							 <tr>
							<td class=""><?php echo $Key ?> </td>
							<td class=" ms-2"> <?php echo $value["productImage"]; ?> </td>
							<td class=""> </td>
							<td class=""> </td>


							<td><?php echo $value["productName"]; ?> </td>
							<td class=""> </td>

							<td> <?php echo $value["productPrice"]; ?> </td>
							<td class=""> </td>

							<td> <?php echo $value["productQuantity"]; ?> </td>
							<td>  </td>
							<td> <button name="remove" class="btn btn	 text-danger ms-5 " >Remove</button> </td>
							<td><input type="hidden" name="item" value="<?php echo $value["productName"]; ?>"> </td>


							<tr>
						</form>

							<?php
						}
					}
					
					?>
				</tbody>
			</table>
		</div>
	<img src="../images/myfooter.png" width="auto">

	</div>
</div>
<?php
    include("../includefiles/footer.php");
?>