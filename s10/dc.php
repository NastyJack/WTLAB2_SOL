 <?php
//Use Ctrl+Shift+Del to manually delete cookies and history in browser.
// set the expiration date to one hour ago
$cookie_name = "Peanut_Butter_Cookies";


setcookie("$cookie_name", " ", time() - 2*3600, "/");

echo "Cookie is deleted.";
?>
