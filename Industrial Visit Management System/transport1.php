<?php

$servername="localhost";
$username="root";
$password="";
mysql_connect($servername,$username,$password);
mysql_select_db("industriyal");

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
						<a href="transport1.php">VIEW</a>
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
				<td style="color:black;"><a href="co2.php"/>Coordinator details</a></td>
			<a href="pwd3.php" />Change password</a>
	  <div class="row">
      <div class="col-md-2"></div>
              <div class="col-md-9">
          
             <table class="table table-bordered">
    <thead style="text-align:center;">
      <tr style="background-color:#00FFFF;color:maroon;text-align:center;">
        <th style="text-align:center;">No</th>
          
		   <th style="text-align:center;">Transport</th>
		   <th style="text-align:center;">Type</th>
		   
		  
		    <th style="text-align:center;">contact no</th> 
			  <th style="text-align:center;">Action</th> 
			   <th style="text-align:center;">View Documants</th>
			
			 
			
		      </tr>
    </thead>
    <tbody>
      <tr>
	  <?php
	  $sel = "select * from trp";
	  $we=mysql_query($sel);
	  while($res = mysql_fetch_object($we))
	  {
	  ?>
       <tr style="background-color:SeaGreen";> <td style="color:black;text-align:center;"><b><?php echo $res->id;?></b></td>
      	<td style="color:black;text-align:center;"><b><?php echo $res->type;?></b></td>
		<td style="color:black;text-align:center;"><b><?php echo $res->type1;?></b></td>
		
		
		<td style="color:black;text-align:center;"><b><?php echo $res->staff;?></b></td>
		<td style="color:black;text-align:center;"><b><a href="apl.php"/>APPROVAL</a></b></td>
	    	<td style="color:black;text-align:center;"><b><a href ="down.php">download</a></b></td>
		
		<?php
	}
	?>
      </tr>
     
    </tbody>
  </table>
        </div>
     
    </div>
	   
	   
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
						<a href="transport1.php">VIEW DETAILS</a>
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