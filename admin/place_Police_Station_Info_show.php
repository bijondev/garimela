<?php
session_start();
include '../config.php';
$distic_id=$_GET['distic_id'];
$divitionid=$_SESSION['divitionid'];
echo $_SESSION['divitionid']."_".$distic_id;
$distic = mysql_query("SELECT * FROM tbl_ps where dist_id='$distic_id' and div_id='$divitionid'") or die (mysql_error());
?>
<table width="500" border="1" align="center">
  <tr>
    <td align="center">Sl. Id</td>
    <td align="center">Name of Police Station</td>
    <td align="center">Remarks</td>
    <td align="center">Status</td>
    <td align="center">Edit</td>
    <td align="center">Delete</td>
  </tr>
<?php

while($row = mysql_fetch_array($distic))
  {
?>

  <tr>
    <td align="center"><?=$row['ps_id']?></td>
    <td><?=$row['ps_name']?></td>
    <td><?=$row['remarks']?></td>
    <td align="center"><?=$row['status']?></td>
    <td align="center">Edit</td>
    <td align="center">Delete</td>
  </tr>
<? } ?>
</table>