<div class="epage">
<div class="maincont2">
<div class="featureTop" style="color:OrangeRed;text-shadow: grey 0.1em 0.1em 0.3em; text-transform:uppercase;"><h3>Car Related Organization Registration Form ::</h3></div>
<div class="featureContent">
<div style="margin:20px;">
<link href="../style/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>
        <link rel="stylesheet" href="css/template.css" type="text/css"/>
        </script>
        <script src="js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
        </script>
        <script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
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
		include 'config.php';
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
		
		//echo $org_type."<br>".$org_name."<br>".$org_disc."<br>".$org_divition."<br>".$org_district."<br>".$org_ps."<br>".$address."<br>".$phone."<br>".$fax."<br>".$email;
		$ip=$_SERVER['REMOTE_ADDR'];
$datetime=date("Y-m-d H:i:s");
if ($_POST){
		mysql_query("INSERT INTO tbl_registration VALUES ('', '$org_type', '$org_name', '$org_disc', '$phone', '$org_divition', '$org_district', '$org_ps', '$address', '$fax', '$email', '', '$datetime', '$ip')") or die (mysql_error());
		?>
        <span style="color:#F00; font-size:18px; padding-bottom:20px;">Thanks for Registration !!! Your information will publish after Admin verification.</span>
						<?php
}
								include 'config.php';
						$resultorg_type = mysql_query("SELECT * FROM tbl_org_type") or die (mysql_error());
						$result_divition = mysql_query("SELECT * FROM tbl_divition") or die (mysql_error());
						$result_district = mysql_query("SELECT * FROM tbl_distic") or die (mysql_error());
						$result_ps= mysql_query("SELECT * FROM tbl_ps") or die (mysql_error());
								?>
        <form id="formID" class="formular" method="post" action="">
            <fieldset>
                <legend style="color:OrangeRed;text-shadow: grey 0.1em 0.1em 0.3em; text-transform:uppercase;">Organization Information ::</legend>
                <label>
                    <span style="color:OrangeRed;text-shadow: grey 0.1em 0.1em 0.3em;">Business Category:</span>
                        <select name="org_type" id="org_type" class="validate[required]">
						<option value="">Select Category</option>
						<?php

						while($roworgtype = mysql_fetch_array($resultorg_type))
 						 {
						?>
                        
                        <option value="<?=$roworgtype['org_type_id']?>"><?=$roworgtype['org_type']?></option>
<? } ?>
                    </select>
                </label>
                <label>

                    <span style="color:OrangeRed;text-shadow: grey 0.1em 0.1em 0.3em;">Organization Name: </span>
                    <input value="<?=$org_name?>" class="validate[required] text-input" type="text" name="org_name" id="req" />
                </label>
                <label>
                    <span style="color:OrangeRed;text-shadow: grey 0.1em 0.1em 0.3em;">Organization Description: </span> <span style="color:#6E726F;text-shadow: grey 0.1em 0.1em 0.3em; font-family:Calibri;">(Like: All kinds of Japanese car importer and seller.)</span>
                    <textarea name="org_disc" cols="10" rows="5"></textarea>

                    </select>
                </label>
                <br/>

            </fieldset>
            <fieldset>
                <legend style="color:OrangeRed;text-shadow: grey 0.1em 0.1em 0.3em; text-transform:uppercase;">Organization Location ::</legend>
                
                <label>

					<span style="color:OrangeRed;text-shadow: grey 0.1em 0.1em 0.3em;">Division: </span>      
                        <select name="org_divition" id="org_divition" onChange="getdistict()" >
						<option value="">Select Division</option>
												<?php

						while($rowdiv= mysql_fetch_array($result_divition))
 						 {
						?>
                        <option value="<?=$rowdiv['div_id']?>"><?=$rowdiv['div_name']?></option>
						<? } ?>
   
                    </select>

 </label>
                 <label>
					<span style="color:OrangeRed;text-shadow: grey 0.1em 0.1em 0.3em;">District: </span>        
                    <div id="divdistict3">
                         <select name="org_district" id="org_district" onchange="getps()" disabled="true">
                        <option value="">Select District</option>
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
					<span style="color:OrangeRed;text-shadow: grey 0.1em 0.1em 0.3em;">Police Station: </span> 
                    <div id="divps">
                                        <select name="org_ps" id="org_ps" disabled="disabled">
										<option value="">Select Police Station</option>
												<?php

						while($rowps  = mysql_fetch_array($result_ps))
 						 {
						?>
                        <option value="<?=$rowps['ps_name']?>"><?=$rowps['ps_name']?></option>
						<? } ?>

                    </select></div>
 </label>
                 <label>
                    <span style="color:OrangeRed;text-shadow: grey 0.1em 0.1em 0.3em;">Address:</span>
                    <input value="<?=$address?>" class="validate[required] text-input" type="text" name="address" id="address" />
                </label>
                                <label>
                    <span style="color:OrangeRed;text-shadow: grey 0.1em 0.1em 0.3em;">Phone / Mobile: </span> <span style="color:#6E726F;text-shadow: grey 0.1em 0.1em 0.3em; font-family:Calibri;">(88-01711-000000, 01711-000000)</span>
                    <input value="<?=$phone?>" class="validate[required] text-input" type="text" name="phone" id="phone" />
                </label>
                                <label>
                    <span style="color:OrangeRed;text-shadow: grey 0.1em 0.1em 0.3em;">E-mail:</span>
                    <input value="<?=$email?>" type="text" name="email" id="email" />
                </label>
            </fieldset>
            
            <input class="submit" type="submit" value="Registration"/><hr/>
        </form>
</div>
</div>
<div class="featureBottom">
</div>
</div>
	
</div>
