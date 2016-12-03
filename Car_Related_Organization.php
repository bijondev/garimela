<?php
include 'config.php';
$resultorg_type = mysql_query("SELECT * FROM tbl_org_type") or die (mysql_error());
$resultorg_typebd = mysql_query("SELECT * FROM tbl_org_type") or die (mysql_error());
$resultorg_typebdist = mysql_query("SELECT * FROM tbl_org_type") or die (mysql_error());
$resultorg_typebyps = mysql_query("SELECT * FROM tbl_org_type") or die (mysql_error());

$result_divition = mysql_query("SELECT * FROM tbl_divition") or die (mysql_error());
$result_divitionsbdist = mysql_query("SELECT * FROM tbl_divition") or die (mysql_error());
$result_divitionsbps = mysql_query("SELECT * FROM tbl_divition") or die (mysql_error());
?>
<div class="epage">
<div class="maincont2">
<div class="featureTop" style="color:OrangeRed;text-shadow: grey 0.1em 0.1em 0.3em;"><h3>FIND DESIRED ORGANIZATION ::</h3></div>
<div class="featureContent">
<div style="margin:20px;">

<script type="text/javascript" src="js/tabber.js"></script>
<link rel="stylesheet" href="css/tabber.css" TYPE="text/css" MEDIA="screen">


<script type="text/javascript">

/* Optional: Temporarily hide the "tabber" class so it does not "flash"
   on the page as plain HTML. After tabber runs, the class is changed
   to "tabberlive" and it will appear. */

document.write('<style type="text/css">.tabber{display:none;}<\/style>');
</script>

<div class="tabber">

     <div class="tabbertab">
	  <h2>FIND All INFORMATION</h2>
	  	  	  	  <form action="?action=Car_Related_sall" method="post">
<table width="700" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="color:OrangeRed;text-shadow: grey 0.1em 0.1em 0.3em; text-transform:uppercase; font-family:Calibri;">Find Organization ::</td>
    <td>
    <select name="org_type" id="org_type"  >
<option value="">CATEGORY</option>


<?php
while($rowotype= mysql_fetch_array($resultorg_type))
{
?>
<option value="<?=$rowotype['org_type_id']?>"><?=$rowotype['org_type']?></option>
<? } ?>
</select>
    </td>
    <td><input class="sbutton" type="submit" value="Find" /></td>
  </tr>
</table>
</form>
     </div>


     <div class="tabbertab">
	  <h2>FIND BY DIVISION</h2>
	  	  	  <form action="?action=Car_Related_sdiv" method="post">
<table width="700" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="color:OrangeRed;text-shadow: grey 0.1em 0.1em 0.3em; text-transform:uppercase; font-family:Calibri;">Find Organization ::</td>
    <td>
    <select name="org_type" id="org_type"  >
<option value="">CATEGORY</option>


<?php
while($rowotbd= mysql_fetch_array($resultorg_typebd))
{
?>
<option value="<?=$rowotbd['org_type_id']?>"><?=$rowotbd['org_type']?></option>
<? } ?>
</select>
    </td>
    <td><select name="org_divition" id="org_divition"  >
<option value="">DIVISION</option>

<?php
while($rowdiv= mysql_fetch_array($result_divition))
{
?>
<option value="<?=$rowdiv['div_id']?>"><?=$rowdiv['div_name']?></option>
<? } ?>
</select></td>
</div></td>
    
    </div></td>
    <td><input class="sbutton" type="submit" value="Find" /></td>
  </tr>
</table>
</form>
     </div>


     <div class="tabbertab">
	  <h2>FIND BY DISTRICT</h2>
	  	  <form action="?action=Car_Related_sdist" method="post">
<table width="700" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="color:OrangeRed;text-shadow: grey 0.1em 0.1em 0.3em; text-transform:uppercase; font-family:Calibri;">Find Organization ::</td>
    <td>
    <select name="org_type" id="org_type"  >
<option value="">CATEGORY</option>


<?php
while($rowotypesbdist= mysql_fetch_array($resultorg_typebdist))
{
?>
<option value="<?=$rowotypesbdist['org_type_id']?>"><?=$rowotypesbdist['org_type']?></option>
<? } ?>
</select>
    </td>
    <td><select name="org_divition" id="org_divition2" onChange="getdistictbys()" >
<option value="">DIVISION</option>

