<?php
$con = mysql_connect("localhost","garimela","adminMehedi123");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("garimela_garimela");
?>