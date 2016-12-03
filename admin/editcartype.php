<?php
if($_POST)
{
	$ctidp=$_POST['ctidp'];
	$cartype=$_POST['cartype'];
	$discription=$_POST['discription'];
	//echo $ctidp.$cartype.$discription;
	mysql_query("UPDATE tbl_car_type SET car_type =  '$cartype', discription =  '$discription' WHERE  car_type_id ='$ctidp'") or die (mysql_error());
	echo 'edit succesfully';
}
?>
<?php
include '../config.php';
	$ctid=$_GET['ctid'];
	$resultct=mysql_query("select * from tbl_car_type where car_type_id='$ctid'") or die (mysql_error());

?>
<form action="?action=editcartype" method="post">
<?php
	while($rowcty=mysql_fetch_array($resultct))
{
?>
<table width="200" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td>Car Type</td>
    <td>:</td>
    <td>
    <input type="hidden" name="ctidp" value="<?=$ctid?>" />
    <input type="text" name="cartype" value="<?=$rowcty['car_type']?>" ></td>
  </tr>
  <tr>
    <td>Discription</td>
    <td>:</td>
    <td><input type="text" name="discription" value="<?=$rowcty['discription']?>" ></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" value="save"></td>
  </tr>
</table>
<? } ?>
</form>