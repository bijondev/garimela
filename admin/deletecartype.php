<?php
$cartypeid=$_GET['ctid'];
mysql_query("Delete from tbl_car_type where car_type_id='$cartypeid'") or die (mysql-error());
include 'Car_Type.php';
?>