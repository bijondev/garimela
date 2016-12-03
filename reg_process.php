<?php
session_start();
		include 'config.php';
		$org_type=$_POST['org_type'];
		$org_name=$_POST['org_name'];
		$org_disc=$_POST['org_disc'];
		$org_divition=$_POST['org_divition'];
		$org_district=$_POST['org_district'];
		$org_ps=$_POST['org_ps'];
		$address=$_POST['address'];
		$phone=$_POST['phone'];
		$fax=$_POST['fax'];
		$email=$_POST['email'];
		$cam=$_POST['captcha'];
		echo $cam."_capost";
		//echo $org_type."<br>".$org_name."<br>".$org_disc."<br>".$org_divition."<br>".$org_district."<br>".$org_ps."<br>".$address."<br>".$phone."<br>".$fax."<br>".$email;
		$ip=$_SERVER['REMOTE_ADDR'];
$datetime=date("Y-m-d H:i:s");

if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['captcha']) && $_POST['captcha'] == $_SESSION['captcha'])
	{
		mysql_query("INSERT INTO tbl_registration VALUES ('', '$org_type', '$org_name', '$org_disc', '', '$org_divition', '$org_district', '$org_ps', '$address', '$phone', '$fax', '$email', '$datetime', '$ip')") or die (mysql_error());
		
				echo $_SESSION['captcha']."_sec_cap<br>";
echo $_POST['captcha']."_post_cap<br>";
				unset($_SESSION['captcha']); /* this line makes session free, we recommend you to keep it */
	} 
else if($_SERVER['REQUEST_METHOD'] == "POST" && !isset($_POST['captcha']))
	{
		echo "<span style='font-size:12px; color:red;'>Verify that you are a human</span>";
		
				echo $_SESSION['captcha']."_sec_cap<br>";
echo $_POST['captcha']."_post_cap<br>";
	}
/* in case that form isn't submitted this file will create a random number and save it in session */
else
	{
		$rand = rand(0,4);
		$_SESSION['captcha'] = $rand;
		
				echo $_SESSION['captcha']."_sec_cap<br>";
echo $_POST['captcha']."_post_cap<br>";
		//echo $rand;
	}
		?>