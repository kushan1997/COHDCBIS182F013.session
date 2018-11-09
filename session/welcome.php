<?php
SESSION_START();
if(isset($_SESSION["uname"]) && time() - $_SESSION["LAT"]<=10)
{
}
else 
{ header("location : Login.php"); 
}
?>