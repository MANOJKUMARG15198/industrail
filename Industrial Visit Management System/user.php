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
$students=$_POST["students"];
$seats=$_POST["seats"];
$date=$_POST["date"];
$end=$_POST["end"];
$acc=$_POST["acc"];
$mail=$_POST["mail"];
$file=$_POST["file"];



$query=mysql_query(" INSERT INTO `industriyal`.`cooo` (`id`, `com`, `trav`,`students`, `seats`, `date`, `end`, `acc`, `mail`, `file`) VALUES (NULL, '$com', '$trav', '$students','$seats', '$date', '$end', '$acc', '$mail', '$file');");
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
						<a href="admin.php">Admin</a>
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
	   <h3><b>Package details</b></h3><br>
	   <form action="" method="POST">
<tr><td><label><b>Select Company</b></label></td>  <select name="com">
  <option value="webro">Webro</option>
  <option value="orange">Orange </option>
  <option value="colors">Colors</option>
  <option value="cts">CTS</option>
</select><br><br></tr>

<tr><td><label><b>Type Of Travaling</b></label></td>  <select name="trav">
  <option value="bus">Bus</option>
  <option value="train">Train </option>
  <option value="flight">Flight</option>
  
</select><br><br></tr>
 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<tr><td><label><b>No Students</b></label></td>  <input type="text" name="students"><br><br></tr>
<tr><td><label><b>Number of Seats</b></label></td>  <input type="text" name="seats"><br><br></tr>
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<tr><td><label><b>Start Date</b></label></td>  <input type="text" name="date"><br><br></tr>
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;<tr><td><label><b>End Date</b></label></td>  <input type="text" name="end"><br><br></tr>
&nbsp; &nbsp;<tr><td><label><b>Accoumdation</b></label></td>  <input type="text" name="acc"><br><br></tr>
&nbsp; &nbsp;<tr><td><label><b>Package Cost</b></label></td>  <input type="text" name="mail"><br><br></tr>
&nbsp;&nbsp; <tr><td><label><b>image</b></label></td>  <input type="file" name="file"><br><br></tr>

	  
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