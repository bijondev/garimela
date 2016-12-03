
<div class="bannercont">
<div class="bannermain">
<div class="header3"> <div style="margin-left:12px; margin-right:12px;"><font style="margin-top:10px; position:absolute; color:black;text-shadow: grey 0.1em 0.1em 0.3em;"></font> 
<div class="searchback">

<script type="text/javascript">
function showResult(str)
{
if (str.length==0)
  { 
  document.getElementById("livesearch").innerHTML="";
  document.getElementById("livesearch").style.border="0px";
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
    document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
    document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
xmlhttp.open("GET","livesearch.php?q="+str,true);
xmlhttp.send();
}

</script>
<script type="text/javascript">
function blank(a) { if(a.value == a.defaultValue) a.value = ""; }
function unblank(a) { if(a.value == "") a.value = a.defaultValue; }
</script>

<form action="livesearch.php" method="get">
<input class="textbox" type="text" value="search desired information" name="q" onKeyUp="showResult(this.value)"  onfocus="blank(this)" onBlur="unblank(this)">
<input class="Button" type="image" src="Image/Search_button.png">
</form>
</div></div>
</div>
<div class="bannerimg">
<?php
include 'bannerimage.php'
?>
</div>
<?php
include 'mainmenu.php'
?>
</div></div>
