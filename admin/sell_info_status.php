<?php
$sid=$_GET['sid'];
$sellinfo = mysql_query("SELECT * FROM tbl_sellinginfo where sell_id='$sid'") or die (mysql_error());
while($row = mysql_fetch_array($sellinfo))
  {
	  if($row['status']==1)
	  {
		 mysql_query("UPDATE  tbl_sellinginfo SET  status =  '0' WHERE  sell_id ='$sid'") or die (mysql_error()); 
	  }
	  else
	  {
		 mysql_query("UPDATE  tbl_sellinginfo SET  status =  '1' WHERE  sell_id ='$sid'") or die (mysql_error());  
	  }
  }
  
?>
<table width="1000" border="1" align="center" cellspacing="0">
  <tr style="background-color:#CCC;">
    <td align="center">Serial Id</td>
    <td align="center">Car Type</td>
    <td align="center">Car Model</td>
    <td align="center">Car Discription</td>
    <td align="center">Car Price</td>
    <td align="center">Contact No</td>
    <td align="center">Contact Address</td>
    <td align="center">Publication Date</td>
    <td align="center">End Date</td>
    <td align="center">Status</td>
    <td align="center">Edit</td>
    <td align="center">Delete</td>
  </tr>
<?php
$sellinfo = mysql_query("SELECT * FROM tbl_sellinginfo") or die (mysql_error());
while($row = mysql_fetch_array($sellinfo))
  {
?>
  <tr>
    <td align="center"><?=$row['sell_id']?></td>
    <td><?=$row['car_type']?></td>
    <td><?=$row['car_model']?></td>
    <td><?=$row['car_discription']?></td>
    <td><?=$row['car_price']?></td>
    <td><?=$row['contact_no']?></td>
    <td><?=$row['contact_address']?></td>
    <td><?=$row['pub_date']?></td>
    <td><?=$row['end_date']?></td>
    <td align="center"><a href="?action=statusselling&sid=<?=$row['sell_id']?>"><?=$row['status']?></a></td>
    <td align="center"><a href="?action=editselling&sid=<?=$row['sell_id']?>">Edit</a></td>
    <td align="center"><a href="?action=deleteselling&sid=<?=$row['sell_id']?>">Delete</a></td>
  </tr>
<?php
  }
?>
</table>
