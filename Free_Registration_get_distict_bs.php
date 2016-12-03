<?php
session_start();
include 'config.php';
$divids=$_GET['divids'];

$_SESSION['divids']=$divids;
$rssbd = mysql_query("SELECT * FROM tbl_distic WHERE div_id = '$divids'")or die (mysql_error());
?>
        <select id="org_district" name="org_district">
        <option style="font-family:Calibri;">DISTRICT</option>
<?php
  while($rowsbd = mysql_fetch_array($rssbd)) {
		   ?>
            <option value="<?=$rowsbd['dist_id']?>"><?=$rowsbd['dist_name']?></option>
<?
          }
?>
</select>

