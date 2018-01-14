<?php require "header.php" ?>
<div class="main-content">
<div class="about-site">
<center>

<h2>Acknowledgement</h2>
<p>This php project is a fully dynamic php website where candidates can go through a recruitment process by appearing in a screening test without any human interaction and can get the job at home.</p>

<a href="list.php">Final selected candidates</a>

</center>
</div>



<div class="login-panel">
<h3>
Login here
</h3>


<form action="loginact.php" method="POST">
Username:<input type="text" name="username" autofocus><br>
Password:<input type="password" name="password"><br>
<input type="submit" name="submit" value="Login">

</form>

<a href="register.php">Sign Up</a>

</div>


</div>

<?php require "footer.php" ?>