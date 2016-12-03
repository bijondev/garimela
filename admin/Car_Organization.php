<?php
if($_POST)
{
	$orgtype=$_POST['orgtype'];
	$discription=$_POST['discription'];
	mysql_query("insert into tbl_org_type values ('', '$orgtype', '$discription')") or die (mysql_error());
}
?>
<form action="?action=Car_Organization" method="post">
<table width="200" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td>Car Type</td>
    <td>:</td>
    <td><input type="text" name="orgtype"></td>
  </tr>
  <tr>
    <td>Discription</td>
    <td>:</td>
    <td><input type="text" name="discription"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" value="save"></td>
  </tr>
</table>
</td>
<?php
$resultct=mysql_query("SELECT * FROM  tbl_org_type") or die (mysql_error());
?>
<table width="300" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td>Id</td>
    <td>Organigation Type</td>
	<td>Discription</td>
	<td>Edit</td>
  </tr>
  <?php
  while($rowct=mysql_fetch_array($resultct))
  {
  
  ?>
  <tr>
    <td><?=$rowct['org_type_id']?></td>
    <td><?=$rowct['org_type']?></td>
	<td><?=$rowct['discription']?></td>
	<td><a href="?action=editorgtype&orgid=<?=$rowct['org_type_id']?>">Edit</a></td>
  </tr>
  <? } ?>
</table>
