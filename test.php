<?php require "header.php";
require "config.php";
?>

<div class="test main-content">


<?php 
$qid=1;
if((isset($_GET["id"])!=null)and(($_GET["id"])<6))
{
	$qid=$_GET["id"];

$result=$con->query("SELECT *FROM quiz1 WHERE id='$qid' ");
while($r=$result->fetch_assoc())
{ 

?>
<center><h1>Test<br>Welcome: <?php session_start(); echo $_SESSION["user"];?> </h1></center>
Question:<?php echo $r['id']." "; ?>
<?php echo $r['question']; ?><br><br>	
<form method="POST" action="testact.php?id=<?php echo $r["id"]; ?>">
<input type="radio" name="answer" value="<?php echo $r['option_a']; ?>"><?php echo $r['option_a']; ?><br><br>
<input type="radio" name="answer" value="<?php echo $r['option_b']; ?>"><?php echo $r['option_b']; ?><br><br>
<input type="radio" name="answer" value="<?php echo $r['option_c']; ?>"><?php echo $r['option_c']; ?><br><br>
<input type="radio" name="answer" value="<?php echo $r['option_d']; ?>"><?php echo $r['option_d']; ?><br><br>
<input type="submit" name="Submit" value="Next">
</form>


</div>
<?php } } ?>
<?php require "footer.php" ?>