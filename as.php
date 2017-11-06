<?php
include("db.php");
if(isset($_REQUEST["submit"])){
	$name=$_REQUEST["fn"];
	$email=$_REQUEST["eml"];
	$password=$_REQUEST["pwd"];
	$repassword=$_REQUEST["repwd"];
	if($name==NULL)
	{
		echo "<script>alert('Kindly fill the name.');</script>";
	}
	else
	if($email==NULL){
		echo "<script>alert('Kindly fill the email.');</script>";
	}
	else
	if($password==NULL){
		echo "<script>alert('Kindly fill the password.');</script>";
	}
	else
	if($password==$repassword){
		$sql="insert into registration (userName,email,password) values('$name','$email','$password')";
		mysqli_query($conn,$sql);
		echo "<script>alert('succefully registered');</script>";
		header("Location:ma.php");
	}
	else
	{
	echo "<script>alert('password does not match');</script>";
	}
}
?>

<! DOCTYPE html>
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
input[type="confirmation"]{
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
<form method="post">
<h1>SIGNUP</h1>
<table>
<tr>
<p>FULL NAME</p>
<input type ="text" placeholder =" Full Name" name ="fn" requried>
</tr>
<tr>
<p>EMAIL</p>
<input type ="text" placeholder =" Email" name ="eml" requried>
</tr>
<tr>
<p>PASSWORD</p>
<input type ="password" placeholder =" password" name ="pwd" requried>
</tr>
<tr>
<p>Confirmation</p>
<input type ="password" placeholder =" confirmation" name="repwd" requried>
</tr>
<tr>
<p><input type="submit"value="Login" name="submit"></p>
</tr>
</tr>
</table>
</form>
</body>
</html>

