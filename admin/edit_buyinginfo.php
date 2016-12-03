<?php
$sid=$_GET['sid'];
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
mysql_query("UPDATE   tbl_buyareinfo SET  pub_date =  '$pub_date', end_date =  '$end_date', car_type =  '$car_type', car_model =  '$car_model', car_discription =  '$car_discription', budget =  '$budget', ad_duration =  '$ad_duration', contact_no =  '$contact_no', contact_address =  '$contact_address', update_by =  '$userid', update_date_time =  '$datetime', update_ip =  '$ip' WHERE  buyare_id ='$sid'") or die (mysql_error());
}
$buyare = mysql_query("SELECT * FROM tbl_buyareinfo where buyare_id='$sid'") or die (mysql_error());
while($row = mysql_fetch_array($buyare))
  {
?>
<form action="<? $_SERVER['PHP_SELF']; ?>" method="post">
<table width="500" border="0" align="center" cellspacing="0">
  <tr>
    <td>Serial Id</td>
    <td>:</td>
    <td><?=$row['buyare_id']?></td>
  </tr>
  <tr>
    <td>Publication Date</td>
    <td>:</td>
    <td><input type="text" name="pub_date" value="<?=$row['pub_date']?>"></td>
  </tr>
  <tr>
    <td>End Date</td>
    <td>:</td>
    <td><input type="text" name="end_date" value="<?=$row['end_date']?>"></td>
  </tr>
  <tr>
    <td>Car Type</td>
    <td>:</td>
    <td>
        <select name="car_type" id="car_type" >
    <option><?=$row['car_type']?></option>
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
    <td><input type="text" name="car_model" value="<?=$row['car_model']?>"></td>
  </tr>
  <tr>
    <td>Car Discription</td>
    <td>:</td>
    <td>
	<textarea name="car_discription" cols="40" rows="5"><?=$row['car_discription']?></textarea>
	</td>
  </tr>
  <tr>
    <td>Budget</td>
    <td>:</td>
    <td><input type="text" name="budget" value="<?=$row['budget']?>"></td>
  </tr>
  <tr>
    <td>Ad Duration</td>
    <td>:</td>
    <td><textarea name="ad_duration" cols="40" rows="5"><?=$row['ad_duration']?></textarea></td>
  </tr>
  <tr>
    <td>Contact No</td>
    <td>:</td>
    <td><input type="text" name="contact_no" value="<?=$row['contact_no']?>"></td>
  </tr>
  <tr>
    <td>Contact Address</td>
    <td>:</td>
    <td><textarea name="contact_address" cols="40" rows="5"><?=$row['contact_address']?></textarea></td>
  </tr>
  <tr>
    <td>Entry By</td>
    <td>:</td>
    <td><?=$row['entry_by']?></td>
  </tr>
  <tr>
    <td>Entry Date</td>
    <td>:</td>
    <td><?=$row['entry_by_date_time']?></td>
  </tr>
  <tr>
    <td>Entry ip</td>
    <td>:</td>
    <td><?=$row['entry_ip']?></td>
  </tr>
  <tr>
    <td>Update By</td>
    <td>:</td>
    <td><?=$row['update_by']?></td>
  </tr>
    <tr>
    <td>Update Date</td>
    <td>:</td>
    <td><?=$row['update_date_time']?></td>
  </tr>
    <tr>
    <td>Update ip</td>
    <td>:</td>
    <td><?=$row['update_ip']?></td>
  </tr>
      <tr>
    <td></td>
    <td></td>
    <td><input type="submit" value="Update"></td>
  </tr>
</table>
</form>
<? } ?>