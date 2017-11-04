<?php
include "db.php";
if(isset($_REQUEST['id'])){
$db="select * from subcoursedetail where subCourseId='$_REQUEST[id]'";
$run=mysqli_query($conn,$db);
while($rows=mysqli_fetch_assoc($run)){
	echo"
	<h2>$rows[subCourseName]</h2>
	<hr style='height:3px;border:none;color:#333;background-color:#333;' >
	<br>
	<p class='text-justify' style='font-size:18px'>$rows[subCourseDetails]</p>
	";
}
}

?>