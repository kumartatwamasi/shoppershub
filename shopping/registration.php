<?php
session_start();
require_once("php/connectDB.php");


$name= $_POST['user']; #whatever the user will input, it will store in the name variable
$pass=$_POST['password'];
$s= "select * from usertable where name='$name'";

$result= mysqli_query($conn, $s);
$num= mysqli_num_rows($result);
if ($num==1)
{
  $_SESSION['flag']=1;

}

else {
  $_SESSION['flag']=2;
  $reg= "insert into usertable(name,password)values('$name','$pass')";
  mysqli_query($conn, $reg);

}
header('location:login.php');

 ?>
