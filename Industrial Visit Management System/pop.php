
		<td style="text-align:center;">LOG IN NAME</td>
         
    </thead>
    <tbody>
      <tr>
	  <?php
	  $sel = "select * from cooo left join co on  cooo.id=co.id";
	  $we=mysql_query($sel);
	  while($res = mysql_fetch_object($we))
	  {
	  ?>
      
     
		<td style="color:black;text-align:center;"><p><font color="red"><b><?php echo $res->username;?></font></p></b></td></tr>
		
		
		<?php
	}
	?>