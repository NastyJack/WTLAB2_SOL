<?php

$con=mysqli_connect("localhost","root","","test1");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_select_db($con,"test1");

$u=$_POST['u'];
$p=$_POST['p'];
$query1="INSERT INTO s06 VALUES ('$u','$p')";

if(mysqli_query($con,$query1))
    echo "Value entered !"; else echo "ERROR"; 

?>
