<div class="epage">
<div class="maincont2">
<div class="featureTop" style="color:OrangeRed;text-shadow: grey 0.1em 0.1em 0.3em;"><h3>Free Registration</h3></div>
<div class="featureContent">
<div style="margin:20px;">
<link rel="stylesheet" href="../css/validationEngine.jquery.css" type="text/css"/>
        <link rel="stylesheet" href="../css/template.css" type="text/css"/>
        </script>
        <script src="../js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
        </script>
        <script src="../js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
        </script>
		<script src="../js/jquery-1.6.min.js" type="text/javascript"></script>
		<script>
function getdistict(distict) {
var distict = $("#org_divition").val();

$("#divdistict").load("Free_Registration_get_distict.php?distict="+distict);
}
function getps(ps) {
var ps = $("#org_district").val();

$("#divps").load("Free_Registration_get_ps.php?ps="+ps);
}
</script>
 <script>

            jQuery(document).ready(function(){
                // binds form submission and fields to the validation engine
                jQuery("#formID").validationEngine();
            });

            function checkHELLO(field, rules, i, options){
                if (field.val() != "HELLO") {
                    // this allows to use i18 for the error msgs
                    return options.allrules.validate2fields.alertText;
                }
            }

</script>
        <?php

		$ip=$_SERVER['REMOTE_ADDR'];
