<?php
include "db.php";
?>
<! DOCTYPE html>

<html>
	<head>
		<title>My first website</title>
		 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <style>
  body{}
			#container{
			padding:0 !important;
			margin:0 !important;
			
			:0px auto;
		}	
		#abc{
			background:black;
			
			margin:0 auto;
		}
		#abc li {
			float:left;
			list-style-type:none;
			color:blue;
			padding:10px 50px;
			text-align:center;
			width:200px;
		}
		#abc li:hover{
			background:white;
			color:brown;
		}
		#abc li a{
			color:blue;
			text-align:center;
		}
		#abc li a:hover{
			background:white;
			color:brown;
		}
		#content{
			background:gray;
			
			height:50px;
		}
		
.left-side{
	background:tan;
	width:900px;
	height:400px;
	float:left;
}
.right-side{
	background:silver;
	width:449px;
	height:400px;
	float:left;
padding:20px;
}
.right_top{
}
.right-top h2{
	font-family:arial;
	width:300px;
	text-align:center;
	padding:10px 0;
	text-decoration:underline;
}
.lat_upd{
	padding:10px;
	background:black;
	color:white;
	margin:10px 0;
	text-align:center;
	border:2px solid gray;
}
.lat_upd:hover{
	background:white;
	color:black;
	border:2px solid gray;
}
.card {
	width:48.5%; 
	height:75px;
	background-color:black;
	float:left;
	margin:10px 10px;
}
  </style>
	</head>
	<body>
	<?php
include("ha.php");
?>
	<div id="container">
			<ul id="abc">
			<li>Home</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Course</a>
					<ul class="dropdown-menu">
					<?php
					$db="SELECT DISTINCT shortName FROM courses;";
					$run=mysqli_query($conn,$db);
					while($rows=mysqli_fetch_assoc($run)){
						echo "
						<li><a href='#'>$rows[shortName]</a></li>
						";
					}
					?>
						
					</ul>
			</li>
				
		
			<li>Contact Us</li>
			<div style="clear:both"></div> 
			</ul>
			</div>
			<div id ="container">
			 <div id='content'>
			<div class='left-side'>
			<img src='sid6.jpg' alt='Flower' width='960' height='400'>
			</div>
			<div class='right-side'>
			<div class='right-top'>
			<center>
			<h2>Latest Updates</h2>
			</center>
			<div class='lat_upd'>We,re in the technical era</div>
			<div class='lat_upd'>Healthy food is really important</div>
			<div class='lat_upd'>Most os the patient has fever</div>
			<div class='lat_upd'>Windows 8, A new time</div>
			</div>
			<div style='clear:both;'></div>
			</div>
			<?php 
			$db="select * from courses";
			$run=mysqli_query($conn,$db);
			while($rows=mysqli_fetch_assoc($run)){
			echo "
			<div>
				<a href='syllabus.php?id=$rows[courseName]'><button class='btn card ' >$rows[courseName]</button></a>
			</div>
			";
			}
			?>
			</div>
			<?php
			include "fa.php";
			?>
	</body>
</html>
