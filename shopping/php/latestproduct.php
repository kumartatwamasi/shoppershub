<?php
require_once("connectDB.php");
$latest='<div class="card-group divpad">';
$res=mysqli_query($conn,"SELECT * FROM `product` ORDER BY id DESC limit 4");

if(mysqli_num_rows($res))
   {
     while($row=mysqli_fetch_array($res))
     {
       $pname=$row['pname'];
       $image=$row['image'];
       $price=$row['price'];
       $category=$row['category'];
       $latest=$latest. '<div class="card">
         <img src="'.$image.'" class="card-img-top">
         <div class="card-body bodyk">
           <h5 class="card-title">'.$pname.'</h5>
           <p class="card-text">Dri-FIT technology wicks sweat away from your skin to help you stay dry and comfortable
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
           <a href="#" class="btn btn-primary">Buy now!</a>
       </div>';
    } #end of while
    $latest.='</div>';
  } #end of if
   else
   {
     $latest='No product avaialable </div>';
   }

 mysqli_close($conn);
 ?>
