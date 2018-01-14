<?php require "header.php" ?>

<div class="register">
<center>
<h1>Add Candidate</h1>

<form action="regact.php" method="POST">
<label>Name:</label>
<input type="text" name="name" autofocus><br><br>
<label>Age:</label>
<input type="number" name="age"><br><br>
<label>Gender:</label>
<input type="text" name="gender"><br><br>
<label>City:</label>
<input type="text" name="city"><br><br>
<label>Qualification:</label>
<input type="text" name="qualification"><br><br>
<label>Experience:</label>
<input type="number" name="experience"><br><br>
<label>Phone:</label>
<input type="number" name="phone"><br><br>
<label>Email:</label>
<input type="email" name="email"><br><br>
<input type="submit" name="submit" value="Register">
<a href="menu.php">menu</a>

</form>
</center>

</div>

<?php require "footer.php" ?>