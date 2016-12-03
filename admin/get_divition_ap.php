<?php
session_start();
include '../config.php';
$q=$_GET["q"];
$_SESSION['div_id']=$q;
echo $_SESSION['div_id']."_divid";
?>
<form>
<table width="300" align="center">
<tr><td>Select District</td>
<td>
<select name="distic" onChange="showPs(this.value)">
<option value="0">Select a District</option>
<?php
$get_distic="SELECT * FROM tbl_distic WHERE div_id = '".$q."'";
$get_distic_result = mysql_query($get_distic);
while($row = mysql_fetch_array($get_distic_result))
  {

?>
<option value="<?=$row['dist_id']?>"><?=$row['dist_name']?></option>
<?
  }
mysql_close($con);
?>
</select>
</td>
</tr>
</table>
</form>
<div id="div_ps"></div>