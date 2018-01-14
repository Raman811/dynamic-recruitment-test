<?php  

$question=$_POST["question"];
$option_a=$_POST["option_a"];
$option_b=$_POST["option_b"];
$option_c=$_POST["option_c"];
$option_d=$_POST["option_d"];
$correct_answer=$_POST["correct_answer"];

require "config.php";

$con->query("INSERT INTO `quiz1`(`question`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_answer`) VALUES ('$question','$option_a','$option_b','$option_c','$option_d','$correct_answer')");

echo "
<script> alert('You have added a question successfully.')</script>" ;

?>