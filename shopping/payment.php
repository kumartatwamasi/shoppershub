<?php
 session_start();
?>
<!DOCTYPE.html>
<html>
<head>
  <!--
  <base href="C:\xampp\htdocs\shopping"> -->
  <title> Payments</title>
  <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" type="text/css" href="dependencies/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="dependencies/css/index.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="dependencies/js/bootstrap.min.js" ></script>
<!--style-->

</head>
<body>

    <?php require_once("php/header.php");
    ?>

<div class="bodyl">

<div id="breadcrumb">
  <h2> Payment Page<br> </h2>
</div>
 <!-- address-->

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Enter your name</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name">
</div>

   <div class="mb-3">
     <label for="exampleFormControlTextarea1" class="form-label">Enter the delivery address</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <!--mode of payment -->
   <div id="breadcrumb">
      <h3> Select your mode of payment</h3>
       <select class="form-select" aria-label="Default select payment mode">
       <option selected>Mode of payment</option>
       <option value="1">Debit Card</option>
       <option value="2">COD</option>
       </select>
   </div>
<!--closing outer div-->
<a href="thankyou.php"><button class="btn btn-primary">Confirm</button></a>
</div>
</html>
