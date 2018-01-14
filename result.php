<?php require "header.php";
	require "config.php"; 	?>

<div class ="view-candidate">

<center>
<h1>View Result</h1>

<form action="result.php" method="GET">
<select name="candidatename">
<?php 
$result=$con->query("SELECT *FROM add_candidate");
while($r=$result->fetch_assoc()){ ?>
<option value="<?php echo $r['name']; ?>"><?php echo $r['name']; ?></option><?php } ?>
</select>
<input type="submit" name="name" value="View Result">
</form>

<br><br>

<?php 
if(isset($_GET["candidatename"]))
{
	$name=$_GET["candidatename"];
	$result=$con->query("SELECT *FROM test WHERE candidate_name='$name' ");
if($r=$result->fetch_assoc())
{
	?>

<form method="GET">
<div class="view-box">	
<label>Name:</label>
<input type="text" name="name" value="<?php echo $r['candidate_name']; ?>"><br><br>
<label>Total Correct</label>
<input type="number" name="totalcorrect" value="<?php echo $r['total_right']; ?>"><br><br>
<label>Total Wrong:</label>
<input type="text" name="totalwrong" value="<?php echo $r['total_wrong']; ?>"><br><br>
<label>Total:</label>
<input type="text" name="total" value="<?php echo $r['total']; ?>"><br><br>
<a href="clear.php?name=<?php echo $r['candidate_name'];?> ">Clear Result</a>
</center>

</div>
</form>

<?php }} ?>
</div>

<?php require "footer.php"; ?>