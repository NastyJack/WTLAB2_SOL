<?php

$con=mysqli_connect("localhost","root","","test1");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_select_db($con,"test1");

  $query1="CREATE TABLE s06 (Username text,Password text)";

if(mysqli_query($con,$query1))
    echo "Table created !"; else echo "ERROR or Tables already exists"; 

?>
