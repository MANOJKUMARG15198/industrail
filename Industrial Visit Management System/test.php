<?php
$servername="localhost";
$username="root";
$password="";


//style"background-image: url('assets/images/photo/cocunut.jpg');background-repeat: no-repeat;"



?>
<style type="text/css">

  .login-popup{
  display:none;
  background: #333;
  padding: 10px;  
  border: 2px solid #ddd;
  float: left;
  font-size: 1.2em;
  position: fixed;
  top: 50%; left: 50%;
  z-index: 99999;
  box-shadow: 0px 0px 20px #999;
  -moz-box-shadow: 0px 0px 20px #999; /* Firefox */
    -webkit-box-shadow: 0px 0px 20px #999; /* Safari, Chrome */
  border-radius:3px 3px 3px 3px;
    -moz-border-radius: 3px; /* Firefox */
    -webkit-border-radius: 3px; /* Safari, Chrome */
}
</style>



<?php  include "header4.php";?>
<div class="container" style="background-image: url('assets/images/photo/back.png');">
                        <!-- === END HEADER === -->
                        <!-- === BEGIN CONTENT === -->
                        <div class="row margin-vert-30">
                            <!-- Begin Sidebar Menu -->
                            
                            <!-- End Sidebar Menu -->
                            <div class="col-md-12">
                             <h1><center>Kart Details</center></h1><br>
  <?php  include "db.php";
  $c_id = $_SESSION['userid'];
   ?> 

<style type="text/css">
              th,table,td
              {
              border: 0px solid black;
              
              }
              th
              {
                font-weight: bold;
                
                text-align: center;
              }

                  
            </style> 
                                <!-- AnimateOnScroll Examples -->
                       <table width="100%"  >
                <!--           <tr height="80" align="center">
                               <th>Image</th>
                              
                               <th>Name</th>
                               <th>Price</th>
                               <th>Amount</th>
                               <th>Remove</th>
                                                         

                            </tr>-->

<?php
include("db.php");
  $sqlup="Select * from kart left join product2 on kart.p_id=product2.P_id
   WHERE kart.c_id='$c_id'";
  $we=mysql_query($sqlup);

  $tot1 = "";
while($res=mysql_fetch_object($we))
{
  $tot1 += $res->amt;
?>
 <tr >
    <td height="40" align="center">
    <img src="<?php echo $res->image; ?>" height="50" width="100"> </td>
   
    <td align="center"><?php echo $res->p_name; ?></td>
    <td align="center"><?php echo $res->qty; ?></td>
    <td align="center"><?php echo $res->amt; ?></td>
    
    <td align="center">
   
       <a href='remove.php?id=<?php echo $res->k_id?>'>
        <img src='assets/images/photo/remove.png' height='50' width='100'></a>
    

    </td>
    <tr>
      <td>&nbsp;</td>
    </tr>

    
    
    

  </tr>
  <?php 

 } ?>

<tr>
  <td>&nbsp;</td>
</tr>
 <form method="post" action="">
<tr>
  <td colspan="3" align="right"><b>Total Amount</b></td>
  <td align="center"><b><?php echo $tot1;?></b></td>
  <input type="hidden" name="final_amt" value="<?php echo $tot1;?>">
</tr>
<tr>
  <td>&nbsp;</td>
</tr>

<tr>
  <td colspan="3" align="right">
 
    <button type="submit" class="btn btn-success" name="submit" class=".login-popup">Check Out</button>
</form>
  </td>
  
  <td align="center">
 <a href="user_welcome.php">   <button type="button" class="btn btn-success">Back</button>
 </a>
  </td>
</tr>

                       </table>        
                                

                                
                                
                                <!-- End AnimateOnScroll Examples -->
                            </div>
                        </div>
                        <!-- === END CONTENT === -->
                        <!-- === BEGIN FOOTER === -->
                    </div>
                     <?php include "footer.php" ; ?>




<?php
include ('db.php');
if(isset($_REQUEST['submit']))
{

$final_amt2 = $_REQUEST['final_amt'];

$date = date('Y-m-d');
$c_id = $_SESSION['userid'];

$ss = "SELECT max(bill_no) as bill1 FROM bill";
$sss=mysql_query($ss);
$rr = mysql_fetch_array($sss);

$last = $rr['bill1'];
$last1 = $last+1;
$cname = $_SESSION['name'];


$sqlup="Select * from kart left join product2 on kart.p_id=product2.P_id
   WHERE kart.c_id='$c_id'";
  $we=mysql_query($sqlup);

  //$tot1 = "";
while($res=mysql_fetch_object($we))

{

$pr_id = $res->p_id;
$pr_qty = $res->qty;
$pr_amt = $res->amt;
$ins="INSERT INTO `bill`
                    (`bill_no`,
                    `bill_name`,
                    `cusid`,
                    `pro_id`,
                    `Pro_qty`,
                    `amount1`,
                    `total`,
                    `date`)
            VALUES('".$last1."',
                   '".$cname."',
                   '".$c_id."',
                   '".$pr_id."',
                   '".$pr_qty."',
                   '".$pr_amt."',
                   '".$final_amt2."',
                   '".$date."')";

$sql=mysql_query($ins);
}


$sqlup1="delete from kart where c_id='$c_id'";
  $we1=mysql_query($sqlup1);


//echo "<script type='text/javascript'>alert('');</script>";
//echo "<meta http-equiv='refresh' content='0;url=type.php?b=$last1'>";
echo "<meta http-equiv='refresh' content='0;url=option.php?b=$last1'>";
}
?>