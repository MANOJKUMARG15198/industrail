<?php
if(isset($_POST["submit"]))
{
$servername="localhost";
$username="root";
$password="";
mysql_connect($servername,$username,$password);
mysql_select_db("industriyal");
$a=$_POST["a"];
$b=$_POST["b"];

$c=$_POST["c"];
$username=$_POST["username"];
$password=$_POST["password"];
$query=mysql_query(" INSERT INTO `industriyal`.`co` (`id`, `a`, `b`,`c`, `username`,`password`) VALUES (NULL, '$a', '$b','$c', '$username','$password');");
if($query)
{
	echo"<script>alert('add success!');</script>";
}
else
{
	echo"<script>alert('invalid !')</script>";
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
						<a href="index.php">HOME</a>
					</li>
					<li>
						<a href="admin1.php">VIEW</a>
					</li>
					<li>
						<a href="admin2.php">USER</a>
					</li>
					<li>
						<a href="admin3.php">User DETAILS </a>
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
					<br><br>
					<h1>Add User</h1>
			<form action="" method="POST">
		 &nbsp;  &nbsp;  &nbsp;<label>Name</label>	<input type="text" name="a" ><br><br>
 &nbsp;<label>Roll No</label> <input type="text" name="b" ><br><br>
			            &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;<label>Ph</label> <input type="text" name="c" ><br><br>
			<label>Username</label> <input type="text" name="username" ><br><br>
			<label>Password</label> <input type="password" name="password" ><br><br>
			<input type="submit" name="submit" ><br><br>
			</form>
			</center>
			
			
			
			
					</div>
				</div>
			</div>
		</div>
		<br><br><br><br><br><br><br><br>
		<div id="footer">
			<div>
				
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