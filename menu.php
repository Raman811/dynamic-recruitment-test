<?php

require "header.php";
require "config.php";

$pages= array("Add Candidate" =>"register.php" ,"View Candidate"=>"view.php","Result"=>"result.php","Test"=>"test.php?id=1","Add Question"=>"addquestion.php");

?>

<div class="menu">

<?php 
foreach ($pages as $page["key"]=>$page["value"]) {
	# code...
?>
<div class="nav-bar">
<center>
<a href="<?php echo $page["value"]; ?>"><?php echo $page["key"]; ?></a>

</center>
</div>

<?php } ?>

</div>


<?php require "footer.php"; ?>