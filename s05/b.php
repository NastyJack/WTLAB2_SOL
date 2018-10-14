<?php

$em=$_POST['em'];
$tn=$_POST['tn'];
$age=$_POST['age'];


$a1=preg_match("/^(.*?[A-Z]){2,}/",$em); //check for 2 uppercase letters
$a2=preg_match("/^(.*?[!@#$%^&*()_+]){1,}/", $em);//checks for at least 1 special characters
$a3=preg_match("/^.{1,10}$/",$em);//check for at most 10 chars.
if (!filter_var($em, FILTER_VALIDATE_EMAIL)) 
    { echo "Invalid email format"; $a4=0; }
    else {$a4=1;  //echo "GOOD EMAIL";
          if( $a1 && $a2 && $a3 && $a4 )
            {  $a=1; } //$a holds email validated flag.
                else { $a=0; echo "ERROR - Must contain 2 uppercase, 1 special and at most 10 characters. Error Code= ".$a1.$a2.$a3.$a4; }
      }

 if($a && $age>18)
 {echo "LOGGED IN ";       
$con=mysqli_connect("localhost","root","","test1");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_select_db($con,"test1");


  $query1="CREATE TABLE s05 (Email text,Telephone_No text,Age text)";
  $query2="INSERT INTO s05 VALUES ('$em','$tn','$age')";

   if(mysqli_query($con,$query2))
      { echo " Values Entered in table s05"; }

    else {mysqli_query($con,$query1); mysqli_query($con,$query2); echo " Table s05 created and Values Entered "; }
       } 
else {echo " NO LOG IN FOR YOU, GET OLD . ";}

?>