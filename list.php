<?php require "header.php";
require "config.php";

$result=$con->query("SELECT *FROM test WHERE total_right>3 ");?>
<table border="1" style="width:100%">
<tr>
<th>Id</th>
<th>Name</th>
<th>Total Correct</th>
<th>Total Wrong</th>
<th>Total Marks Obtained</th>
<tr>

<?php
while($r=$result->fetch_assoc()){
?>

<tr>
<th><?php echo $r['id']; ?></th>
<th><?php echo $r['candidate_name']; ?></th>
<th><?php echo $r['total_right']; ?></th>
<th><?php echo $r['total_wrong']; ?></th>
<th><?php echo $r['total']; ?></th>
</tr>


<?php }
 ?>
 </table>

