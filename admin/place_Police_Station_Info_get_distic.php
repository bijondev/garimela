<?php
session_start();
include '../config.php';
$divitionid=$_GET['divitionid'];
$_SESSION['divitionid']=$divitionid;
$divition_id=$_GET['divitionid'];
$tbl_distic = mysql_query("SELECT * FROM tbl_distic where div_id='$divition_id'") or die (mysql_error());
?>
<form>
<select name="divition" onChange="showPs(this.value)">
<option value="0">Select a District</option>
<?php

while($row = mysql_fetch_array($tbl_distic))
{
  ?>
<option value="<?=$row['dist_id']?>"><?=$row['dist_name']?></option>
<? } ?>
</select>
</form>
<div id="div_ps"></div>