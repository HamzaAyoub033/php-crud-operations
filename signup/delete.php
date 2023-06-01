<?php
include 'config.php';

$id=$_GET['id'];


$query = "DELETE from user where id='$id'";
mysqli_query($link,$query);
header('location:view.php');



?>