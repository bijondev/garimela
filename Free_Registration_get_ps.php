<?php
session_start();
include 'config.php';
$ps=$_GET['ps'];
$distict=$_SESSION['distict'];
//echo "distict id".$distict;
$rps = mysql_query("SELECT * FROM tbl_ps WHERE div_id = '$distict' and dist_id='$ps'")or die (mysql_error());
?>
        <select id="org_ps" name="org_ps" >
        <option style="font-family:Calibri;">POLICE STATION</option>
<?php
  while($rowps = mysql_fetch_array($rps)) {
		   ?>
            <option value="<?=$rowps['ps_id']?>"><?=$rowps['ps_name']?></option>
<?
          }
?>
</select>
