<?php
include '../config.php';
$fregid=$_GET['regid'];
mysql_query("delete from tbl_registration where regristration_id='$fregid'") or die (mysql_error());
//echo "delete oky";
include 'free_registration.php';
?>