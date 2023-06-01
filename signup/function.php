<?php
include 'config.php';

$id=$_POST['id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$cellnumber=$_POST['cellnumber'];
$email=$_POST['email'];

$query="UPDATE user set fname='$fname', lname='$lname',cellnumber='$cellnumber',email='$email' where id='$id'";

mysqli_query($link,$query);
header('location:view.php');


?>