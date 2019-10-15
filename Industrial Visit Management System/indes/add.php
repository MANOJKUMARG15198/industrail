<?php
if(isset($_POST["submit"]))
{
$servername="localhost";
$username="root";
$password="";
mysql_connect($servername,$username,$password);
mysql_select_db("industriyal");
$com=$_POST["com"];
$trav=$_POST["trav"];
$file1=$_POST["file1"];
$date=$_POST["date"];
$end=$_POST["end"];
$mail=$_POST["mail"];




$query=mysql_query(" INSERT INTO `industriyal`.`cooo` (`id`, `com`, `trav`,`file1`,`date`, `end`,`mail`) VALUES (NULL, '$com', '$trav', '$file1','$date', '$end','$mail');");
if($query)
{
	echo"<script>alert('add success!'); location.href='';</script>";
}
else
{
	echo"<script>alert('invalid !')</script>";
}
}
?>







<?php
if(isset($_POST["submit"]))
{
$servername="localhost";
$username="root";
$password="";
mysql_connect($servername,$username,$password);
mysql_select_db("industriyal");
$username=$_POST["username"];
$password=$_POST["password"];

$query=mysql_query("SELECT * FROM `admin` WHERE username='$username' AND password='$password' ");
if(mysql_num_rows($query)>0)
{
	if($user==1);
	echo"<script>alert('login success!'); location.href='adminview.php';</script>";
}

else
{
	echo"<script>alert('invalid login!')</script>";
}

}
?>








<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>About - Bhaccasyoniztas Beach Resort Web Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="background">
		<div id="page">
			<div id="header">
				<div id="logo">
				
				</div>
				<div id="navigation">
					<ul>
						<li class="active">
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="add.php">ADD DETAILS</a>
					</li>
					<li>
						<a href="staff.php">COMPANY</a>
					</li>
					<li>
						<a href="tran.php">TRANSPORT</a>
					</li>
					<li>
						<a href="app.php">APPRUVAL</a>
					</li>
					
					
					<li>
						<a href="index.php">LOGOUT</a>
					</li>
					
					</ul>
				</div>
			</div>
			<div id="contents">
				<div class="box">
					<div>
			<center>
	   <h3><b>ADD details</b></h3><br>
	   <form action="" method="POST">
<tr><td><label><b>Department</b></label></td>  <select name="com">&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;

  <option value="mech">MECH</option>
  <option value="ece">ECE </option>
  <option value="it">IT</option>
  <option value="cse">CSE</option>
   <option value="civel">CIVEL</option>
   
</select><br><br></tr>

 &nbsp; &nbsp;&nbsp;<tr><td><label><b>NO of students </b></label></td>  <input type="text" name="trav">
  </tr><tr><td>
  <br><br></tr>
 Students list:&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<a href="upload.php" >go to upload </a><br><br>
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<tr><td><label><b>Start Date</b></label></td>  <input type="text" name="date"><br><br></tr>
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<tr><td><label><b>End Date</b></label></td>  <input type="text" name="end"><br><br></tr>

&nbsp;&nbsp;  &nbsp;<tr><td><label><b>Package Cost</b></label></td>  <input type="text" name="mail"><br><br></tr>


 

	  
	   <input type="submit" name="submit"><br><br>
	   </form>
	   
	   
	   </center>
	  
       
       
					</div>
				</div>
			</div>
		</div>
		<br><br><br><br><br><br><br><br>
		<div id="footer">
			<div>
				<ul class="navigation">
					<li class="active">
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="about.php">About</a>
					</li>
					<li>
						<a href="admin.php">Admin</a>
					</li>
					<li>
						<a href="coordinator.php">coordinator </a>
					</li>
					<li>
						<a href="hod.php">Hod</a>
					</li>
					<li>
						<a href="transport.php">Transport </a>
					</li>
					<li>
						<a href="principal.php">principal</a>
					</li>
					<li>
						<a href="register.php">Register</a>
					</li>
				</ul>
				<div id="connect">
					<a href="http://pinterest.com/fwtemplates/" target="_blank" class="pinterest"></a> <a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a> <a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a> <a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a>
				</div>
			</div>
			<p>
			
			</p>
		</div>
	</div>
</body>
</html>