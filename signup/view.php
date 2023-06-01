<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">



    <title>Dashboard</title>
</head>


<body>


<?php
include 'config.php';
$view = "SELECT * FROM user";
$result = mysqli_query($link,$view);
$rows = mysqli_num_rows($result);
?>
<style type="text/css">

  th {
  padding-top: 8px;
  padding-bottom: 8px;
  text-align: left;
  background-color: #282C34;
  color: white;

}
tr:nth-child(even){background-color: #f2f2f2;}

tr:hover {background-color: #ddd;}
.ecolo{
  color: green;
  text-decoration: none;
   margin-left:30px;
}
.dcolo{
  color: red;
  text-decoration: none;
  float: right;
  margin-right: 20px;
}
.delcolo{
   color: orange;
  text-decoration: none;
  float:right;
  margin-right: 50px;
}
.delcolo:hover{
  border: 0.3px solid black;
  background-color: #fff;
}
.dcolo:hover{
  border: 0.3px solid black;
  background-color: #fff;
}
.ecolo:hover{
  border: 0.5px solid black;
  background-color: #fff;
}

</style>
<table id="datatable">
  <thead>
<tr>
      
     <th>ID</th>
     <th>First Name</th>
     <th>Last Name</th>
     <th>Cell Number</th>
     <th>E-mail Id</th>
   

</tr> 
</thead>
<?php

for($check=1; $check<=$rows; $check++)         
{
$rs = mysqli_fetch_array($result);
?>
<tbody>
<tr>
  <td><?php echo $rs['id']; ?> </td>
  <td><?php echo $rs['fname']; ?> </td>
  <td><?php echo $rs['lname']; ?> </td>
  <td><?php echo $rs['cellnumber']; ?> </td>
  <td><?php echo $rs['email']; ?> </td>
  
</tr>
</tbody>
<?php
}
?>
</table>

<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script>
$(document).ready(function () {
    $('#datatable').DataTable();
});
</script>
</body>
</html>




  
