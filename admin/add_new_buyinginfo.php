<?php
if ($_POST) {
$pub_date=$_POST['pub_date'];
$end_date=$_POST['end_date'];
$car_type=$_POST['car_type'];
$car_model=$_POST['car_model'];
$car_discription=$_POST['car_discription'];
$budget=$_POST['budget'];
$ad_duration=$_POST['ad_duration'];
$contact_no=$_POST['contact_no'];
$contact_address=$_POST['contact_address'];

$userid=$_SESSION['userid'];
$ip=$_SERVER['REMOTE_ADDR'];
$datetime=date("Y-m-d H:i:s");
//echo $datetime;
mysql_query("INSERT INTO tbl_buyareinfo VALUES ('', '$pub_date', '$end_date', '$car_type', '$car_model', '$car_discription', '$budget', '$contact_address', '$contact_no', '$ad_duration', '','$userid', '$datetime', '$ip', '', '', '')") or die (mysql_error());

}
?>
<form action="<? $_SERVER['PHP_SELF']; ?>" method="post">
<table width="500" border="0" align="center" cellspacing="0">

  <tr>
    <td>Publication Date</td>
    <td>:</td>
    <td><input type="text" name="pub_date" ></td>
  </tr>
  <tr>
    <td>End Date</td>
    <td>:</td>
    <td><input type="text" name="end_date" ></td>
  </tr>
  <tr>
    <td>Car Type</td>
    <td>:</td>
    <td>
        <select name="car_type" id="car_type" >
    <option>Select Car Type</option>
    <?php
	$cty=mysql_query("Select * from tbl_car_type") or die (mysql_error());
	while($rowct=mysql_fetch_array($cty))
	{
	?>
    
      <option><?=$rowct['car_type']?></option>
    
<? } ?>
</select>
    </td>
  </tr>
  <tr>
    <td>Car Model</td>
    <td>:</td>
    <td><input type="text" name="car_model" ></td>
  </tr>
  <tr>
    <td>Car Description</td>
    <td>:</td>
    <td>
	<textarea name="car_discription" cols="40" rows="5"></textarea>
	</td>
  </tr>
  <tr>
    <td>Car Price</td>
    <td>:</td>
    <td><input type="text" name="budget" ></td>
  </tr>
  <tr>
    <td>Ad Duration</td>
    <td>:</td>
    <td><textarea name="ad_duration" cols="40" rows="5"></textarea></td>
  </tr>
  <tr>
    <td>Contact No</td>
    <td>:</td>
    <td><input type="text" name="contact_no" ></td>
  </tr>
  <tr>
    <td>Contact Address</td>
    <td>:</td>
    <td><textarea name="contact_address" cols="40" rows="5"></textarea></td>
  </tr>

      <tr>
    <td></td>
    <td></td>
    <td><input type="submit" value="Save"><input type="reset" value="Reset"></td>
  </tr>
</table>
</form>