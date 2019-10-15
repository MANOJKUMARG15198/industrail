<?php
session_start();
	$servername="localhost";
$username="root";
$password="";
mysql_connect($servername,$username,$password);
mysql_select_db("industriyal");
	
	$sel ="select * from co where id='".$_GET['id']."'";
$r = mysql_query($sel);
$ress =mysql_fetch_object($r);

	
	
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
			<div id="contents">
				<div class="box">
					<div>
						
   <div class="container">
 
             
			 <center>      
		   
        <h3><b>LOG IN</b></h3><br>
	   <form action="" method="POST" enctype="multipart/form-data">
	  <tr><td><label><b>Username</b></label><td>&nbsp;<input type="text" name="username" value="<?php echo $ress->username;?>" id="username"><br><br></td>
	   <tr><td><label><b>Password</b></label><td>&nbsp;<input type="password" name="password" value="<?php echo $ress->password;?>" id="password"><br><br></td>

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
	
	<?php
	if(isset($_POST["submit"]))
	{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "industriyal";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE MyGuests SET username='$username' ,password='$password'WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
	
	
	
	