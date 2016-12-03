<?php
$orgid=$_GET['orgid'];
mysql_query("Delete from tbl_org_type where org_type_id='$orgid'") or die (mysql-error());
include 'Car_Organization.php';
?>