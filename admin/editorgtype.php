<?php
if($_POST)
{
	$orgidp=$_POST['orgidp'];
	$orgtype=$_POST['orgtype'];
	$discription=$_POST['discription'];
	mysql_query("UPDATE tbl_org_type SET  org_type =  '$orgtype', discription =  '$discription' WHERE org_type_id ='$orgidp'") or die (mysql_error());

}
?>
<form action="?action=editorgtype" method="post">
<?php
$orgtype=$_GET['orgid'];
$resultorgt=mysql_query("select * from tbl_org_type where org_type_id='$orgtype'") or die (mysql_error());
while($rowort=mysql_fetch_array($resultorgt))
{
?>
<table width="200" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td>Car Type</td>
    <td>:</td>
    <td>
    <input type="hidden" name="orgidp" value="<?=$orgtype?>" />
    <input type="text" name="orgtype" value="<?=$rowort['org_type']?>"></td>
  </tr>
  <tr>
    <td>Discription</td>
    <td>:</td>
    <td><input type="text" name="discription" value="<?=$rowort['discription']?>"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" value="save"></td>
  </tr>
</table>
<? } ?>