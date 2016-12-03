<?php
include 'config.php';
$resultsell = mysql_query("SELECT * FROM tbl_sellinginfo ORDER BY RAND() LIMIT 1");

while($row_sell = mysql_fetch_array($resultsell))
  {
	  ?>
      <center>
      <span style="margin:0 auto; font-size:17px; color:#00B9EE; text-shadow: grey 0.1em 0.1em 0.3em;"><?=$row_sell['car_model']?></span><br />
      <span style="margin:0 auto; ">Price: <?=$row_sell['car_price']?></span><br />
      <span style="margin:0 auto; color:#5E07B6; text-shadow: grey 0.1em 0.1em 0.3em;">Call: <?=$row_sell['contact_no']?></span>
      </center>
      <?php
  //echo $row_sell['FirstName'] . " " . $row['LastName'];

  }
?>