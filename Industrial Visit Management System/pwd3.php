<?php
if(isset($_POST["submit"]))
{
$conn=mysql_connect('localhost','root','');
mysql_select_db("industriyal");
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];

$sql="update tran set username='$username',password='$password' where id='1'";
{
	echo"<script>alert('add success!'); location.href='hod1.php';</script>";
}
mysql_query($sql);
mysql_close($conn);

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
						<a href="index.php">LOGOUT</a>
					</li>
					
					</ul>
				</div>
			</div>

			
           <center>      
		   <a href="transport1.php"/>back</a></td>
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


	   