<?php
//session_start();
include '../config.php';
$emailid=$_POST['emailid'];
$passwoard=$_POST['passwoard'];
$ip=$_SERVER['REMOTE_ADDR'];
$datetime=date("Y-m-d H:i:s");
$login = mysql_query("SELECT * FROM tbl_user_info where email='$emailid'") or die (mysql_error());

while($row = mysql_fetch_array($login))
  {
  $id=$row['user_id'];
  $email=$row['email'];
	if(($row['email']==$emailid) && ($row['passwoard']==$passwoard))
		{

		mysql_query("INSERT INTO tbl_user_login VALUES ('', '$id', '$email','$ip','$datetime','success')");
		$_SESSION['userid']=$email;
		//header('Location:home.php');
		}
		
	else
	{

	mysql_query("INSERT INTO tbl_user_login VALUES ('', '$id', '$emailid','$ip','$datetime','Fail')");
	$msg="login Fail, Please try Again.";
	$_SESSION['loginfail']="Login Fail";
	//header('Location:index.php');
	
	}
  }
?>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
<table width="300" border="0" cellspacing="0" align="center" style="margin-top:200px;">
  <tr>
    <td colspan="3" align="center"><font size="+2" color="#FF0000"><?=$_SESSION['loginfail']?></font></td>
    </tr>
  <tr>
    <td width="20">&nbsp;</td>
    <td width="264">Login</td>
    <td width="144"><input type="text" name="emailid"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Password</td>
    <td><input type="password" name="passwoard"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" value="Login"></td>
  </tr>
</table>
</form>