<style>
     table{ 
            border-collapse: collapse;
        }
        
        tr,td,th{ 
               width:30px;
               border:1px solid black;
               padding:10px;
        }
</style>
<?php


$con=mysqli_connect("localhost","root","","test1");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_select_db($con,"test1");



$query1="SELECT * FROM user_table LEFT JOIN department_table ON user_table.User_id = department_table.User_id WHERE user_table.User_name LIKE 'a%'";


$result = mysqli_query($con, $query1);
mysqli_query($con,$query1);

   echo"<table><tr><th>User_Id</th><th>User_name</th><th>Designation</th><th>Department</th><th>Salary</th></tr>";
    
        
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    

        echo"<tr><td>".$row["User_Id"]."</td><td>".$row["Department"]."</td><td>".$row["User_name"]."</td><td>".$row["Designation"]."</td><td>".$row["Salary"]."</td></tr>";
       
    
    }  echo"</table>";
} else {
    echo "0 results";
}



?>
