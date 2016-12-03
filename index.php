<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<meta name="keywords" content="online car market, online car bazaar, rent a car of bangladesh, car bazaar, car hut, car market, bd car bazaar, auto bazaar, call bazaar, cellbazer, cellbazaar, cellbazar, google rent a car service in bangladesh, rent a car of dhaka, used car of bangladesh, used car for sale, brand new car, recondition car, car for sale, latest model car, motor bike sales information, car fair, carmela, house, center, garimela, car decoration, auto parts, filling station, cara/c, parts, lubricant, rent-a-car, cng, cng conversion, workshop, car loan, car driving, school, car sale, car buy, car glass, japanese car, toyota, japanese used cars, japanese vehicles, honda, toyota japan, nissan, mitsubishi, mazda, isuzu, suzuki, subaru, mitsubishi, pajero, landcruiser, landcruiser, prado, premio, corona, voxy, noah, mercedes-benz, bmw, camry, corolla, avalon, rav4, car bazar, car hut, kanakata, car solution, new car, new model car, latest model car, second hand car, automobile, auto trader, car insurance, car driving school, looking glass, car tyres, car tyres, tubes, car wheels, car batteries, car parts wholesale, car polish, car wash, car equipment, motor cycle, motor cycle helmets, bus, covered van, cng stations, natural gas fueling station" />

<meta name="description" content="garimela dot com is the most popular online car bazaar in Bangladesh. All kinds of car buy, sales, rent, and motor parts information are available here." />

<title>Welcome to garimela dot com, the most popular online car bazaar in Bangladesh.</title>
<!--<script type="text/javascript" src="nivo-banner-slider/demo/scripts/jquery-1.4.3.min.js"></script>-->
<script src="js/jquery-1.6.min.js" type="text/javascript"></script>
<script type="text/javascript" src="PhotoGallery/s3Slider.js"></script>
<link href="style/style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="Image/Logoshortcut.png" type="image/x-icon" />
<meta name="google-site-verification" content="XlN61nhKvnNfTUFX833QpC36pccPH8vVB0sO1uAnd8I" />
<script type="text/javascript" src="js/main.js"></script>

<script type="text/javascript">
function getdistict(distict) {
var distict = $("#org_divition").val();

$("#divdistict3").load("Free_Registration_get_distict.php?distict="+distict);
}
function getdistict3(distict3) {
var distict3 = $("#org_divition3").val();

$("#divdistict3").load("Free_Registration_get_distict.php?distict="+distict3);
}

function getps(ps) {
var ps = $("#org_district").val();

$("#divps").load("Free_Registration_get_ps.php?ps="+ps);
}
function getdistictbys(dividfs) {
var dividfs = $("#org_divition2").val();

$("#divdistict").load("Free_Registration_get_distict_bs.php?divids="+dividfs);
}
</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-22981978-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

<script language="javascript" type="text/javascript" >
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
</head>

<body>
<?php
include 'header.php'
?>

<div class="mainback">
<?php
include 'banner.php'
?>

<?php
$action=$_GET['action'];
//echo $action;
if($action == 'home')
{
include 'frontpage.php';
}
else if($action == 'latestmodelcar')
{
include 'latestmodelcar.php';
}
else if($action == 'contactus')
{
include 'contactus.php';
}
else if($action == 'carshowroom')
{
include 'carshowroom.php';
}
else if($action == 'motorbikeshowroom')
{
include 'motorbikeshowroom.php';
}
else if($action == 'rentacar')
{
include 'rentacar.php';
}
else if($action == 'motorparts')
{
include 'motorparts.php';
}
else if($action == 'carservicecenter')
{
include 'carservicecenter.php';
}
else if($action == 'cngconversion')
{
include 'cngconversion.php';
}
else if($action == 'tyreandbattery')
{
include 'tyreandbattery.php';
}
else if($action == 'cardecoration')
{
include 'cardecoration.php';
}
else if($action == 'oilandlubricant')
{
include 'oilandlubricant.php';
}
else if($action == 'carwash')
{
include 'carwash.php';
}
else if($action == 'carpaints')
{
include 'carpaints.php';
}
else if($action == 'carac')
{
include 'carac.php';
}
else if($action == 'carglass')
{
include 'carglass.php';
}
else if($action == 'cardrivingschool')
{
include 'cardrivingschool.php';
}
else if($action == 'autoelectronic')
{
include 'autoelectronic.php';
}
else if($action == 'autoengineering')
{
include 'autoengineering.php';
}
else if($action == 'licensedhaka')
{
include 'licensedhaka.php';
}
else if($action == 'fancyphotogallerymain')
{
include 'fancyphotogallerymain.php';
}
else if($action == 'policemoblie')
{
include 'policemoblie.php';
}
else if($action == 'dhakafireservice')
{
include 'dhakafireservice.php';
}

else if($action == 'chittagongfireservice')
{
include 'chittagongfireservice.php';
}

else if($action == 'rajshahifireservice')
{
include 'rajshahifireservice.php';
}

else if($action == 'khulnafireservice')
{
include 'khulnafireservice.php';
}

else if($action == 'sylhetfireservice')
{
include 'sylhetfireservice.php';
}

else if($action == 'barisalfireservice')
{
include 'barisalfireservice.php';
}

else if($action == 'rangpurfireservice')
{
include 'rangpurfireservice.php';
}

else if($action == 'photogallerymain')
{
include 'photogallerymain.php';
}
else if($action == 'rarecarcollection')
{
include 'rarecarcollection.php';
}
else if($action == 'Car_for_Sale')
{
include 'Car_for_Sale.php';
}
else if($action == 'Car_Buyer')
{
include 'Car_Buyer.php';
}
else if($action == 'Free_Registration')
{
include 'Free_Registration.php';
}
else if($action == 'Car_Related_Organization')
{
include 'Car_Related_Organization.php';
}
else if($action == 'search_Car_for_Sale')
{
include 'search_Car_for_Sale.php';
}
else if($action == 'search_Car_for_buy')
{
include 'search_Car_for_buy.php';
}
else if($action == 'search_Car_Related_Organization')
{
include 'search_Car_Related_Organization.php';
}
else if($action == 'Car_Related_sall')
{
include 'Car_Related_sall.php';
}
else if($action == 'Car_Related_sdiv')
{
include 'Car_Related_sdiv.php';
}
else if($action == 'Car_Related_sdist')
{
include 'Car_Related_sdist.php';
}
else if($action == 'comingsoon')
{
include 'comingsoon.php';
}
else if($action == 'weblink')
{
include 'weblink.php';
}
else 
{
include 'frontpage.php';
}
?>

<?php
//include 'footer.php';
include 'copyright.php';
?>
</div>

<div id="DivMoucePointer" style="position:absolute; zIndex:0; color:black; fontWeight:bold; fontSize:larger; margin: 0px; borderStyle: none; left: 12px; top: 3760px;"><span style="font-size:9px;font-family:Georgia; color:orangered;"><img src="images/mouse.png" /></span></div>
</body>
</html>
 