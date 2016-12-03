<?php
$q=$_GET["q"];

?>
<form action="<? $_SERVER['PHP_SELF']; ?>" method="post">
<table width="300" border="0" align="center" cellspacing="0">
  <tr>
    <td>Name of District</td>
    <td>:</td>
    <td>
    <input type="hidden" name="divition_id" value="<?=$q?>">
    <input type="text" name="Distic"></td>
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