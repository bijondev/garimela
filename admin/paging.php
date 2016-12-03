<? 
$db_addr = 'localhost';        // address of MySQL server. 
$db_user = 'root';        // Username to access server. 
$db_pass = '';        // Password access server. 
$db_name = 'db_garimela';    // Name of database to connect to. 
$connect = @mysql_connect("localhost", "$db_user", "$db_pass"); 

if (!($connect)) // If no connect, error and exit(). 
{ 
echo("<p>Unable to connect to the database server.</p>"); 
exit(); 
} 

if (!(@mysql_select_db($db_name))) // If can't connect to database, error and exit(). 
{ 
echo("<p>Unable to locate the $db_name database.</p>"); 
exit(); 
} 

if (!($limit)){ 
$limit = 4;} // Default results per-page. 
if (!($page)){ 
$page = 0;} // Default page value. 
$numresults = mysql_query("SELECT * FROM tbl_sellinginfo WHERE car_type LIKE '%". $query ."%'"); // the query. 
$numrows = mysql_num_rows($numresults); // Number of rows returned from above query. 
if ($numrows == 0){ 
echo("No results found matching your query - $query"); // bah, modify the "Not Found" error for your needs. 
exit();} 

$pages = intval($numrows/$limit); // Number of results pages. 

// $pages now contains int of pages, unless there is a remainder from division. 

if ($numrows%$limit) { 
$pages++;} // has remainder so add one page 

$current = ($page/$limit) + 1; // Current page number. 

if (($pages < 1) || ($pages == 0)) { 
$total = 1;} // If $pages is less than one or equal to 0, total pages is 1. 

else { 
$total = $pages;} // Else total pages is $pages value. 

$first = $page + 1; // The first result. 

if (!((($page + $limit) / $limit) >= $pages) && $pages != 1) { 
$last = $page + $limit;} //If not last results page, last result equals $page plus $limit. 

else{ 
$last = $numrows;} // If last results page, last result equals total number of results. 

//escape from PHP mode. 
?> 
<html> 
<head> 
<title>Listed Vehicles</title> 
</head> 
<body> 
<center><h2>Listed Vehicles</h2></center> 
<table width="100%" border="0"> 
<tr> 
  <td width="50%" align="left"> 
Results <b><?=$first?></b> - <b><?=$last?></b> of <b><?=$numrows?></b> 
  </td> 
  <td width="50%" align="right"> 
Page <b><?=$current?></b> of <b><?=$total?></b> 
  </td> 
</tr> 
<tr> 
  <td colspan="2" align="right">&nbsp; 
 
  </td> 
</tr> 
<tr> 
  <td colspan="2" align="right"> 
Results per-page: <a href="<?=$PHP_SELF?>?query=<?=$query?>&page=<?=$page?>&limit=5">5</a> | <a href="<?=$PHP_SELF?>?query=<?=$query?>&page=<?=$page?>&limit=10">10</a> | <a href="<?=$PHP_SELF?>?query=<?=$query?>&page=<?=$page?>&limit=20">20</a> | <a href="<?=$PHP_SELF?>?query=<?=$query?>&page=<?=$page?>&limit=50">50</a> 
  </td> 
</tr> 
</table> 
<? 
//Go back into PHP mode. 

// Now we can display results. 
$results = mysql_query("SELECT * FROM tbl_sellinginfo WHERE car_type LIKE '%". $query ."%' ORDER BY car_type ASC LIMIT $page, $limit"); 
while ($data = mysql_fetch_array($results)) 
{ 
?> 
<p><?=$data["sell_id"]?> - <?=$data["car_type"]?> - <?=$data["car_model	"]?> - <?=$data["car_discription"]?> /></p> 
<? 
} 
?> 
<p align="center"> 
<? 
if ($page != 0) { // Don't show back link if current page is first page. 
$back_page = $page - $limit; 
echo("<a href=\"$PHP_SELF?query=$query&page=$back_page&limit=$limit\">back</a>    \n");} 

for ($i=1; $i <= $pages; $i++) // loop through each page and give link to it. 
{ 
$ppage = $limit*($i - 1); 
if ($ppage == $page){ 
echo("<b>$i</b> \n");} // If current page don't give link, just text. 
else{ 
echo("<a href=\"$PHP_SELF?query=$query&page=$ppage&limit=$limit\">$i</a> \n");} 
} 

if (!((($page+$limit) / $limit) >= $pages) && $pages != 1) { // If last page don't give next link. 
$next_page = $page + $limit; 
echo("    <a href=\"$PHP_SELF?query=$query&page=$next_page&limit=$limit\">next</a>\n");} 
?> 
</p> 
</body> 
</html>