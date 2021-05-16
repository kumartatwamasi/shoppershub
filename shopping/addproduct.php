<?php
session_start();
require_once("php/connectDB.php");
$name= $_POST['pname'];
$quant= $_POST['quant'];
$category= $_POST['category'];
$price= $_POST['price'];
$image=$_POST['image'];
$s= "select * from `product` where pname='$name'";
$result= mysqli_query($conn, $s);
$num= mysqli_num_rows($result);
if ($num)
{
  echo '<script>alert("Product already present");</script>';
  sleep(5);

}
else
{
  $a= `INSERT INTO 'product' ('pname', 'quantity', 'image','category', 'price') VALUES ('$name', '$quant','$image' ,'$category', '$price')`;
  mysqli_query($conn, $a);
  header('location:admin.php');
}

?>
