<?php require "header.php";
require "config.php";
?>

<form style="padding-top:20px;" action="addquestionact.php" method="POST">
<center>
<div class="view-box">	
<label>Question:</label>
<input type="text" name="question" autofocus><br><br>
<label>Option 1:</label>
<input type="text" name="option_a" ><br><br>
<label>Option 2:</label>
<input type="text" name="option_b" ><br><br>
<label>Option 3:</label>
<input type="text" name="option_c" ><br><br>
<label>Option 4:</label>
<input type="text" name="option_d" ><br><br>
<label>Correct Answer:</label>
<input type="text" name="correct_answer" ><br><br>
<input type="submit" name="Submit" value="Add Question">

</div>
</form>
</center>
