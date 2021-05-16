<?php
 session_start();
?>
<!DOCTYPE.html>
<html>
<head>
  <!--
  <base href="C:\xampp\htdocs\shopping"> -->
  <title> Section</title>
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

    <?php require_once("php/categorize.php");
    ?>

  <div id="breadcrumb">
    <h2> Section page<br> </h2>
    <h4> Home / <?php echo $type; ?> section </h4>
  </div>
  <?php
     echo $list;
  ?>

  <!--card section begins-->
  <!--
  <div class="card-group divpad">
    <div class="card">
      <img src="dependencies/pics/product-3.jpg" class="card-img-top" alt="Fresh new joggers">
      <div class="card-body bodyk">
        <h5 class="card-title">Joggers for men</h5>
        <p class="card-text">Dri-FIT technology wicks sweat away from your skin to help you stay dry and comfortable
          <ul style="list-style-type:disc;">
           <li>Lean from hip to ankle</li>
            <li>Sits at waist</li>
              <li>88% polyester, 12% elastane</li>
             <li>Extra stretch for mobility</li>
             <li>Machine-wash</li>
             <li> Affordable</li>
             <li>Currently at its lowest price</li>
                 </ul>
        </p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Best jogger in the market is waiting for you!</small>
      </div>
        <a href="#" class="btn btn-primary">Buy now!</a>
    </div>
    <div class="card">
      <img src="dependencies/pics/jeans.jpg" class="card-img-top" alt="Exclusive Levis jeans">
      <div class="card-body bodyl">
        <h5 class="card-title">Levis Jeans at best prices</h5>
        <p class="card-text">Want to look trendy this summer? Have a look at this awesome Levis jeans which is purely made from cotton. The relaxed fit 505™ from Levi's® is the perfect pair of jeans for everyday casual wear.<br>
          <ul style="list-style-type:disc;">
           <li>Lean from hip to ankle</li>
            <li>Sits at waist</li>
              <li>Skinny from hip to ankle</li>
             <li>Extra stretch for mobility</li>
             <li>Best in class</li>
             <li> Affordable</li>
             <li>Currently at its lowest price</li>
                 </ul>
        </p>

       </div>
      <div class="card-footer">
        <small class="text-muted">What are you waiting for? Buy soon!</small>
      </div>
        <a href="#" class="btn btn-primary">Buy now!</a>
    </div>



<div class="card">
  <img src="dependencies/pics/nike.jpg" class="card-img-top" alt="Nike shoes">
  <div class="card-body bodyl">
    <h5 class="card-title">Nike shoes at best prices</h5>
    <p class="card-text">Want to look trendy this summer? Have a look at this awesome Nike which is purely made from comfy material. The Air Max Plus from Nike is the perfect pair of shoes for everyday casual wear.<br>
      <ul style="list-style-type:disc;">
       <li>Awesome material</li>
        <li>pretty comfortable</li>
          <li>New Arrival in stock</li>
         <li>Soothing design</li>
         <li>Best in class</li>
         <li> Affordable</li>
         <li>Currently at its lowest price</li>
             </ul>
    </p>

   </div>
  <div class="card-footer">
    <small class="text-muted">Take home these awesome sneakers</small>
  </div>
    <a href="#" class="btn btn-primary">Buy now!</a>
</div>


<div class="card">
  <img src="dependencies/pics/kohli.jpg" class="card-img-top" alt="Jacket">
  <div class="card-body bodym">
    <h5 class="card-title">Wrogn Jacket at awesome price</h5>
    <p class="card-text">An Olive Camouflage Puffer Jacket With Full Sleeves And Fitted Cuffs , A Full Front Button Closure, Two Side Pockets, A Regular Collar With An Attached Hoodie With Drawstrings & A Fitted Hem With Drawstrings.<br>
      <ul style="list-style-type:disc;">
        <li> Wear what Virat likes!</li>
       <li>Awesome material</li>
        <li>pretty comfortable</li>
          <li>New Arrival in stock</li>
         <li>Soothing design</li>
         <li>Best in class</li>
         <li> Affordable</li>
         <li>Currently at its lowest price</li>
             </ul>
    </p>

   </div>
  <div class="card-footer">
    <small class="text-muted">Buy this best Jacket for your special occasion
    </small>
  </div>
    <a href="#" class="btn btn-primary">Buy now!</a>
</div>
-->
<?php require_once("php/categorize.php");
?>
<?php require_once("php/footer.php");
?>
</body>
</html>