<?php
while($rowdivsbsist= mysql_fetch_array($result_divitionsbdist))
{
?>
<option value="<?=$rowdivsbsist['div_id']?>"><?=$rowdivsbsist['div_name']?></option>
<? } ?>
</select></td>
    <td><div id="divdistict"></div></td>

    <td><input class="sbutton" type="submit" value="Find" /></td>
  </tr>
</table>
</form>
     </div>
     <div class="tabbertab">
	  <h2>FIND BY POLICE STATION</h2>
	  <form action="?action=search_Car_Related_Organization" method="post">
<table width="800" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td style="color:OrangeRed;text-shadow: grey 0.1em 0.1em 0.3em; text-transform:uppercase; font-family:Calibri;">Find Organization ::</td>
    <td>
    <select name="org_type" id="org_type"  >
<option value="">CATEGORY</option>


<?php
while($rowotypesps= mysql_fetch_array($resultorg_typebyps))
{
?>
<option value="<?=$rowotypesps['org_type_id']?>"><?=$rowotypesps['org_type']?></option>
<? } ?>
</select>
    </td>
    <td><select name="org_divition3" id="org_divition3" onChange="getdistict3()" >
<option value="">DIVISION</option>

<?php
while($rowsbps= mysql_fetch_array($result_divitionsbps))
{
?>
<option value="<?=$rowsbps['div_id']?>"><?=$rowsbps['div_name']?></option>
<? } ?>
</select></td>
    <td><div id="divdistict3"></div></td>
    
    <td><div id="divps"></div></td>
    <td><input class="sbutton" type="submit" value="Find" /></td>
  </tr>
</table>
</form>
     </div>

</div>


</div>
</div>
<div class="featureBottom">
</div>
</div>
	
</div>

<div class="epage">
<div class="maincont2">
<div class="featureTop" style="color:OrangeRed;text-shadow: grey 0.1em 0.1em 0.3em;"><h3>YOUR DESIRED SEARCH INFORMATION ::</h3></div>
<div class="featureContent">
<div style="margin:20px;">


<?php
	/*
		Place code to connect to your DB here.
	*/
	include('config.php');	// include your code to connect to DB.

	$tbl_name="tbl_registration";		//your table name
	// How many adjacent pages should be shown on each side?
	$adjacents = 3;
	
	/* 
	   First get total number of rows in data table. 
	   If you have a WHERE clause in your query, make sure you mirror it here.
	*/
	$query = "SELECT COUNT(*) as num FROM $tbl_name where status='1' ORDER BY  regristration_id DESC";
	$total_pages = mysql_fetch_array(mysql_query($query));
	$total_pages = $total_pages[num];
	
	/* Setup vars for query. */
	$targetpage = "?action=Car_Related_Organization"; 	//your file name  (the name of this file)
	$limit = 15; 								//how many items to show per page
	$page = $_GET['page'];
	if($page) 
		$start = ($page - 1) * $limit; 			//first item to display on this page
	else
		$start = 0;								//if no page var is given, set start to 0
	
	/* Get data. */
	$sql = "SELECT * FROM $tbl_name where status='1' ORDER BY  regristration_id DESC LIMIT $start, $limit";
	$result = mysql_query($sql);
	
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
			while($row = mysql_fetch_array($result))
		{
?>
<div class="freeregistration">
<div align="center" style="color:OrangeRed;text-shadow: grey 0.1em 0.1em 0.3em; font-size:15px; font-weight:bold; height:auto; width:260px; margin:0 auto; margin-top:15px; text-transform:uppercase;">
<?=$row['org_name']?><br></div>

<div align="center" style="color:black; font-size:12px; height:auto; width:260px; margin:0 auto;  margin-top:3px;">
<?=$row['org_discription']?><br></div>

<div align="center" style="color:#5104B6; text-shadow: grey 0.1em 0.1em 0.3em; font-size:13px; height:auto; width:260px; margin:0 auto; margin-top:10px;">
<?=$row['address']?></div>

<div align="center" style="color:black;text-shadow: grey 0.1em 0.1em 0.3em; font-size:12px; height:auto; width:260px; margin:0 auto; margin-top:2px;"> 
<?=$row['Phone']?></div>
<div align="center" style="color:#009EE0; text-shadow: grey 0.1em 0.1em 0.3em; font-size:12px; height:auto; width:260px; margin:0 auto; margin-top:2px;"> 
<?=$row['email']?></div>

</div>
	<?
		}
	?>




</div>
</div>
<div class="featureBottom">
<?=$pagination?>
</div>
</div>
	
</div>