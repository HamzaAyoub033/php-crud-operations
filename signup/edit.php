<link rel="stylesheet" type="text/css" href="style.css">

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

<?php
include 'config.php';

$id=$_GET['id'];

$query="SELECT * FROM user where id='$id'";
$result=mysqli_query($link,$query);
$rs=mysqli_fetch_array($result);


?>
<body class="back">
<div class="login-form back">
  <form name="form" action="function.php" method="post">
  <h2 class="text-center">Update User</h2>
   <div class="form-group">
  <input type="number" name="id" value="<?php echo $id; ?>" hidden>
  </div> 
  <div class="form-group">
  <input type="text" class="form-control" name="fname" value="<?php echo $rs['fname']; ?>">
  </div>
  <div class="form-group">
  <input type="text" class="form-control" name="lname" value="<?php echo $rs['lname']; ?>">
  </div>
  <div class="form-group">
  <input type="number" class="form-control" name="cellnumber" value="<?php echo $rs['cellnumber']; ?>">
  </div>
  <div class="form-group">
  <input type="email" class="form-control" name="email" value="<?php echo $rs['email']; ?>">
  </div>
  
  <div class="form-group">
  <input type="submit" class="btn btn-primary btn-block" value="Update">
  </div>

  </form>
</div>
</body>

  