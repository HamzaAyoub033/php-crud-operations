<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

<?php

include 'config.php';


       
$check="SELECT * FROM user where email='".$_POST['email']."' || cellnumber='".$_POST['cellnumber']."'";

     $againcheck=mysqli_query($link,$check);
  
     $value= mysqli_num_rows($againcheck);

     if($value==0)
     {
     $query= "INSERT INTO user (fname,lname,cellnumber,email) VALUES ('".$_POST['f_name']."','".$_POST['l_name']."','".$_POST['cellnumber']."','".$_POST['email']."')";
     

     $rs =mysqli_query($link,$query);

     echo ("Data Added Successfully");
     }else
     {
     	echo("Email Or Cell Number Already Exists");
     }

?>
<br>
<a href="view.php" style="color: red; font-size: 24px; margin-left: 20px; margin-top: 70px;">View all Data</a>