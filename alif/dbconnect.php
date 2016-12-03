<?php
$link = mysql_connect('banglascapecom.ipagemysql.com', 'mehedia', 'mehedi2010');
if (!$link) {
die('Could not connect: ' . mysql_error());
}
mysql_select_db("mehedia") or die ('could not select database :');
echo '';
?>