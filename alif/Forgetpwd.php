<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="web page design, development, registration and hosting, live sports," />
<title>Welcome to Alif Net Point...</title>
</head>
<script language="javascript">
		var tempX = 0;
		var tempY = 0;
		var IdelTime = 0;

		var IE = document.all?true:false;
		if (!IE) document.captureEvents(Event.MOUSEMOVE)
			document.onmousemove = getMouseXY;

		function HideVisibility()
		{
			document.getElementById("DivMoucePointer").style.visibility="hidden";
		}

		function VisibleVisibility()
		{
		}	

		function getMouseXY(e) {
			//HideVisibility();
			//IdelTime = 0;

			if (IE) { // grab the x-y pos.s if browser is IE
				tempX = event.clientX + document.body.scrollLeft+12;
				tempY = event.clientY + document.body.scrollTop+12;
			}
			else {  // grab the x-y pos.s if browser is NS
				tempX = e.pageX+12;
				tempY = e.pageY+12;
			}  
			if (tempX < 0){tempX = 0;}
			if (tempY < 0){tempY = 0;}  
			TmpTop=tempY + 'px';
			TmpLft=tempX + 'px';
			document.getElementById("DivMoucePointer").style.top=TmpTop;
			document.getElementById("DivMoucePointer").style.left=TmpLft;
			document.getElementById("DivMoucePointer").style.visibility="visible";

			return true;
		}

	</script>
<link rel="shortcut icon" href="Style/Image/Logo-mehedia.png" type="image/x-icon" />

<body><table cellpadding="0" cellspacing="0" bordercolor="#FF6820"  border="0" align="center" class="Table">
  <tr>
    <td colspan="3" style="background-color:#FFF;" class="Topcarve"><?php include("Top.php"); ?> </td>
  </tr>
 <tr>
    <td colspan="3"style="background-color:#FFF;" ><div class="Logo"> <object width="185" height="185">
<param name="movie" value="somefilename.swf">
<embed src="Style/Image/MehediaFlash.swf" align="absMiddle" width="185" height="185">
</embed>
</object></div><div class="Banner" align="center"><!-- include jQuery library -->
<script type="text/javascript" src="js/jquery.min.js"></script>

<!-- include Cycle plugin -->
<script type="text/javascript" src="js/jquery.cycle.all.2.74.js"></script>

<!--  initialize the slideshow when the DOM is ready -->
<script type="text/javascript">
$(document).ready(function() {
    $('.slideshow').cycle({
		fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
	});
});
</script>
</head>

	<div class="slideshow">
		<img src="Style/Banner/Banner-mehedia02.png" width="740" height="240" />
		<img src="Style/Banner/Banner-mehedia03.png" width="740" height="240" />
        <img src="Style/Banner/Banner-mehedia04.png" width="740" height="240" />
        <img src="Style/Banner/Banner-mehedia05.png" width="740" height="240" />
        <img src="Style/Banner/Banner-mehedia06.png" width="740" height="240" />
	    <img src="Style/Banner/Banner-mehedia07.png" width="740" height="240" />
	    <img src="Style/Banner/Banner-mehedia08.png" width="740" height="240" />
		<img src="Style/Banner/Banner-mehedia09.png" width="740" height="240" />
		
	</div> </td>
  </tr>
  <tr>
    <td valign="top" style="background-color:#FFF;"  style="border-right-style:solid; border-right:0px; border-right-color:#999; border-style:solid; border-left:0px; border-top:0px; border-bottom:0px;"><?php include("VisionLeft.php"); ?></td>
    <td align="center" valign="top"><?php include("ForgetpwdContent.php"); ?></td>
    <td valign="top" style="background-color:#FFF; ><?php include("VisionRight.php"); ?></td>
  <tr>
    <td align="center" background="Style/Image/Sideback1.png"><img src="Style/ADD 180x50/FEDEX_logo.gif" /></td>
    <td valign="absMiddle" bgcolor="#FFFFFF">&nbsp;<table align="center" cellspacing="0" cellpadding="0" width="565"  border="1">
  <tr>
    
    <td align="center"><img src="Style/ADD 200x50/Prothom Alo_logo.jpg" width="180" height="50"/></td>
    
	<td align="center"><img src="Style/ADD 200x50/RongerMela.png" width="180" height="50"/></td>
	
	<td align="center"><img src="Style/ADD 200x50/Janakantha logo.jpg" width="180" height="50"/></td>
    
  </tr>
</table>&nbsp;
</td>
    <td align="center" background="Style/Image/Sideback1.png"><img src="Style/ADD 180x50/PraiseTeaLogos-Web.png" /></td>
  </tr>
  <tr>
    <td colspan="3"><img src="Style/Image/ContentMenu.png" height="30" width="990"/></td>
  </tr>
  <tr>
    <td style="background-color:#FFF;" colspan="3"><p align="center"><a href="http://s07.flagcounter.com/more/eio">
<img src="http://s07.flagcounter.com/count/eio/bg=FFFFFF/txt=000000/border=FFFFFF/columns=8/maxflags=248/viewers=Our+Visitors/labels=1/pageviews=1/" alt="#" border="0" width="736" height="auto" /></a></p></td>
  </tr>
  <tr>
    <td colspan="3"><img src="Style/Image/ContentMenu.png" height="30" width="990"/></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"; colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td style="background-color:#FFF;" colspan="3" class="Bottomcarve"><?php include("Footer.php"); ?></td>
  </tr>
</table>
<div id="DivMoucePointer" style="position:absolute; zIndex:0; color:black; fontWeight:bold; fontSize:larger; margin: 0px; borderStyle: none;"><span style="font-size:10.0pt;font-family:Arial"><span class="mehedi">m</span><span class="style5">eh<span class="edia">e</span></span><span class="dia">d</span><span class="style5">ia</span></div>
</body>
</html>