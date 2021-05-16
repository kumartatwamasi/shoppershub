<?php
session_start();
require_once("php/connectDB.php");
$name= $_POST['user'];
$pass=$_POST['password'];
$s= "select * from usertable where name='$name' && password= '$pass'";
$result= mysqli_query($conn, $s);
$num= mysqli_num_rows($result);
if ($num==1)
{
  $_SESSION['username']=$name;
  if($name=="admin")
  header('location:admin.php');
  else
  {
    header('location:index.php');
  }
}
else {
  header('location:login.php');
}
?>
