<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include 'config.php';
$car_type=$_POST['car_type'];
$car_model=$_POST['car_model'];
$car_discription=$_POST['car_discription'];
$car_price=$_POST['car_price'];
$contact_address=$_POST['contact_address'];
$pub_date=$_POST['pub_date'];
$end_date=$_POST['end_date'];

if ($_POST) {

mysql_query("INSERT INTO tbl_sellinginfo VALUES ('', '$pub_date', '$end_date', '$car_type', '$car_model', '$car_discription', '$car_price', '$contact_address', '1', 'NULL')") or die(mysql_error());

//mysql_query("INSERT INTO example (name, age) VALUES('Sandy Smith', '21' ) ") or die(mysql_error()); 

}
?>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
<table width="300" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td>Car Type</td>
    <td>:</td>
    <td><input type="text" name="car_type" /></td>
  </tr>
  <tr>
    <td>Car Model</td>
    <td>:</td>
    <td><input type="text" name="car_model" /></td>
  </tr>
  <tr>
    <td>Car Discription</td>
    <td>:</td>
    <td><textarea name="car_discription" cols="20" rows="5"></textarea></td>
  </tr>
  <tr>
    <td>Car Price</td>
    <td>:</td>
    <td><input type="text" name="car_price" /></td>
  </tr>
  <tr>
    <td>Contact Address</td>
    <td>:</td>
    <td><textarea name="contact_address" cols="20" rows="5"></textarea></td>
  </tr>
  <tr>
    <td>Publish Date</td>
    <td>:</td>
    <td><input type="text" name="pub_date" /></td>
  </tr>
  <tr>
    <td>End Date</td>
    <td>:</td>
    <td><input type="text" name="end_date" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" value="save" />
    <input type="reset" value="Reset" />
    </td>
  </tr>
</table>
</form>
</body>
</html>