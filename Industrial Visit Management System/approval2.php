<?php
if(isset($_POST["submit"]))
{
$servername="localhost";
$username="root";
$password="";
mysql_connect($servername,$username,$password);
mysql_select_db("industriyal");
$hod=$_POST["hod"];

$query=mysql_query("INSERT INTO `industriyal`.`hod` (`id`, `hod`) VALUES (NULL, '$hod');");
if($query)
{
	echo"<script>alert('PRINCIPAL APPROVAL ALLOTADE GENRATE CERTIFICATE!'); location.href='CertificateMagic_20_06_35.pdf';</script>";
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
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="principal1.php">VIEW</a>
					</li>
					<li>
						<a href="approval1.php">APPROVAL</a>
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
	  
	   <form action="" method="POST">
<h1>APPROVAL</h1>
<tr><td><label> APPROVAL</label></td>&nbsp;<select name="hod">
<option>APPROVAL</option>
<option>WAITING</option>
<option>CANCEL</option></select></tr><br><br>

	  
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
						<a href="principal1.php">VIEW</a>
					</li>
					<li>
						<a href="approval.php">VIEW DETAILS</a>
					</li>
					<li>
						<a href="approval1.php">APPROVAL </a>
					</li>
					
					
					<li>
						<a href="index.php">LOGOUT</a>
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