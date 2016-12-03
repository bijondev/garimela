<?php
session_start();
header('Location:index.php');
session_destroy();

//echo $_SESSION['userid']."_br<br>";	
?>