<?php
//define a maxim size for the uploaded images in Kb
define ("MAX_SIZE","1000"); 
include '../config.php';
$pub_date=$_POST['pub_date'];
$end_date=$_POST['end_date'];
$car_type=$_POST['car_type'];
$car_model=$_POST['car_model'];
$car_image=$_POST['image'];
$car_discription=$_POST['car_discription'];
$car_price=$_POST['car_price'];
$ad_duration=$_POST['ad_duration'];
$contact_no=$_POST['contact_no'];
$contact_address=$_POST['contact_address'];

//$userid=$_SESSION['userid'];
$ip=$_SERVER['REMOTE_ADDR'];
$datetime=date("Y-m-d H:i:s");
//This function reads the extension of the file. It is used to determine if the file is an image by checking the extension. 
function getExtension($str) {
$i = strrpos($str,".");
if (!$i) { return ""; }
$l = strlen($str) - $i;
$ext = substr($str,$i+1,$l);
return $ext;
}

//This variable is used as a flag. The value is initialized with 0 (meaning no error found) and it will be changed to 1 if an errro occures. If the error occures the file will not be uploaded.
$errors=0;
//checks if the form has been submitted
if(isset($_POST['Submit'])) 
{
//reads the name of the file the user submitted for uploading
$image=$_FILES['image']['name'];
//echo '_in submit_'.$image;
//if it is not empty
if ($image) 
{
//get the original name of the file from the clients machine
$filename = stripslashes($_FILES['image']['name']);
//get the extension of the file in a lower case format
$extension = getExtension($filename);
$extension = strtolower($extension);
//if it is not a known extension, we will suppose it is an error and will not upload the file, otherwize we will do more tests
//echo '_before check ext';
if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif"))	
{
//print error message
echo '<h1>Unknown extension!</h1>';
$errors=1;
//echo '_!check ext';
}
else
{
//get the size of the image in bytes
//$_FILES['image']['tmp_name'] is the temporary filename of the file in which the uploaded file was stored on the server
$size=filesize($_FILES['image']['tmp_name']);
//echo '_check ext';
//compare the size with the maxim size we defined and print error if bigger
if ($size > MAX_SIZE*1024)
{
echo '<h1>You have exceeded the size limit!</h1>';
$errors=1;
}

//we will give an unique name, for example the time in unix time format
$c="car";
$image_name=$c.'_'.time().'.'.$extension;
//the new name will be containing the full path where will be stored (images folder)
$newname="upload/".$image_name;
//we verify if the image has been uploaded, and print error instead
$copied=move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $image_name);


$filenameT = "upload/". $image_name;
list($width, $height) = getimagesize($filenameT);

$new_width = 75;
$new_height = 75;

// Resample
$image_p = imagecreatetruecolor($new_width, $new_height);
$image = imagecreatefromjpeg($filenameT);
echo $image_p;
$pic=imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

// Output
imagejpeg($image_p, "upload/small/".$filename, 100);
$thamPath="upload/small/".$filename;

mysql_query("INSERT INTO tbl_sellinginfo VALUES ('', '$pub_date', '$end_date', '$car_type', '$car_model', '$newname', '$thamPath', '$car_discription', '$car_price', '$ad_duration', '$contact_no', '$contact_address', '$userid', '$datetime', '$ip', '', '', '', '1')") or die (mysql_error());
//$copied = copy($_FILES['image']['tmp_name'], $newname);
if (!$copied) 
{
echo '<h1>Copy unsuccessfull!</h1>';
$errors=1;
}}}}

//If no errors registred, print the success message
if(isset($_POST['Submit']) && !$errors) 
{
echo "<h1>Car Info Saved.</h1>";
}

?>


<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
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
    <td>Car Image</td>
    <td>:</td>
    <td><input type="file" name="image"></td>
  </tr>
  <tr>
    <td>Car Discription</td>
    <td>:</td>
    <td>
	<textarea name="car_discription" cols="40" rows="5"></textarea>
	</td>
  </tr>
  <tr>
    <td>Car Price</td>
    <td>:</td>
    <td><input type="text" name="car_price" ></td>
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
    <td><input type="submit" value="Save" name="Submit"><input type="reset" value="Reset"></td>
  </tr>
</table>
</form>