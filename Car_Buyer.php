<div class="epage">
<div class="maincont2">
<div class="featureTop" style="color:OrangeRed;text-shadow: grey 0.1em 0.1em 0.3em;"><h3>CAR WANTED</h3></div>
<div class="featureContent">

<div style="margin:20px;">
<?php
include 'config.php';
$resultcar_type = mysql_query("SELECT * FROM tbl_car_type") or die (mysql_error());
$result_divition = mysql_query("SELECT * FROM tbl_divition") or die (mysql_error());
?>
<form action="?action=search_Car_for_buy" method="post">
<table height="50" width="700" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="color:OrangeRed;text-shadow: grey 0.1em 0.1em 0.3em;"><b>Find Desired Buyer:</b></td>
    <td>
    <select name="car_type" id="car_type"  >
<option value="">Select Car Type</option>

<?php
while($rowctype= mysql_fetch_array($resultcar_type))
{
?>
<option value="<?=$rowctype['car_type']?>"><?=$rowctype['car_type']?></option>
<? } ?>
</select>
    </td>

    <td><input class="sbutton" type="submit" value="Find" /></td>
  </tr>
</table>
</form>
<?php
	/*
		Place code to connect to your DB here.
	*/
	include('config.php');	// include your code to connect to DB.

	$tbl_name="tbl_buyareinfo";		//your table name
	// How many adjacent pages should be shown on each side?
	$adjacents = 3;
	
	/* 
	   First get total number of rows in data table. 
	   If you have a WHERE clause in your query, make sure you mirror it here.
	*/
	$query = "SELECT COUNT(*) as num FROM $tbl_name";
	$total_pages = mysql_fetch_array(mysql_query($query));
	$total_pages = $total_pages[num];
	
	/* Setup vars for query. */
	$targetpage = "?action=Car_Buyer"; 	//your file name  (the name of this file)
	$limit = 15; 								//how many items to show per page
	$page = $_GET['page'];
	if($page) 
		$start = ($page - 1) * $limit; 			//first item to display on this page
	else
		$start = 0;								//if no page var is given, set start to 0
	
	/* Get data. */
	$sql_car_buy = "SELECT * FROM $tbl_name where status='1' ORDER BY buyare_id DESC LIMIT $start, $limit";
	$result_car_buy = mysql_query($sql_car_buy) or die (mysql_error());
	
	/* Setup page vars for display. */
	if ($page == 0) $page = 1;					//if no page var is given, default to 1.
	$prev = $page - 1;							//previous page is page - 1
	$next = $page + 1;							//next page is page + 1
	$lastpage = ceil($total_pages/$limit);		//lastpage is = total pages / items per page, rounded up.
	$lpm1 = $lastpage - 1;						//last page minus 1
	
	/* 
		Now we apply our rules and draw the pagination object. 
		We're actually saving the code to a variable in case we want to draw it more than once.
	*/
	$pagination = "";
	if($lastpage > 1)
	{	
		$pagination .= "<div class=\"pagination\">";
		//previous button
		if ($page > 1) 
			$pagination.= "<a href=\"$targetpage&page=$prev\">Previous</a>";
		else
			$pagination.= "<span class=\"disabled\">Previous</span>";	
		
		//pages	
		if ($lastpage < 7 + ($adjacents * 2))	//not enough pages to bother breaking it up
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page)
					$pagination.= "<span class=\"current\">$counter</span>";
				else
					$pagination.= "<a href=\"$targetpage&page=$counter\">$counter</a>";					
			}
		}
		elseif($lastpage > 5 + ($adjacents * 2))	//enough pages to hide some
		{
			//close to beginning; only hide later pages
			if($page < 1 + ($adjacents * 2))		
			{
				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage&page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage&page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage&page=$lastpage\">$lastpage</a>";		
			}
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage&page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage&page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage&page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage&page=$lastpage\">$lastpage</a>";		
			}
			//close to end; only hide early pages
			else
			{
				$pagination.= "<a href=\"$targetpage&page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage&page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$target&page?page=$counter\">$counter</a>";					
				}
			}
		}
		
		//next button
		if ($page < $counter - 1) 
			$pagination.= "<a href=\"$targetpage&page=$next\">Next</a>";
		else
			$pagination.= "<span class=\"disabled\">Next</span>";
		$pagination.= "</div>\n";		
	}
?>
<table width="100%" border="1" cellspacing="1" align="center" style="border-style:double; border-color:#DADBDC;">
  <tr>
    <td width="18%" align="center" class="festabe" style="background-color:#EBECED; color:OrangeRed;text-shadow: grey 0.1em 0.1em 0.3em;"><b>Car Name / Model</b></td>
    <td width="24%" align="center" class="festabe" style="background-color:#EBECED; color:OrangeRed;text-shadow: grey 0.1em 0.1em 0.3em;"><b>Car Description</b></td>
        <td width="14%" align="center" class="festabe" style="background-color:#EBECED; color:OrangeRed;text-shadow: grey 0.1em 0.1em 0.3em;"><b>Budget</b></td>
    <td width="27%" align="center" class="festabe" style="background-color:#EBECED; color:OrangeRed;text-shadow: grey 0.1em 0.1em 0.3em;"><b>Contact Address</b></td>
        <td width="17%" align="center" class="festabe" style="background-color:#EBECED; color:OrangeRed;text-shadow: grey 0.1em 0.1em 0.3em;"><b>Buyer Contact</b></td>
        
  </tr>
	<?php
		while($row_car_buy = mysql_fetch_array($result_car_buy))
		{
			if(($row_car_buy['buyare_id']%2)==0)
			{
			$t="row_odd";
			}
			else
			{
			$t="row_even";	
			}
			
	?>
		  <tr class="<?=$t?>">
    <td class="festabe" style="color:black; text-shadow: grey 0.1em 0.1em 0.3em; font-weight:bold; vertical-align:middle;"> <?=$row_car_buy['car_model']?></td>
    <td class="festabe" style="vertical-align:middle;"><?=$row_car_buy['car_discription']?></td>
    <td class="festabe" style="color:#009EE0; text-shadow: grey 0.1em 0.1em 0.3em; vertical-align:middle; vertical-align:middle;"><?=$row_car_buy['budget']?></td>
        <td class="festabe" style="color:#000000; text-shadow: grey 0.1em 0.1em 0.3em; vertical-align:middle; vertical-align:middle;"><?=$row_car_buy['contact_address']?></td>
                <td class="festabe" style="color:#5104B6; text-shadow: grey 0.1em 0.1em 0.3em; vertical-align:middle; vertical-align:middle;"><?=$row_car_buy['contact_no']?></td>

  </tr>
	<?
		}
	?>
</table>
</div>
	
	
</div>
<div class="featureBottom">
<?=$pagination?>
</div>
</div>
	
</div>