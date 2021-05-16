<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
  <base href="http://localhost/shopping/">
  <title> AAA</title>
  <meta charset="UTF-8">
 <meta name="description" content="Shopping site">
 <meta name="author" content="Shubhalaxmi, Prabhu,Kumar">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" type="text/css" href="dependencies/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="dependencies/css/index.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="dependencies/js/bootstrap.min.js" ></script>

  </head>
<body>

<!--means that, the content of file header.php will be pasted-->

  <?php require_once("php/header.php");
  ?>


  <?php require_once("php/latestproduct.php");
  ?>


  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel divpad">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="dependencies/pics/product-1.jpg" class="d-block w-100" alt="CR7">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color:black">CR7 X Nike</h5>
        <p style="color:black">There is nothing better than this! Shope exclusive T-shirt now!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="dependencies/pics/product-2.jpg" class="d-block w-100 " alt="Air Jordan" >
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color:black">Nike Air Jordan</h5>
        <p style="color:black">Grab your Air Jordan at the best price!!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="dependencies/pics/product-5.jpg" class="d-block w-100" alt="Wrogn">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color:black">Exclusive Wrogn product</h5>
        <p style="color:black">Get the best product from the house of King Kohli!</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  <div class="container sectionh">
    <div class="row">
     <div class="col">Fast Payments</div>
      <div class="col">Premium Prodcuts</div>
      <div class="col">Fast delivery</div>
      </div>
  </div>
</div>




<?php
echo $latest;
?>

<div class="card bg-dark text-white">
  <img src="dependencies/pics/ooz.jpg" class="card-img" alt="sneakers">
  <div class="card-img-overlay">
    <h5 class="card-title">New Arrival</h5>
    <p class="card-text">Create, then re-create. Designed in the '90s,<br>
                         the Yeezy running shoe was famous for lightweight comfort and '90s style. <br>
                       These adidas shoes take the best of that retro style and twist it into something brand new.<br>
                        Tubing at the heel adds an authentic retro-tech detail.</p>
    <p class="card-text">Just the perfect combination for any casual occasion.<br>
                        Reflective mesh upper<br>
                        Textile lining: Rubber outsole Breathable feel<br>
                        Country of Origin: Vietnam</p>
      <a href="#" class="btn btn-primary">Buy now!</a>
  </div>
</div>
<!--newarrival ends-->
<?php require_once("php/footer.php");
?>

</body>
</html>
