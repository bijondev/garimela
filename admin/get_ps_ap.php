<?php
session_start();
//$div_id=$_POST["div_id"];
//echo $_SESSION['div_id']."_dividS3";
$distic=$_GET['distic'];
//echo $div_id."<br>_".$distic;
?>
<form action="<? $_SERVER['PHP_SELF']; ?>" method="post">
<table width="300" border="0" align="center" cellspacing="0">
  <tr>
    <td>Name of Police Station</td>
    <td>:</td>
    <td>
    <input type="hidden" name="distic_id" value="<?=$distic?>">
    <input type="text" name="Thana"></td>
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