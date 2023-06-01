<?php
include 'config.php';

$id=$_GET['id'];


$query = "update user set delete_id='1' where id='$id'";

mysqli_query($link,$query);

header('location:view.php');



?>