<?php

$con=mysqli_connect("localhost","root","","test1");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_select_db($con,"test1");


  $query1="CREATE TABLE user_table (User_Id text,User_name text,Password text)";
  $query2="INSERT INTO User_Table VALUES    (1,'abc','abc@123'),
                                            (2,'bcd','bcd@123'),
                                            (3,'cde','bcd@123'),
                                            (4,'def','def@123'),
                                            (5,'efg','efg@123'),
                                            (6,'aef','aef@123')";
 $query3="CREATE TABLE department_table (User_Id text,Department text,Designation text,Salary int)";
 $query4="INSERT INTO department_table VALUES    (1,'sales','Manager',30000),
                                                 (2,'admin','Care taker',15000),
                                                 (3,'Human Resource','Asst Manager',20000),
                                                 (4,'operations','Head',50000),
                                                 (5,'Human resource','Assistant',17000),
                                                 (6,'finance','lead',25000)";
    

if(mysqli_query($con,$query1)&&mysqli_query($con,$query2)&&mysqli_query($con,$query3)&&mysqli_query($con,$query4))
    echo "Table created and values entered !"; else echo "ERROR or Tables already exists"; 

?>
