<! DOCTYPE html>
<?php
include("db.php");
if(isset($_REQUEST['submit'])){
	$email=$_REQUEST['uname'];
	$pwd=$_REQUEST['pwd'];
	$sql="select * from registration where email='$email'";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)<1){
		echo "<script>alert('invalid Email');</script>";
	}
	else
	{
		$rows=mysqli_fetch_assoc($result);
		if($pwd==$rows["password"])
		{
			session_start();
			$_SESSION['uid']=$rows['uid'];
			$_SESSION['name']=$rows['userName'];
			
			header("Location:ma.php");
		}
		else
		{
			echo "<script>alert('invalid password');</script>";
		}
	}
}
?>
<html>
<head>
<title>my website</title>
<link rel="stylesheet" href="style.css">
<style>
form{
	background-color:gray;
	text-align:center;
	width:500px;
	margin:0 auto;
	padding:10px
	font-weight:bold;
	border:2px solid black;
}
input[type="text"]{
	border:1px solid black;
	height:40px;
	width:250px;
}
input[type="password"]{
	border:1px solid black;
	height:40px;
	width:250px;
}
input[type="submit"]{
	width:250px;
	height:30px;
	background:black;
	color:white;
	font-weight:bold;
	border:2px solid black;
}
</style>
</head>
<body>
<?php
include "ha.php";
?>
<br>
<form method="post" >
<h1>Loginpage</h1>
<table>
<tr>
<p>Username</p>
<input type ="text" placeholder =" username" name ="uname" requried>
</tr>
<tr>
<p>Password</p>
<input type ="password" placeholder =" password" name ="pwd" requried>
</tr>
<tr>
<td><input type ="checkbox" checkedbox="checked">Remember me</td>
</tr>
<tr>
<p><input type="submit"value="Login" name="submit"></p>
</tr>

</table>
</form>
</body>
</html>

