<?php  

$name=$_POST["name"];
$age=$_POST["age"];
$gender=$_POST["gender"];
$city=$_POST["city"];
$qualification=$_POST["qualification"];
$experience=$_POST["experience"];
$phone=$_POST["phone"];
$email=$_POST["email"];

require "config.php";

$con->query("INSERT INTO `add_candidate`(`name`, `age`, `gender`, `city`, `qualification`, `experience`, `phone`, `email`) VALUES ('$name','$age','$gender','$city','$qualification','$experience','$phone','$email')");

$con->query("INSERT INTO test (candidate_name,total_right,total_wrong,total) VALUES ('$name','0','0','0')");

echo "
<script> alert('You have been successfully registered')</script>" ;

?>