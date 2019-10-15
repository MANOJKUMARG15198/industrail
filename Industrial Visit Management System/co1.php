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
						<a href="hod1.php">VIEW</a>
					</li>
					<li>
						<a href="hod2.php">APPROVAL</a>
					</li>
					
					<li>
						<a href="index.php">LOGOUT</a>
					</li>
					
					</ul>
				</div>
			</div>
				
          <div>
         
			
			
			
			
			
       
   
     
    </div>
	   
	   
	   </center>
	   <center>
			<div id="contents">
				<div class="box">
					<div>
					<td style="color:black;"><a href="pwd1.php"/>Coordinator details</a></td>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;<td style="color:black;"><a href="pwd1.php"/>change password</a></td>
			
			<center>
	  <div class="row">
      <div class="col-md-2"></div>
              <div class="col-md-9">
          
             <table class="table table-bordered">
    <thead style="text-align:center;">
      <tr style="background-color:#00FFFF;color:maroon;text-align:center;">
        <th style="text-align:center;">No</th>
          <th style="text-align:center;">Name</th>
		   <th style="text-align:center;">Roll NO</th>
		  
		    <th style="text-align:center;">Phone No</th> 
			
          <th style="text-align:center;">Company</th>
		   
	
		 
		    <th style="text-align:center;">Start Date</th> 
			<th style="text-align:center;">End Date</th>
			
			  <th style="text-align:center;">Total Cost</th>
			 
			 
			
		      </tr>
    </thead>
    <tbody>
      <tr>
	  <?php
	  $sel = "SELECT * FROM co left join cooo on co.id=cooo.id";
	  $we=mysql_query($sel);
	  while($res = mysql_fetch_object($we))
	  {
	  ?>
       <tr style="background-color:SeaGreen";> <td style="color:black;text-align:center;"><b><?php echo $res->id;?></b></td>
     
		<td style="color:black;text-align:center;"><b><?php echo $res->a;?></b></td>
		<td style="color:black;text-align:center;"><b><?php echo $res->b;?></b></td>
		
		<td style="color:black;text-align:center;"><b><?php echo $res->c;?></b></td>
		<td style="color:black;text-align:center;"><b><?php echo $res->com;?></b></td>
		
		
		<td style="color:black;text-align:center;"><b><?php echo $res->date;?></b></td>
		<td style="color:black;text-align:center;"><b><?php echo $res->end;?></b></td>
	
		<td style="color:black;text-align:center;"><b><?php echo $res->mail;?></b></td>
	
		
	
		
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
						<a href="about.php">About</a>
					</li>
					<li>
						<a href="admin.php">Admin</a>
					</li>
					<li>
						<a href="hodview.php">VIEW DETAILS </a>
					</li>
					<li>
						<a href="hodapp.php">APPRUVAL</a>
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