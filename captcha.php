<?php
session_start(); /* starts session to save generated random number */

if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['captcha']) && $_POST['captcha'] == $_SESSION['captcha'])
	{
		echo "Passed!"; /* YOUR CODE GOES HERE */
		echo $_SESSION['captcha']."_sec_cap<br>";
echo $_POST['captcha']."_post_cap<br>"; 
		unset($_SESSION['captcha']); /* this line makes session free, we recommend you to keep it */
	} 
elseif($_SERVER['REQUEST_METHOD'] == "POST" && !isset($_POST['captcha']))
	{
		echo "Failed!";
		echo $_SESSION['captcha']."_sec_cap<br>";
echo $_POST['captcha']."_post_cap<br>";
	}
/* in case that form isn't submitted this file will create a random number and save it in session */
else
	{
		$rand = rand(0,4);
		$_SESSION['captcha'] = $rand;
		echo $rand;
	}
?>



