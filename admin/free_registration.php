<title>Untitled Document</title><table width="100%" border="1" cellspacing="1" cellpadding="0" align="center">
  <tr>
    <td>Id</td>
    <td>Type</td>
    <td>Name</td>
    <td>Discription</td>
    <td>Division</td>
    <td>Distict</td>
    <td>Thana</td>
    <td>Address</td>
    <td>Phone</td>
    <td>Email</td>
    <td>Status</td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>
<?php
$resultorg=mysql_query("select * from tbl_registration") or die (mysql_error());
while($roworg=mysql_fetch_array($resultorg))
{
?>

  <tr>
    <td><?=$roworg['regristration_id']?></td>
    <td>
	<?php
	$orgtype=$roworg['org_type'];
$resultot=mysql_query("SELECT * FROM  tbl_org_type where org_type_id='$orgtype'") or die (mysql_error());
  while($rowot=mysql_fetch_array($resultot))
  {
  echo $rowot['org_type'];
  }
?>
	</td>
    <td><?=$roworg['org_name']?></td>
    <td><?=$roworg['org_discription']?></td>
    <td>
		<?php
	$divitionid=$roworg['divition'];
$resultdiv=mysql_query("SELECT * FROM  tbl_divition where div_id='$divitionid'") or die (mysql_error());
  while($rowdiv=mysql_fetch_array($resultdiv))
  {
  echo $rowdiv['div_name'];
  }
?>
	</td>
    <td>
			<?php
	$dstictid=$roworg['dstict'];
$resultdist=mysql_query("SELECT * FROM  tbl_distic where dist_id='$dstictid'") or die (mysql_error());
  while($rowdist=mysql_fetch_array($resultdist))
  {
  echo $rowdist['dist_name'];
  }
?>
	</td>
    <td>
				<?php
	$psid=$roworg['ps'];
$resultps=mysql_query("SELECT * FROM  tbl_ps where ps_id='$psid'") or die (mysql_error());
  while($rowps=mysql_fetch_array($resultps))
  {
  echo $rowps['ps_name'];
  }
?>
	</td>
    <td><?=$roworg['address']?></td>
    <td><?=$roworg['Phone']?></td>
    <td><?=$roworg['email']?></td>
    <td><a href="?action=changestatusreg&regid=<?=$roworg['regristration_id']?>"><?=$roworg['status']?></a></td>
    <td><a href="?action=editfreereg&regid=<?=$roworg['regristration_id']?>">Edit</a></td>
    <td><a href="?action=deletereg&regid=<?=$roworg['regristration_id']?>">Delete</a></td>
  </tr>


<? } ?>
</table>