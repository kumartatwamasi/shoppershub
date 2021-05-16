<?php
session_start();
$_SESSION['flag']=0;
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login and Registration</title>
    <link rel="stylesheet" type="text/css" href="dependencies/css/style.css">
    <link rel="stylesheet" type="text/css" href="dependencies/css/bootstrap.min.css">
</head>
<body>
<!--form starts-->

<div class="container">
  <div class="login-box">
    <div class="row">
      <div class="col-md-6 login-left">
        <h2> Login Here </h2>
        <form action="validation.php" method="post">
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="user" class="form-control" required>
          </div>
  <!--password-->

  <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control" required>
  </div>
  <button type="submit" class="btn btn-primary"> Login</button>
          </form>
      </div>

<!--Register.php-->

        <div class="col-md-6 login-right">
          <h2> Register Here </h2>
          <form action="registration.php" method="post">
            <div class="form-group">
              <label>Username</label>
              <input type="text" name="user" class="form-control" required>
            </div>
    <!--password-->

    <div class="form-group">
      <label>Password</label>
      <input type="password" name="password" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary"> Register</button>
            </form>
        </div>
      </div>
    </div>
  </div>
  <!--the following div tag ends the container-->
<?php
if($_SESSION['flag']==1)
{
   echo "<h3>Username already taken</h3>";
}
else if($_SESSION['flag']==2)
{
  echo "<h3>Registered successfully</h3>";
}

?>
</body>
</html>
