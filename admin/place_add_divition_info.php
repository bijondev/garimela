<?php
if ($_POST) {
$divition=$_POST['divition'];
$remarks=$_POST['remarks'];

//echo $datetime;
mysql_query("INSERT INTO tbl_divition VALUES ('', '$divition', '$remarks', '1')") or die (mysql_error());

}
?>
<form action="<? $_SERVER['PHP_SELF']; ?>" method="post">
<table width="300" border="0" align="center" cellspacing="0">
  <tr>
    <td>Name of Division</td>
    <td>:</td>
    <td><input type="text" name="divition"></td>
  </tr>
  <tr>
    <td>Remarks</td>
    <td>:</td>
    <td><input type="text" name="remarks"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" value="Save" name="post">
    <input type="reset">
    </td>
  </tr>
</table>
</form>
