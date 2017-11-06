<?php
include "db.php";
if(isset($_REQUEST['id'])){
$csname=$_REQUEST['id'];
}else{
	header("Location:xyz.php");
}

?>
<html>
<head>
    <title>study</title>
   <style>
   #container{
			
			margin:0px auto;
		}
      
       </style>
	   <script>
	   function syllabus_ajax(id){
		 
		   xhttp=new XMLHttpRequest();
		   xhttp.onreadystatechange = function() {
				if (xhttp.readyState == 4 && xhttp.status == 200) {
				document.getElementById("syllabus_data").innerHTML = xhttp.responseText;
				}
			};
			xhttp.open("GET", "syllabusData.php?id="+id, true);
			xhttp.send();
	   }
	   </script>
   
</head>
<body>
<?php include "ha.php" ?>
<div class="container">
<div class="row">
        <div class="col-md-4 pull-left" style="padding-top: 10px">
            <table class="table" style="border: 1px solid silver">
                <thead>
                <tr>
                    <th class="text-center">Syllabus</th>
                </tr>
                </thead>
                <tbody class="txt">
				<form method="post">
				<?php
				$db="select * from subcoursedetail where courseName='$csname';";
				$run=mysqli_query($conn,$db);
				while($rows=mysqli_fetch_assoc($run)){
				echo "
				<tr>
                <td><a href='javascript:' onclick='syllabus_ajax($rows[subCourseId])'>$rows[subCourseName]</a>
                </td></tr>
               	";
				}
				?>
                
                
                </form>
                </tbody>
            </table>
        </div>
        <div class="col-md-8 pull-right" id="syllabus_data" >
        
       </div>
    </div>
</div>
<br><br><br><br>
<div class="clearfix"></div>
<?php
include "fa.php";
?>
</body>
</html>
