<?php
session_start();
include '../config.php';
//$_SESSION['userid']="none";
echo $_SESSION['userid']."_br<br>";
include 'header.php';
if ($_SESSION['userid']=="")
{
	include 'login.php';	
}
else 
{
	$action=$_GET['action'];
	if($action=='sellinginfo')
	{
		include 'sell_info.php';	
	}
	else if($action=='editselling')
	{
		include 'edit_selling.php';	
	}
	else if($action=='statusselling')
	{
		include 'sell_info_status.php';	
	}
	else if($action=='addnewselling')
	{
		include 'addnew_sell_info.php';	
	}
	else if($action=='Car_Type')
	{
		include 'Car_Type.php';	
	}
	else if($action=='Car_Organization')
	{
		include 'Car_Organization.php';	
	}
	else if($action=='editcartype')
	{
		include 'editcartype.php';	
	}
		else if($action=='editorgtype')
	{
		include 'editorgtype.php';	
	}
	else if($action=='buyinginfo')
	{
		include 'buyinginfo.php';	
	}
	else if($action=='statusbuyinginfo')
	{
		include 'status_buyinginfo.php';	
	}
	else if($action=='editbuyinginfo')
	{
		include 'edit_buyinginfo.php';	
	}
	else if($action=='addnewbuyinginfo')
	{
		include 'add_new_buyinginfo.php';	
	}
	else if($action=='place')
	{
		include 'place-headder.php';
		include 'place_divition_info.php';	
	}
	else if($action=='Divition-Info')
	{
		include 'place-headder.php';
		include 'place_divition_info.php';	
	}
	else if($action=='Divition-Info')
	{
		include 'place-headder.php';
		include 'place_add_divition_info.php';	
	}
		else if($action=='add-divition')
	{
		include 'place-headder.php';
		include 'place_add_divition_info.php';	
	}
	else if($action=='Distic-Info')
	{
		include 'place-headder.php';
		include 'place_distic_info.php';	
	}
	else if($action=='add-distic')
	{
		include 'place-headder.php';
		include 'place_add_distic_info.php';	
	}
	else if($action=='Police-Station-Info')
	{
		include 'place-headder.php';
		include 'place_Police_Station_Info.php';	
	}
		else if($action=='add-ps')
	{
		include 'place-headder.php';
		include 'place_add_PS_Info.php';	
	}
	else if($action=='free_registration')
	{
		include 'free_registration.php';
	}
	else if($action=='changestatusreg')
	{
		include 'changestatusreg.php';
	}
	else if($action=='deletereg')
	{
		include 'deletereg.php';
	}
		else if($action=='editfreereg')
	{
		include 'editfreereg.php';
	}

}
?>
