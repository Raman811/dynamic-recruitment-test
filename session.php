<?php 
session_start();
$_SESSION["user"]=$_GET["candidate"];
header("Location:test.php?id=1");

?>