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

$query=mysql_query("SELECT * FROM `hod1` WHERE username='$username' AND password='$password' ");
if(mysql_num_rows($query)>0)
{
	
	echo"<script>alert('login success!'); location.href='hod1.php';</script>";
	
}

else
{
	echo"<script>alert('invalid login!')</script>";
}

}
?>










<html>
<head>
	<meta charset="UTF-8">
	<title>KEC</title>
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
					</ul>
				</div>
			</div>
			</body>
			
			
			
			
			
			</marquee>
			<div id="contents">
				<div class="box">
					<div>
						
           <center>        
        <h3><b>LOG IN</b></h3><br>
	   <form action="" method="POST">
	  <tr><td><label><b>Username</b></label><td>&nbsp;<input type="text" name="username"><br><br></td>
	   <tr><td><label><b>Password</b></label><td>&nbsp;<input type="password" name="password"><br><br></td>

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
				</ul>
				
			</div>
			<p>
			
			</p>
		</div>
	</div>
</body>
</html>