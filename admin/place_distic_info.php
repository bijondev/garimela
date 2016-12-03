<script type="text/javascript">
function showDistic(divitionid)
{
if (divitionid=="")
  {
  document.getElementById("div_distic").innerHTML="";
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
    document.getElementById("div_distic").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","place_distic_info_get.php?divitionid="+divitionid,true);
xmlhttp.send();
}
</script>

<form>
<select name="divition" onChange="showDistic(this.value)">
<option value="">Select a Division</option>
<?php
$tbl_divition = mysql_query("SELECT * FROM tbl_divition") or die (mysql_error());
while($row = mysql_fetch_array($tbl_divition))
{
  ?>
<option value="<?=$row['div_id']?>"><?=$row['div_name']?></option>
<? } ?>
</select>
</form>
<div id="div_distic"><b>District info will be listed here.</b></div>