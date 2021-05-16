<?php
require_once("connectDB.php");
$list='<div class="card-group divpad">';
if(!empty($_GET['type']))
{
  $type=$_GET['type']; #type is a string
  $result=mysqli_query($conn, "SELECT * FROM `product` WHERE category='".$type."'");


if(mysqli_num_rows($result))
{
  while($row=mysqli_fetch_array($result))
  {
    $pname=$row['pname'];
    $image=$row['image'];
    $price=$row['price'];
    $list=$list. '<div class="card">
          <img src= "'.$image.'" class="card-img-top" alt="'.$pname.'">
          <div class="card-body bodyk">
            <h5 class="card-title">'.$pname.'</h5>
            <p class="card-text">Dri-FIT technology kicks sweat away from your skin to help you stay dry and comfortable
              <ul style="list-style-type:disc;">
               <li>Lean from hip to ankle</li>
                <li>Sits at waist</li>
                  <li>88% polyester, 12% elastane</li>
                 <li>Extra stretch for mobility</li>
                 <li>Machine-wash</li>
                 <li> Affordable</li>
                 <li>'.$price.'</li>
                     </ul>
            </p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Best jogger in the market is waiting for you!</small>
          </div>
            <a href="payment.php" class="btn btn-primary">Buy now!</a> </div>';

  }
  $list .= '</div>';
}
else
 {
  $list= 'No product availavle </div>';
}
}
mysqli_close($conn);
?>
