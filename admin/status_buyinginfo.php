<?php
$sid=$_GET['sid'];
$sellinfo = mysql_query("SELECT * FROM tbl_buyareinfo where buyare_id='$sid'") or die (mysql_error());
while($row = mysql_fetch_array($sellinfo))
  {
	  if($row['status']==1)
	  {
		 mysql_query("UPDATE  tbl_buyareinfo SET  status =  '0' WHERE  buyare_id ='$sid'") or die (mysql_error()); 
	  }
	  else
	  {
		 mysql_query("UPDATE  tbl_buyareinfo SET  status =  '1' WHERE  buyare_id ='$sid'") or die (mysql_error());  
	  }
  }
  
?>
<a href="?action=addnewbuyinginfo">Add New</a>
<table width="1000" border="1" align="center" cellspacing="0">
  <tr style="background-color:#CCC;">
    <td align="center">Serial Id</td>
    <td align="center">Car Type</td>
    <td align="center">Car Model</td>
    <td align="center">Car Discription</td>
    <td align="center">Budget</td>
    <td align="center">Contact No</td>
    <td align="center">Contact Address</td>
    <td align="center">Publication Date</td>
    <td align="center">End Date</td>
    <td align="center">Status</td>
    <td align="center">Edit</td>
    <td align="center">Delete</td>
  </tr>
<?php
$buyareinfo = mysql_query("SELECT * FROM tbl_buyareinfo") or die (mysql_error());
while($row = mysql_fetch_array($buyareinfo))
  {
?>
  <tr>
    <td align="center"><?=$row['buyare_id']?></td>
    <td><?=$row['car_type']?></td>
    <td><?=$row['car_model']?></td>
    <td><?=$row['car_discription']?></td>
    <td><?=$row['budget']?></td>
    <td><?=$row['contact_no']?></td>
    <td><?=$row['contact_address']?></td>
    <td><?=$row['pub_date']?></td>
    <td><?=$row['end_date']?></td>
    <td align="center"><a href="?action=statusbuyinginfo&sid=<?=$row['buyare_id']?>"><?=$row['status']?></a></td>
    <td align="center"><a href="?action=editbuyinginfo&sid=<?=$row['buyare_id']?>">Edit</a></td>
    <td align="center"><a href="?action=deletebuyinginfo&sid=<?=$row['buyare_id']?>">Delete</a></td>
  </tr>
<?php
  }
?>
</table>
