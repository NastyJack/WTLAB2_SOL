<?php  


$n=$_POST['n'];
$it=$_POST['it'];
$d=$_POST['d'];



echo "</br> Name is ".$n;
echo "</br> Item type is ".$it;
echo "</br> Movie type is ";

if(isset($_POST["sub"])) //Checks if the submit button is pressed
{
    if(isset($_POST["mt"])) //checks if any interest is checked
    {
        foreach($_POST["mt"] as $value) //Iterate the interest array and get the values
        {
            echo  " ".$value;  //print the values
        }}}  


echo "</br> ".$it." description is ".$d;


?>
