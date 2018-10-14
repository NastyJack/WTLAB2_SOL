<?php session_start(); //Must be the first thing to start if it exists.

$_SESSION["username"]= $_POST['u']; // Set session variables
$_SESSION["password"]= $_POST['p'];

$mn=$_POST['mn'];
$mr=$_POST['mr'];

echo "</br> Username is ".$_SESSION["username"];
echo "</br> Movie name is ".$mn;
echo "</br> Movie rating is ".$mr;


?>
