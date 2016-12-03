<?php
$regid=$_GET['regid'];
$resultreg=mysql_query("select * from tbl_registration where regristration_id='$regid'") or die (mysql_error());
while($rowreg=mysql_fetch_array($resultreg))
{
if($rowreg['status']=='1')
{
	mysql_query("UPDATE  tbl_registration SET  status =  '0' WHERE regristration_id ='$regid'") or die (mysql_error());
}
else
{
	mysql_query("UPDATE  tbl_registration SET  status =  '1' WHERE regristration_id ='$regid'") or die (mysql_error());
	//echo 'oky_1';
}
}
include 'free_registration.php';
?>