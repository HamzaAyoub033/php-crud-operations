<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>
<body class="back">
<div class="login-form back">
  <form name="form" action="add.php" method="post">
  <h2 class="text-center">Sign Up</h2> 
  <div class="form-group">
  <input type="text" class="form-control" placeholder="First Name" name="f_name" >
  </div>
  <div class="form-group">
  <input type="text" class="form-control" placeholder="Last Name" name="l_name" >
  </div>
  <div class="form-group">
  <input type="number" class="form-control" placeholder="Cell Number" name="cellnumber">
  </div>
  <div class="form-group">
  <input type="email" class="form-control" placeholder="Email" name="email">
  </div>
  
  <p class="text-center"><a href="#">Alrady have an Account</a></p>
  <div class="form-group">
  <input type="submit" class="btn btn-primary btn-block" value="SignUp">
  </div>
  <div class="">
  <label class="float-left form-check-label"><input type="checkbox">Remember me</label>
  <a href="#" class="float-right">Forgot Password?</a>
  </div>
  </form>

  </div>
  
</body>






</html>