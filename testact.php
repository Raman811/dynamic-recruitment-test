<?php require "config.php"; 
$id=$_GET['id'];
$answer=$_POST["answer"];
$result=$con->query("SELECT *FROM quiz1 WHERE id='$id' ");

if($r=$result->fetch_assoc())
{
	if($r["correct_answer"]==$answer)
	{
		//echo "<script> alert('correct answer'); </script>" ;
		session_start();
		$user=$_SESSION["user"];
		$result=$con->query("SELECT * FROM test WHERE candidate_name='$user' ");
		if($rr=$result->fetch_assoc())
		{
			$correct=$rr['total_right'];
			$wrong=$rr['total_wrong'];
			$total=$rr['total'];

			++$correct;
			++$total;


			$con->query("UPDATE test SET total_right='$correct',total='$total' WHERE candidate_name='$user' ");
			++$id;

			if($id<6)
			{
				header("Location:test.php?id=".$id);
			}
			else
			{
				header("Location:endtest.php");
			}
		}
	}
	else
	{
		session_start();
		$user=$_SESSION["user"];

		$result=$con->query("SELECT *FROM test WHERE candidate_name='$user' ");
		if($rr=$result->fetch_assoc())
		{
			$correct=$rr['total_right'];
			$wrong=$rr['total_wrong'];
			$total=$rr['total'];

			++$wrong;

			$con->query("UPDATE test SET total_wrong='$wrong' WHERE candidate_name='$user' ");

			++$id;

			if($id<6)
			{
				header("Location:test.php?id=".$id);
			}
			else
			{
				header("Location:endtest.php");
			}
		}
	}
}
?>