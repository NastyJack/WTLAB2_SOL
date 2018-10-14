<?php

$cookie_name = "Peanut_Butter_Cookies";
//print_r($_COOKIE); can also be used for server side check.
if(isset($_COOKIE[$cookie_name])) 
    echo "Cookie value is = " . $_COOKIE[$cookie_name];
 else echo "Cookie not available.";
?>