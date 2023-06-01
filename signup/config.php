<?php

   $server="localhost";
   $user="root";
   $password="";
   $database="valid";

   $link = mysqli_connect($server,$user,$password);

   mysqli_select_db($link,$database);

?>