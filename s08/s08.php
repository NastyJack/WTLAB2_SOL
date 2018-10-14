<?php  


$mn=$_POST['mn'];


$d=$_POST['d'];
$mr=$_POST['mr'];


echo "</br> Movie name is ".$mn;
echo "</br> Movie type is ";
if(isset($_POST["sub"])) //Checks if the submit button is pressed
{
    if(isset($_POST["mt"])) //checks if any interest is checked
    {
        foreach($_POST["mt"] as $value) //Iterate the interest array and get the values
        {
            echo  " ".$value;  //print the values
        }}}  


echo "</br> Movie description is ".$d;
echo "</br> Movie rating is ".$mr;

echo "<br><br>";
echo"<br>Comment 1 : Good";
echo"<br>Comment 2 : Great";
echo"<br>Comment 3 : Wow";
echo"<br>Comment 4 : Fantastice";



?>
