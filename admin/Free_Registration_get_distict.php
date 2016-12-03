<?php
session_start();
include '../config.php';
$distict=$_GET['distict'];
$_SESSION['distict']=$distict;
$rs = mysql_query("SELECT * FROM tbl_distic WHERE div_id = '$distict'")or die (mysql_error());
?>
        <select id="org_district" name="org_district" onchange="getps()">
        <option>Select a Distict</option>
<?php
  while($row = mysql_fetch_array($rs)) {
		   ?>
            <option value="<?=$row['dist_id']?>"><?=$row['dist_name']?></option>
<?
          }
?>
</select>
