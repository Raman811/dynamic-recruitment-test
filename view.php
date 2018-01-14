<?php require "header.php"; 
	require "config.php" 	?>

<div class ="view-candidate">

<center>
<h1>View Candidate</h1>

<form action="view.php" method="GET">
<select name="candidatename">
<?php 
$result=$con->query("SELECT *FROM add_candidate");
while($r=$result->fetch_assoc()){ ?>
<option value="<?php echo $r['name']; ?>"><?php echo $r['name']; ?></option><?php } ?>
</select>
<input type="submit" name="name" value="View">
</form>

<br><br>

<?php 
if(isset($_GET["candidatename"]))
{
	$name=$_GET["candidatename"];
	$result=$con->query("SELECT *FROM add_candidate WHERE name='$name' ");
if($r=$result->fetch_assoc())
{
	?>

<div class="view-box">	
<label>Name:</label>
<input type="text" name="name" value="<?php echo $r['name']; ?>"><br><br>
<label>Age:</label>
<input type="number" name="age" value="<?php echo $r['age']; ?>"><br><br>
<label>Gender:</label>
<input type="text" name="gender" value="<?php echo $r['gender']; ?>"><br><br>
<label>City:</label>
<input type="text" name="city" value="<?php echo $r['city']; ?>"><br><br>
<label>Qualification:</label>
<input type="text" name="qualification" value="<?php echo $r['qualification']; ?>"><br><br>
<label>Experience:</label>
<input type="number" name="experience" value="<?php echo $r['experience']; ?>"><br><br>
<label>Phone:</label>
<input type="number" name="phone" value="<?php echo $r['phone']; ?>"><br><br>
<label>Email:</label>
<input type="email" name="email" value="<?php echo $r['email']; ?>"><br><br>


<a href="session.php?candidate=<?php echo $r['name'];?>"> Start Test: <?php echo $r['name'] ?></a>
</center>


</div>


<?php }} ?>
</div>

<?php require "footer.php"; ?>