$datetime=date("Y-m-d H:i:s");
if ($_POST){
include '../config.php';
		$val=$_POST['org_divition'];
		$org_type=$_POST['org_type'];
		$org_name=$_POST['org_name'];
		$org_disc=$_POST['org_disc'];
		$org_divition=$_POST['org_divition'];
		$org_district=$_POST['org_district'];
		$org_ps=$_POST['org_ps'];
		$address=$_POST['address'];
		$phone=$_POST['phone'];
		$fax=$_POST['fax'];
		$email=$_POST['email'];
		$editorgaidq=$_POST['Organization_Id'];

mysql_query("UPDATE  tbl_registration SET  org_type =  '$org_type', org_name =  '$org_name', org_discription =  '$org_disc', Phone =  '$phone', divition =  '$org_divition', dstict =  '$org_district', ps =  '$org_ps', address =  '$address', email =  '$email' WHERE  regristration_id ='$editorgaidq'") or die (mysql_error());
?>
<span style="color:#F00; font-size:18px;">Update uccesfully</span>
<?php
}
include '../config.php';
$resultorg_type = mysql_query("SELECT * FROM tbl_org_type") or die (mysql_error());
$result_divition = mysql_query("SELECT * FROM tbl_divition") or die (mysql_error());
$result_district = mysql_query("SELECT * FROM tbl_distic") or die (mysql_error());
$result_ps= mysql_query("SELECT * FROM tbl_ps") or die (mysql_error());
?>
<?php
include '../config.php';
$editorgaid=$_GET['regid'];
$resulteditorg=mysql_query("select * from tbl_registration where regristration_id='$editorgaid'") or die (mysql_error());								
while($roeeditorga=mysql_fetch_array($resulteditorg))
{
?>
        <form id="formID" class="formular" method="post" action="?action=editfreereg">
            <fieldset>
                <legend>Organition Information</legend>
				                <label>
                    <span>Organization Id</span>: <?=$roeeditorga['regristration_id']?>
					<input type="hidden" value="<?=$roeeditorga['regristration_id']?>" name="Organization_Id">
<br>
                </label>
                <label>
                    <span>Organization Type:</span>
 <select name="org_type" id="org_type" class="validate[required]">
<option value="<?=$roeeditorga['org_type']?>">
<?php
$orgtype=$roeeditorga['org_type'];
$resultorg_typeedit = mysql_query("SELECT * FROM tbl_org_type where org_type_id='$orgtype'") or die (mysql_error());
while($roworgtypeed = mysql_fetch_array($resultorg_typeedit))
 						 {
						 echo $roworgtypeed['org_type'];
						 }
						 ?>
						</option>
						<?php

						while($roworgtype = mysql_fetch_array($resultorg_type))
 						 {
						?>
                        
                        <option value="<?=$roworgtype['org_type_id']?>"><?=$roworgtype['org_type']?></option>
<? } ?>
                    </select>
                </label>
                <label>

                    <span>Organization Name: </span>
                    <input value="<?=$roeeditorga['org_name']?>" class="validate[required] text-input" type="text" name="org_name" id="req" />
                </label>
                <label>
                    <span>Organization Description:</span>(Description like: all kinds of Japanese car importer and seller.  )
                    <textarea name="org_disc" cols="10" rows="5"><?=$roeeditorga['org_discription']?></textarea>

                    </select>
                </label>
                <br/>

            </fieldset>
            <fieldset>
                <legend>Organization Location</legend>
                
                <label>

					Division:       
                        <select name="org_divition" id="org_divition" onChange="getdistict()" >
						<option value="<?=$roeeditorga['divition']?>">
						<?php
$divitionedt=$roeeditorga['divition'];
$result_divedit = mysql_query("SELECT * FROM tbl_divition where div_id='$divitionedt'") or die (mysql_error());
while($rowdived = mysql_fetch_array($result_divedit))
 						 {
						 echo $rowdived['div_name'];
						 }
						 ?>
						</option>
												<?php

						while($rowdiv= mysql_fetch_array($result_divition))
 						 {
						?>
                        <option value="<?=$rowdiv['div_id']?>"><?=$rowdiv['div_name']?></option>
						<? } ?>
   
                    </select>

 </label>
                 <label>
					District:        
                    <div id="divdistict">
                         <select name="org_district" id="org_district" onchange="getps()">
                        <option value="<?=$roeeditorga['dstict']?>">
<?php
$dstictedt=$roeeditorga['dstict'];
$result_distedit = mysql_query("SELECT * FROM tbl_distic where dist_id='$dstictedt'") or die (mysql_error());
while($rowdisted = mysql_fetch_array($result_distedit))
 						 {
						 echo $rowdisted['dist_name'];
						 }
						 ?>
						</option>
						<?php

						while($rowdistrict= mysql_fetch_array($result_district))
 						 {
						?>
                        <option value="<?=$rowdistrict['dist_name']?>"><?=$rowdistrict['dist_name']?></option>
						<? } ?>
                    </select>
                    </div> 
 </label>
                 <label>
					Police Station:  
                    <div id="divps">
                                        <select name="org_ps" id="org_ps">
										<option value="<?=$roeeditorga['ps']?>">
<?php
$psedt=$roeeditorga['ps'];
$result_psedit = mysql_query("SELECT * FROM tbl_ps where ps_id='$psedt'") or die (mysql_error());
while($rowps = mysql_fetch_array($result_psedit))
 						 {
						 echo $rowps['ps_name'];
						 }
						 ?>
										</option>
												<?php

						while($rowps  = mysql_fetch_array($result_ps))
 						 {
						?>
                        <option value="<?=$rowps['ps_id']?>"><?=$rowps['ps_name']?></option>
						<? } ?>

                    </select></div>
 </label>
                 <label>
                    <span>Address:</span>
                    <input value="<?=$roeeditorga['address']?>" class="validate[required] text-input" type="text" name="address" id="address" />
                </label>
                                <label>
                    <span>Phone / Mobile: (+880-17111-00000, +880-17111-000000)</span>
                    <input value="<?=$roeeditorga['Phone']?>" class="validate[required,custom[number]]" type="text" name="phone" id="phone" />
                </label>
                                                <label>
                    <span>E-mail:</span>
                    <input value="<?=$roeeditorga['email']?>" class="validate[required,custom[email]] text-input" type="text" name="email" id="email" />
                </label>
            </fieldset>
            
            <input class="submit" type="submit" value="Update"/><hr/>
        </form>
		<? } ?>
</div>
</div>
<div class="featureBottom">
</div>
</div>
	
</div>
