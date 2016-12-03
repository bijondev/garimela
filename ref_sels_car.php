 <script>
var auto_refresh = setInterval(
function()
{
$('#freeregistration_sels').fadeOut('slow').load('sels_reload.php').fadeIn("slow");

$('#freeregistration_buy').fadeOut('slow').load('buy_reload.php').fadeIn("slow");
}, 9000);
</script>
<div style="float:left; height:446px; width:313px; margin-top:10px; font-weight:900; line-height:2em;">
<div class="freeregistration">
<h4><u>Car For Sale</u></h4>
<a href="?action=Car_for_Sale">
<div style="padding-top:20px;"  id="freeregistration_sels">
<?php
include 'config.php';
$resultsell = mysql_query("SELECT * FROM tbl_sellinginfo where status='1' ORDER BY RAND() LIMIT 1");

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
</div>
</a>
</div>
<div class="freeregistration" >
<h4><u>Car Wanted</u></h4>
<a href="?action=Car_Buyer">
<div  style="padding-top:20px;" id="freeregistration_buy">
<?php
include 'config.php';
$resultsell = mysql_query("SELECT * FROM tbl_buyareinfo where status='1' ORDER BY RAND() LIMIT 1");

while($row_sell = mysql_fetch_array($resultsell))
  {
	  ?>
      <center><span style="margin:0 auto; font-size:17px; color:#00B9EE; text-shadow: grey 0.1em 0.1em 0.3em;"><?=$row_sell['car_model']?></span><br />
      <span style="margin:0 auto;">Budget:<?=$row_sell['budget']?></span><br />
      <span style="margin:0 auto; color:#5E07B6; text-shadow: grey 0.1em 0.1em 0.3em;">Call: <?=$row_sell['contact_no']?></span>
      </center>
      <?php
  //echo $row_sell['FirstName'] . " " . $row['LastName'];

  }
?>
</div>
</a>
</div>
</div>