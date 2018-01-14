<?php
require "header.php";
require "config.php";

$name=$_GET['name'];

$con->query("UPDATE `test` SET `total_right`=0,`total_wrong`=0,`total`=0 WHERE candidate_name='$name' ");

header("location:result.php");

?>