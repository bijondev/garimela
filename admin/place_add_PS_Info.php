<?php
session_start();
if ($_POST) {
$divition_id=$_SESSION['div_id'];
$distic_id=$_POST['distic_id'];
$Thana=$_POST['Thana'];
$remarks=$_POST['remarks'];

//echo $datetime;
mysql_query("INSERT INTO tbl_ps VALUES ('', '$distic_id', '$divition_id', '$Thana', '$remarks', '1')") or die (mysql_error());
echo "Data Inserted2";
}
?>
<script type="text/javascript">
function showDivition(str)
{
if (str=="")
  {
  document.getElementById("div_divition").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("div_divition").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","get_divition_ap.php?q="+str,true);
xmlhttp.send();
}

function showPs(str2)
{
if (str2=="")
  {
  document.getElementById("div_divition").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("div_ps").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","get_ps_ap.php?distic="+str2,true);
xmlhttp.send();
}
</script>

<script type="text/javascript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
<?php
$q=$_GET['$q'];
echo $q."_get";
?>
<div style="margin:0 auto; height:40px; width:300px;">
<table><tr>
<td>Select Division:</td>
<td>
<form>
<select name="divition" onChange="showDivition(this.value)">
<option value="0">Select a Division</option>
<?php
$tbl_divition = mysql_query("SELECT * FROM tbl_divition") or die (mysql_error());
while($row = mysql_fetch_array($tbl_divition))
{
  ?>
<option value="<?=$row['div_id']?>"><?=$row['div_name']?></option>
<? } ?>
</select>
</form>
</td>
</tr></table>
</div>
<div id="div_divition"></div>