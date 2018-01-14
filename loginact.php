<?php

require "config.php";

$username=$_POST["username"];
$password=$_POST["password"];



$result=$con->query("SELECT *FROM admin WHERE username='$username' and password='$password'");

if($r = $result -> fetch_assoc())
{
	header("location:menu.php");
}
else
{
	echo "You entered a wrong combination of username and password";
}

?>