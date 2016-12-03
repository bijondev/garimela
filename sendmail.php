<?php

include_once('class.phpmailer.php');

$name=$_POST['name'];
$email=$_POST['email'];
$cell=$_POST['cell'];
$subject=$_POST['subject'];
$message=$_POST['message'];



$mail             = new PHPMailer(); // defaults to using php "mail()"

//$body             = $mail->getFile('contents.html');
$body             = <<<HHHHHHHHHHHHHH
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>Thank You</title>
</head>
<body>
<center>
<h3>www.garimela.com | {$name}, Cell: {$cell}</h3>
</center>
<table width="auto" border="0" cellspacing="0" cellpadding="0">
   <tr>
    <td></td>
    <td></td>
    <td>{$message}</td>
  </tr>
</table>


</body>
</html>
HHHHHHHHHHHHHH;

$body             = eregi_replace("[\]",'',$body);

$mail->From       = $email;

$mail->FromName   = $name;

$mail->Subject    = $subject;

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);

$mail->AddAddress("garimela2012@gmail.com", "khandaker Mehedi Hasan");
$mail->AddCC("kmhasanc@gmail.com", "Chandan");

//$mail->AddAttachment("images/phpmailer.gif");             // attachment

if(!$mail->Send()) {
?>
  <script>
    alert("E-mail  Not sent! Try later");
    location = "http://www.garimela.com/";
</script>

  <?php
} else {

{?>

<script>
    alert("Your e-mail has been sent successfully! Tnanks for visit www.garimela.com");
    location = "http://www.garimela.com/";
</script>

<?php
}
  //echo "Message sent!";
}

?>
