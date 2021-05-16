<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark ">
<div class="container-fluid">
  <a class="navbar-brand" href="#">Brandname</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="section.php?type=men">Men's section</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="section.php?type=women">Women's section</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="section.php?type=accessories">Accessories</a>
          </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Others
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <?php
        $temp="";
        if(empty($_SESSION))
        {
          $temp.='<li><a class="dropdown-item" href="login.php">Login/signup</a></li>';
        }
        else {
          $temp.='<li><a class="dropdown-item" href="php/logout.php">Logout</a></li>';
        }
        echo $temp;
        ?>
        </ul>

      </li>

      <span class="navbar-text">
          <?php

           if(!empty($_SESSION))
           {
             echo $_SESSION['username'];
           }
           ?>
        </span>


   </ul>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>



  </div>
</div>
</nav>
