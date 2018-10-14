<?php
$cookie_name = "Peanut_Butter_Cookies";
$cookie_value = "very costly !";

if(!isset($_COOKIE[$cookie_name])) 
{ setcookie($cookie_name, $cookie_value, time() + (3600), "/"); 
   header("refresh:0"); } 

//had to add refresh because created cookie was not detected on the same request while creating it
   
// 3600 seconds = 1 hr expiration time. //time() gives the current time. "/" makes cookie accessible in all directories.

 


if(!isset($_COOKIE[$cookie_name])) 
    //$_COOKIE is a universal array which is defined whenever cookie is declared.
{
    echo "Cookie is not set :( ";
}   else {
    echo "Cookie '".$cookie_name."' is ready!<br>";
   
} 
    
?>

