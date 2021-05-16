<?php
require_once("php/connectDB.php");
$admin='<table class="table caption-top">
<thead>
  <tr>
    <th scope="col">id</th>
    <th scope="col">Product</th>
    <th scope="col">price</th>
    <th scope="col">quantity</th>
    <th scope="col">category</th>
  </tr>
</thead>
<tbody>';
$res=mysqli_query($conn,"SELECT * FROM `product` ORDER BY id DESC");
if(mysqli_num_rows($res))
{
  while($row=mysqli_fetch_array($res))
  {
    $id=$row['id'];
    $pname=$row['pname'];
    $price=$row['price'];
    $quantity=$row['quantity'];
    $category=$row['category'];
    $admin=$admin. '<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$pname.'</td>
      <td>'.$price.'</td>
      <td>'.$quantity.'</td>
      <td>'.$category.'</td>
    </tr>';
  }
$admin.='</tbody> </table>';
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="dependencies/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="dependencies/css/index.css">
</head>

<nav class="navbar navbar-light bg-dark">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Admin Page</span>
    <li class="nav-item">
      <a class="nav-link" href="php/logout.php">Logout</a>
      </li>
  </div>


</nav>

<body>
<div id="breadcrumb">
  <h2>The Admin Page<br> </h2>
  <h4> Welcome to Admin Page </h4>
</div>

<?php
 echo $admin;
 ?>


 <div id="breadcrumb">
<h4> Enter product details </h4>

<form action="addproduct.php" method="post">
 <div class="mb-3">
   <label for="exampleInputEmail1" class="form-label">Product</label>
   <input name="pname" type="text" class="form-control"  aria-describedby="emailHelp">

 </div>
 <div class="mb-3">
   <label for="exampleInputPassword1" class="form-label">Quantity</label>
   <input name="quant" type="number" class="form-control" >
 </div>

 <select name= "category" class="form-select" aria-label="Default select example">
  <option selected>Select your category</option>
  <option value="men">Men</option>
  <option value="women">Women</option>
</select>

<div class="mb-3">
  <label for="exampleInputPassword1" class="form-label">Image</label>
  <input name="image" type="text" class="form-control" >
</div>

 <div class="mb-3">
   <label for="exampleInputPassword1" class="form-label">Price</label>
   <input name="price" type="number" class="form-control" >
 </div>

 <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>
