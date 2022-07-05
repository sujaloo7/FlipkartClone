<?php
session_start();
$product_image = $_POST['image'];
$product_details = $_POST['Pdetails'];
  $product_price = $_POST['PPrice'];
    $product_quantity = $_POST['Pquantity'];
if(isset($_POST['addCart']))
{
  $check_product = array_column( $_SESSION['cart'], 'productName');
  if(in_array($product_details , $check_product))
  {
    echo "
    <script>
    alert('product already added');
    window.location.href = 'index.php';
    </script>
    
    ";
  }
 else
 {
$_SESSION['cart'] [] = array('productName' => $product_details, 
                            'productPrice' =>$product_price,
                             'productQuantity' => $product_quantity,
                             'productImage' => $product_image);

}

}
//remove item
if(isset($_POST['remove']))
{
  foreach($_SESSION['cart'] as $Key => $value)
  {
    if($value['productName'] === $_POST['item'])
    {
      unset($_SESSION['cart'][$Key]);
      $_SESSION['cart'] = array_values($_SESSION['cart']);
      header('location:index.php');
    }
  }
}

?>