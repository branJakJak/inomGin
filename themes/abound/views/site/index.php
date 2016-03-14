<?php
/* @var $this SiteController */
$this->pageTitle = Yii::app()->name;
$baseUrl = Yii::app()->theme->baseUrl;


$randomClientReferenceId = RandomClientReferenceGenerator::generateRandomRefence();


$onApplicationReadyJsScriptCode = <<<EOL
 $('.easy-modal').easyModal({  
     top: 200,  
     overlay: 0.2  
 });  
  
 $("#add_account").change(function(e){  
     //$('.easy-modal-open').click(function(e) {  
     var target = "#modal_" + $("#add_account").children(":selected").attr("id");
     target = target.split(" ");
     //var target = $(this).attr('href');  
     $(target[0]).trigger('openModal');  
     console.log(target[0]);

    var selectedValue =  $("#add_account").val();
    if(selectedValue == "Flight_delays"){
        document.getElementById("flight_delays_package").style = "display: block"
    }else{
        document.getElementById("flight_delays_package").style = "display: none";
    }

     e.preventDefault();  
 });  

 $('.easy-modal-close').click(function(e) {  
    $('.easy-modal').trigger('closeModal');  
 });
EOL;

Yii::app()->clientScript->registerScript('onApplicationReadyJsScriptCode', $onApplicationReadyJsScriptCode,
    CClientScript::POS_READY);

/*crafty clicks*/
Yii::app()->clientScript->registerScriptFile($baseUrl . '/js/crafty_postcode.class.js', CClientScript::POS_HEAD);
Yii::app()->clientScript->registerScriptFile('/REQUIREMENTS/assets/script/crafty_postcode.class.js',
    CClientScript::POS_HEAD);

$fillCodeJs = <<<EOL
     window.FillAddress = function(f){
         if (f.sameAddress.checked == true) {
             f.elements["2_add_house"].value = f.add_house.value;
             f.elements["2_search_string"].value = f.add_house.value;
             f.elements["2_add_street"].value = f.add_street.value;
             f.elements["2_add_2"].value = f.add_2.value;
             f.elements["2_add_town"].value = f.add_town.value;
             f.elements["2_add_postcode"].value = f.add_postcode.value;
         }
     }
EOL;
Yii::app()->clientScript->registerScript('fillCodeJs', $fillCodeJs, CClientScript::POS_END);


/*tonic style*/
Yii::app()->clientScript->registerCssFile($baseUrl . '/css/tonic.css');

/*spry textfield*/
Yii::app()->clientScript->registerScriptFile($baseUrl . '/Spry2/includes_minified/SpryValidationTextField.js',
    CClientScript::POS_HEAD);

/*latest jquery*/
Yii::app()->clientScript->registerScriptFile('//code.jquery.com/jquery-latest.min.js', CClientScript::POS_HEAD);

/*easy modal*/
Yii::app()->clientScript->registerScriptFile($baseUrl . '/easyModal/jquery.easyModal.js', CClientScript::POS_END);

/*jquery ui*/
Yii::app()->clientScript->registerScriptFile('//code.jquery.com/ui/1.10.0/jquery-ui.js', CClientScript::POS_HEAD);

/**/
Yii::app()->clientScript->registerScriptFile($baseUrl . '/Spry2/includes_minified/SpryValidationSelect.js',
    CClientScript::POS_HEAD);

Yii::app()->clientScript->registerScriptFile('//tinymce.cachefly.net/4.0/tinymce.min.js', CClientScript::POS_END);

Yii::app()->clientScript->registerCssFile($baseUrl . '/Spry2/widgets/textfieldvalidation/SpryValidationTextField.css');

Yii::app()->clientScript->registerCssFile('//code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css');

Yii::app()->clientScript->registerCssFile($baseUrl . '/Spry2/widgets/selectvalidation/SpryValidationSelect.css');



Yii::app()->clientScript->registerScript('forceTrigger', '
    if(jQuery("#add_account").val() == "Flight_delays"){
        jQuery("#add_account").trigger("change");
    }
', CClientScript::POS_READY);


$flashCssCode = <<<EOL
.success-flash-message{
    border: 1px solid green;
    text-indent: 17px;
    margin: 0px 34px;
    margin-bottom: 16px;
    padding: 16px;
}
.error-flash-message{
    border: 1px solid red;
    text-indent: 17px;
    margin: 0px 34px;
    margin-bottom: 16px;
    padding: 16px;
}
EOL;
Yii::app()->clientScript->registerCss('flashCssCode', $flashCssCode);

if (isset($_GET['id'])) {
    extract($_GET);
}



?>


<?php if (Yii::app()->user->isGuest): ?>
    <div class="loggedin">
        <?php echo CHtml::link('Login', array('/site/login'), array('style' => " padding: 43px;")); ?>
    </div>
<?php endif ?>
<?php if (!Yii::app()->user->isGuest): ?>
    <div class="loggedin">
        Logged in as <?php echo Yii::app()->user->name ?>  -
        <?php echo CHtml::link('Logout', array('/site/logout'), array()); ?>
    </div>
<?php endif ?>

<?php echo CHtml::image($baseUrl . '/img/logo.jpg', Yii::app()->name, array('style' => 'margin:5px 0 0 5px;')); ?>

<div class="nav">
    <div class="navleft">
        <?php echo CHtml::link('Home', array('/site/index'), array('style' => 'padding-left: 30px;')); ?>
        <?php if (Yii::app()->user->checkAccess("administrator")): ?>
            | <?php echo CHtml::link('Submitted Data', array('/submittion')); ?>
        <?php endif ?>
        <?php if (Yii::app()->user->checkAccess("client") || Yii::app()->user->checkAccess("administrator") || Yii::app()->user->checkAccess("client") || Yii::app()->user->checkAccess("facilitator") ): ?>
            | <?php echo CHtml::link('Search Lead', array('/submittion/search')); ?>
        <?php endif ?>
        <!--         <a href="#">Add Client</a> |
                <a href="#">Search</a> |
                <a href="#">Lender Database</a> |
                <a href="#">Reports</a> -->
    </div>
    <div class="navright">&nbsp;</div>
</div>



<?php echo CHtml::beginForm(array('/submitForm'), 'post', array('id' => 'details', 'name' => "details")); ?>

<?php if (isset($id)): ?>
    <?php echo CHtml::hiddenField('id', @$id); ?>
<?php endif ?>

<?php if (Yii::app()->user->hasFlash("success")): ?>
    <div class='success-flash-message'>
        <?php echo Yii::app()->user->getFlash("success") ?>
    </div>
<?php endif ?>
<?php if (Yii::app()->user->hasFlash("error")): ?>
    <div class="error-flash-message">
        <?php echo Yii::app()->user->getFlash("error") ?>
    </div>
<?php endif ?>
<!-- <form id="details" name="details" method="post" action="add_client_ref.php"> -->


<table border="0" cellspacing="2px" cellpadding="2px" class="inputtbl" style=" border-bottom:none; padding:5px;">
<tr class="tablehead">
    <td width="15%" valign="middle">
        <h3>Policy Holder 1</h3>
    </td>
    <td width="35%" valign="middle">(* Required)</td>
    <td width="15%" valign="middle">
        <h3>Policy Holder 2</h3>
    </td>
    <td width="35%" valign="middle">(Optional)</td>
</tr>
<tr>
    <td valign="middle">Closer:</td>
    <td valign="middle"><span id="sprytextfield11">
    <?php if (isset($_GET['closer'])): ?>
        <input readonly="readonly" name="closer" type="text" id="closer" value="<?php echo $closer ?>"/>
    <?php endif ?>
    <?php if (!isset($_GET['closer'])): ?>
        <input readonly="readonly" name="closer" type="text" id="closer" value="<?php echo $randomClientReferenceId.'-'.Yii::app()->user->name ?>"/>
    <?php endif ?>
    <span class="textfieldRequiredMsg">A value is required.</span></span>
    </td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">&nbsp;</td>
</tr>
<tr>
    <td valign="middle">Title:</td>
    <td valign="middle"><span id="spry_title">

    <?php echo CHtml::dropDownList('title', @$policy_holder_1_title , array(
            "Mr"=>"Mr",
            "Mrs"=>"Mrs",
            "Miss"=>"Miss",
            "Ms"=>"Ms",
            "Dr"=>"Dr",
            "Other"=>"Other"
    ), array('id'=>'title','tabindex'=>'1','prompt'=>'--Select--')); ?>
    <span class="selectInvalidMsg">Please select a valid item.</span><span
                class="selectRequiredMsg">Please select an item.</span></span>
    </td>
    <td valign="middle">Title:</td>
    <td valign="middle">

    <?php echo CHtml::dropDownList('2_title', @$policy_holder_2_title , array(
            "Mr"=>"Mr",
            "Mrs"=>"Mrs",
            "Miss"=>"Miss",
            "Ms"=>"Ms",
            "Dr"=>"Dr",
            "Other"=>"Other"
    ), array('id'=>'2_title','tabindex'=>'16','prompt'=>'--Select--','class'=>'fields')); ?>
<!--         <select name="2_title" class="fields" id="2_title" tabindex="16">
            <option value="<?php echo @$REPLACE_ME ?>">--Select--</option>
            <option value="Mr">Mr</option>
            <option value="Mrs">Mrs</option>
            <option value="Miss">Miss</option>
            <option value="Ms">Ms</option>
            <option value="Dr">Dr</option>
            <option value="Other">Other</option>
        </select> -->
    </td>
</tr>
<tr>
    <td valign="middle">Forename:</td>
    <td valign="middle"><span id="spry_forename">
    <input name="forename" type="text" id="forename" tabindex="2" value="<?php echo @$policy_holder_1_forename ?>"/>
 <span class="textfieldRequiredMsg">A value is required.</span></span>
    </td>
    <td valign="middle">Forename:</td>
    <td valign="middle">
        <input type="text" name="2_forename" id="2_forename" tabindex="17" value="<?php echo @$policy_holder_2_forename ?>" />
    </td>
</tr>
<tr>
    <td valign="middle">Surname:</td>
    <td valign="middle"><span id="spry_surname">
 <input name="surname" type="text" id="surname" tabindex="3" value="<?php echo @$policy_holder_1_surname ?>"/>
 <span class="textfieldRequiredMsg">A value is required.</span></span>
    </td>
    <td valign="middle">Surname:</td>
    <td valign="middle">
        <input type="text" name="2_surname" id="2_surname" tabindex="18" value="<?php echo @$policy_holder_2_surname ?>" />
    </td>
</tr>
<tr>
    <td valign="middle">Date of Birth:</td>
    <td valign="middle"><span id="spry_dob">
    <?php if (!is_null(@$policy_holder_1_dateOfBirth)): ?>
        <?php 
            $dtContainer = date("Y-m-d", strtotime($policy_holder_1_dateOfBirth));
         ?>
        <input name="dob" type="text" id="dob" tabindex="4" value="<?php echo $dtContainer?>"/>
    <?php endif ?>
    <?php if (is_null(@$policy_holder_1_dateOfBirth)): ?>
        <input name="dob" type="text" id="dob" tabindex="4" value=""/>
    <?php endif ?>
    
    <span class="textfieldRequiredMsg">A value is required.</span><span
                class="textfieldInvalidFormatMsg">Invalid format.</span></span>  (YYYY-MM-DD)
    </td>
    <td valign="middle">Date of Birth:</td>
    <td valign="middle"><span id="spry_2_dob">

    <?php if (!is_null(@$policy_holder_2_dateOfBirth)): ?>
        <?php 
            $dtContainer = date("Y-m-d", strtotime($policy_holder_2_dateOfBirth));
         ?>
        <input name="2_dob" type="text" id="2_dob" tabindex="19" value="<?php echo $dtContainer?>"/>
    <?php endif ?>
    <?php if (is_null(@$policy_holder_2_dateOfBirth)): ?>
        <input name="2_dob" type="text" id="2_dob" tabindex="19" value=""/>
    <?php endif ?>


 <span class="textfieldInvalidFormatMsg">Invalid format.</span></span>(YYYY-MM-DD)
    </td>
</tr>
<tr>
    <td valign="middle">E-mail:</td>
    <td valign="middle"><span id="spry_email">
    <input name="email" type="text" id="email" tabindex="5" value="<?php echo @$policy_holder_1_email ?>"/>
 <span class="textfieldRequiredMsg">A value is required.</span><span
                class="textfieldInvalidFormatMsg">Invalid format.</span></span>
    </td>
    <td valign="middle">E-mail:</td>
    <td valign="middle"><span id="spry_2_email">
    <input type="text" name="2_email" id="2_email" tabindex="19" value="<?php echo @$policy_holder_2_email ?>"/> 
 <span class="textfieldInvalidFormatMsg">Invalid format.</span></span>
    </td>
</tr>
<tr>
    <td valign="middle">Daytime Telephone:</td>
    <td valign="middle"><span id="sprytel_daytime">
 <input name="tel_daytime" type="text" id="tel_daytime" tabindex="6" value="<?php echo @$policy_holder_1_dayTimeTelephone ?>"/>
 <span class="textfieldInvalidFormatMsg">Invalid format.</span><span
                class="textfieldRequiredMsg">A value is required.</span></span>
    </td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">&nbsp;</td>
</tr>
<tr>
    <td valign="middle">Evening Telephone:
        <br/>
    </td>
    <td valign="middle"><span id="spry_tel_evening">
    <input type="text" name="tel_evening" id="tel_evening" tabindex="7" value="<?php echo @$policy_holder_1_eveningTelephone ?>" />
 <span class="textfieldInvalidFormatMsg">Invalid format.</span><span
                class="textfieldRequiredMsg">A value is required.</span></span>
    </td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">&nbsp;</td>
</tr>
<tr>
    <td valign="middle">Mobile Telephone:</td>
    <td valign="middle"><span id="spry_tel_mobile">
    <input name="tel_mobile" type="text" id="tel_mobile" tabindex="8" value="<?php echo @$policy_holder_1_mobileTelephone ?>"/>
 <span class="textfieldInvalidFormatMsg">Invalid format.</span><span
                class="textfieldRequiredMsg">A value is required.</span></span>
    </td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">&nbsp;</td>
</tr>
<tr>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">&nbsp;</td>
</tr>
<tr>
    <td valign="middle">House Name/Number:</td>
    <td valign="middle">
        <input name="search_string" type="text" id="search_string" tabindex="9" value="<?php echo @$policy_holder_1_houseNumber ?>"/>
    </td>
    <td valign="middle">House Name/Number:</td>
    <td valign="middle">
        <input type="text" name="2_search_string" id="2_search_string" tabindex="20" value="<?php echo @$policy_holder_2_houseNumber ?>"/>
    </td>
</tr>
<tr>
    <td valign="middle">Postcode</td>
    <td valign="middle"><span id="spry_postcode">
    <input name="add_postcode" type="text" style="width: 100px;" tabindex="10" value="<?php echo @$policy_holder_1_postCode ?>"  /> 
 <span class="textfieldRequiredMsg"></span></span>  &nbsp;&nbsp;&nbsp;
        <button type="button" onclick="cp_obj_1.doHouseSearch()" tabindex="11" class="button">Find Address</button>
    </td>
    <td valign="middle">Postcode</td>
    <td valign="middle">
        <input type="text" name="2_add_postcode" style="width: 100px;" tabindex="21" value="<?php echo @$policy_holder_2_postCode ?>" /> &nbsp;&nbsp;&nbsp;
        <button type="button" onclick="cp_obj_2.doHouseSearch()" tabindex="22" class="button">Find Address</button>
    </td>
</tr>
<tr>
    <td colspan="2" valign="middle">
        <div id="crafty_postcode_result_display_1">&nbsp;</div>
    </td>
    <td colspan="2" valign="middle">
        <div id="crafty_postcode_result_display_2">&nbsp;</div>
    </td>
</tr>
<tr>
    <td valign="middle">House Name/Number:</td>
    <td valign="middle"><span id="spry_house">
 <input name="add_house" type="text" tabindex="12" value="<?php echo @$policy_holder_1_houseNumber ?>" /> 
 <span class="textfieldRequiredMsg">A value is required.</span></span>
    </td>
    <td valign="middle">House Name/Number:</td>
    <td valign="middle">
        <input type="text" name="2_add_house" id="2_add_house" tabindex="23" value="<?php echo @$policy_holder_2_houseNumber ?>"/>
    </td>
</tr>
<tr>
    <td valign="middle">Street:</td>
    <td valign="middle">
        <input name="add_street" type="text" id="add_street" tabindex="13" value="<?php echo @$policy_holder_1_street ?>"/>
    </td>
    <td valign="middle">Street:</td>
    <td valign="middle">
        <input type="text" name="2_add_street" id="2_add_street" tabindex="24"value="<?php echo @$policy_holder_2_street ?>"/>
    </td>
</tr>
<tr>
    <td valign="middle">Address 2:</td>
    <td valign="middle">
        <input name="add_2" type="text" id="add_2" tabindex="14" value="<?php echo @$policy_holder_1_address2 ?>"/>
    </td>
    <td valign="middle">Address 2:</td>
    <td valign="middle">
        <input type="text" name="2_add_2" id="2_add_2" tabindex="25"  value="<?php echo @$policy_holder_2_address2 ?>"/>
    </td>
</tr>
<tr>
    <td valign="middle">Town:</td>
    <td valign="middle">
        <input name="add_town" type="text" id="add_town" tabindex="15" value="<?php echo @$policy_holder_1_town ?>"/>
        </p>
    </td>
    <td valign="middle">Town:</td>
    <td valign="middle">
        <input type="text" name="2_add_town" id="2_add_town" tabindex="26" value="<?php echo @$policy_holder_2_town ?>"/>
    </td>
</tr>
<tr>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td valign="top">or same as primary
        <input type="checkbox" name="sameAddress" id="sameAddress" onclick="FillAddress(this.form)" tabindex="27"/>
    </td>
</tr>
<tr>
    <td valign="middle" align="center" colspan="4">Add Account:
        <?php echo CHtml::dropDownList('add_account', @$add_account, array(
                "PBA"=>"Packaged Account",
                "PPI"=>"PPI Account",
                "Flight_delays"=>"Flight Delays",
        ), array(
            'class'=>'fields',
            'id'=>'add_account',
            'options'=>array(
                "PBA"=>array('label'=>"Packaged Account","id"=>"Packaged"),
                "PPI"=>array('label'=>"PPI Account","id"=>"PPI"),
                "Flight_delays"=>array('label'=>"Flight Delays","id"=>"flight_delays"),
            ),

        )); ?>
        <?php if (is_null(@$includeFreePPIAssesment) || empty(@$includeFreePPIAssesment)): ?>
            <input type="checkbox" name="wants_cc" id="wants_cc" value="1"/> Include Free PPI assesment
        <?php endif ?>
        <?php if (!is_null(@$includeFreePPIAssesment) && !empty(@$includeFreePPIAssesment) && @$includeFreePPIAssesment == 'Yes'): ?>
            <input checked='checked' type="checkbox" name="wants_cc" id="wants_cc" value="1"/> Include Free PPI assesment
        <?php endif ?>
        <?php if (!is_null(@$includeFreePPIAssesment) && !empty(@$includeFreePPIAssesment) && @$includeFreePPIAssesment == 'No'): ?>
            <input type="checkbox" name="wants_cc" id="wants_cc" value="1"/> Include Free PPI assesment
        <?php endif ?>
        

    </td>
</tr>
</table>



<!--flight delays package-->
<div id="flight_delays_package" class="specific" style="display: block;">
    <table border="0" cellspacing="2px" cellpadding="2px" class="inputtbl" style="padding:5px; border-top-style:hidden; border-bottom-style:hidden;">
        <tbody>
        <tr class="tablehead">
            <td colspan="4" valign="middle">
                <h3>Flight Delays</h3>
            </td>
        </tr>

        <tr>
            <td width="15%" valign="middle">&nbsp;</td>
            <td width="35%" valign="middle">&nbsp;</td>
            <td width="15%" valign="middle">&nbsp;</td>
            <td width="35%" valign="middle">&nbsp;</td>
        </tr>
        <tr>
            <td valign="middle">Over 3 Hours Delay:</td>
            <td valign="middle">
                <?php echo CHtml::dropDownList('over3_hours', @$over_3_hours_delay, array("Yes" => "Yes", "No" => "No")); ?>
            </td>
            <td valign="middle">Within last 6 Years</td>
            <td valign="middle">
                <?php echo CHtml::dropDownList('within_last_6_years', @$within_last_6_years , array("Yes" => "Yes", "No" => "No")); ?>
            </td>
        </tr>

        <tr>
            <td valign="middle">Technical/Airline Fault :</td>
            <td valign="middle">
                <?php echo CHtml::dropDownList('techinal_airline_fault', @$techinal_airline_fault  , array("Yes" => "Yes", "No" => "No")); ?>
            </td>
            <td valign="middle">Flew with Airlines Agreed</td>
            <td valign="middle">
                <?php echo CHtml::dropDownList('flew_with_airlines_agreed', @$flew_with_airlines_agreed, array(
                    "British Airways" => "British Airways",
                    "Thomson" => "Thomson",
                    "Thomas Cook" => "Thomas Cook",
                    "Air France" => "Air France",
                    "Flybe" => "Flybe",
                    "KLM" => "KLM",
                    "Monarch" => "Monarch",
                    "Virgin Atlantic" => "Virgin Atlantic",
                    "Jet2" => "Jet2",
                    "EasyJet" => "EasyJet",
                    "RyanAir" => "RyanAir"
                )); ?>
            </td>
        </tr>
        <tr>
            <td valign="middle">Reason for delay :</td>
            <td valign="middle">
                <?php echo CHtml::textArea('reason_for_delay', @$reason_for_delay,array('style'=>'margin: 0px; width: 330px; height: 86px;')); ?>
            </td>
            <td valign="middle"></td>
            <td valign="middle">
            </td>
        </tr>

        <tr>
            <td valign="middle">Ever made any claim before :</td>
            <td valign="middle">
                <?php echo CHtml::dropDownList('ever_made_claim_before', @$ever_made_claim_before, array("Yes" => "Yes", "No" => "No")); ?>
            </td>
            <td valign="middle">Happy to Claim :</td>
            <td valign="middle">
                <?php echo CHtml::dropDownList('happy_to_claim', @$happy_to_claim, array("Yes" => "Yes", "No" => "No")); ?>
            </td>
        </tr>
        <tr>
            <td valign="middle">Time to talk :</td>
            <td valign="middle">
                <?php
                    $hoursOption = range(1, 24);
                    array_fill_keys(array_values($hoursOption), $hoursOption);
                    $minuteOption = range(1, 60);
                    array_fill_keys(array_values($minuteOption), $minuteOption);
                    $selectedHours = '';
                    $selectedMinutes = '';
                    if (isset($time_to_talk)) {
                        $tempArr=  explode(":", $time_to_talk);
                        $selectedHours = $tempArr[0];
                        $selectedMinutes = $tempArr[1];
                    }
                ?>
                <?php echo CHtml::dropDownList('time_to_talk_hrs', $selectedHours, $hoursOption, array('prompt' => 'HH')); ?>
                <?php echo CHtml::dropDownList('time_to_talk_mins', $selectedMinutes, $minuteOption, array('prompt' => 'MM')); ?>
            </td>
        </tr>

        <tr>
            <td valign="middle">&nbsp;</td>
            <td valign="middle">&nbsp;</td>
            <td valign="middle">&nbsp;</td>
            <td valign="middle">&nbsp;</td>
        </tr>
        </tbody>
    </table>
</div>
<!--flight delays package-->



<div id="specific_PPI" class="specific">
<table border="0" cellspacing="2px" cellpadding="2px" class="inputtbl"
       style="padding:5px; border-top-style:hidden; border-bottom-style:hidden;">
<tr class="tablehead">
    <td colspan="4" valign="middle">
        <h3>Account Details</h3>
    </td>
</tr>
<tr>
    <td width="15%" valign="middle">&nbsp;</td>
    <td width="35%" valign="middle">&nbsp;</td>
    <td width="15%" valign="middle">&nbsp;</td>
    <td width="35%" valign="middle">&nbsp;</td>
</tr>
<tr>
    <td valign="middle">Type:</td>
    <td valign="middle"><span id="spryselect2">

    <?php echo CHtml::dropDownList('PPI-type', @$ppi_account_details_type, array(
                "Loan"=>"Loan",
                "Mortgage"=>"Mortgage",
                "Credit Card"=>"Credit Card",
                "Store Card"=>"Store Card",
                "Hire Purchase"=>"Hire Purchase",
                "Overdraft"=>"Overdraft",
                "Catalogue"=>"Catalogue",
                "MPPI"=>"MPPI",
                "Motor Warranty Insurance"=>"Motor Warranty Insurance",
                "Other"=>"Other",
    ), array('id'=>'PPI-type','class'=>'fields')); ?>
     <span class="selectInvalidMsg">Please select a valid item.</span><span class="selectRequiredMsg">Please select an item.</span></span>
        *
    </td>
    <td valign="middle">Credit Provider:</td>
    <td valign="middle"><span id="sprytextfield4">
        <?php echo CHtml::textField('PPI-provider', @$ppi_account_details_credit_provider, array('id'=>'PPI-provider','autocomplete'=>'off')); ?>
        <span class="textfieldRequiredMsg">A value is required.</span></span>
        *
    </td>
</tr>
<tr>
    <td valign="middle">Account Number:</td>
    <td valign="middle">
        <?php echo CHtml::textField('PPI-account_no', @$ppi_account_details_account_number, array('id'=>"PPI-account_no")); ?>
    </td>
    <td valign="middle">Job Title:</td>
    <td valign="middle">
        <span id="sprytextfield6">
            <?php echo CHtml::textField('PPI-job_title', @$ppi_account_details_job_title, array('id'=>'PPI-job_title')); ?>
        </span>
    </td>
</tr>
<tr>
    <td valign="middle">
        <!--Employment Status:-->
    </td>
    <td valign="middle">
        <input type="hidden" name="PPI-emp_stat" class="fields" id="PPI-emp_stat" value="-Depreciated-">
        <!--<span id="spryselect3"><select name="emp_stat" class="fields" id="emp_stat" readonly>
         <option selected="selected">-Depreciated-</option>
         <option value="Employed">Employed</option>
         <option value="Part-Time">Part-Time</option>
         <option value="Temporary">Temporary</option>
         <option value="Self Employed">Self Employed</option>
         <option value="Retired">Retired</option>
         <option value="Student">Student</option>
         <option value="Unpaid Work">Unpaid Work</option>
         <option value="Unemployed">Unemployed</option>
         </select>-->
        </span>
    </td>
    <td valign="middle">
        <!--When Taken:-->
    </td>
    <td valign="middle"><span id="sprytextfield5">
                    <input type="hidden" name="PPI-taken" id="PPI-taken"/>
                    </span>
    </td>
</tr>
<tr>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">&nbsp;</td>
</tr>
<tr class="tablehead">
    <td colspan="4" valign="middle">
        <h3>PPI Specific</h3>
    </td>
</tr>
<tr>
    <td width="15%">&nbsp;</td>
    <td width="35%">&nbsp;</td>
    <td width="15%">&nbsp;</td>
    <td width="35%">&nbsp;</td>
</tr>
<tr>
    <td>Date Taken:</td>
    <td>
        <?php 
            $dateRange = array();
            $monthRange = array();
            $yearRange = array();
            foreach (range(1, 31) as $key => $value) {
                $dateRange[$value.''] = $value;
            }
            foreach (range(1, 12) as $key => $value) {
                $monthRange[$value.''] = $value;
            }
            foreach (range(1970, 2011) as $key => $value) {
                $yearRange[$value.''] = $value;
            }


            $dateTakenDay  = '';
            $dateTakenMonth  = '';
            $dateTakenYear  = '';

            if (isset($ppi_specific_date_taken)) {
                $dateObj = strtotime($ppi_specific_date_taken);
                $dateTakenDay = (int)date("d",$dateObj);
                $dateTakenMonth = (int)date("m",$dateObj);
                $dateTakenYear = (int)date("Y",$dateObj);
            }

        ?>
        <?php echo CHtml::dropDownList('ppi_day', @$dateTakenDay, $dateRange, array('id'=>'ppi_day','prompt'=>'DD')); ?>
        /
        <?php echo CHtml::dropDownList('ppi_month', @$dateTakenMonth, $monthRange, array('id'=>'ppi_month','prompt'=>'MM')); ?>
        / *
        <?php echo CHtml::dropDownList('ppi_year', @$dateTakenYear, $yearRange, array('id'=>'ppi_year','prompt'=>'YYYY')); ?>
    </td>
    <td>
        <p>Where Applied:</p>
    </td>
    <td>
        <?php echo CHtml::dropDownList('ppi_applied', @$ppi_specific_where_applied, array(
                "Unknown"=>"Unknown",
                "Meeting"=>"Meeting",
                "Phone"=>"Phone",
                "Internet"=>"Internet",
                "Post"=>"Post",
        ), array('id'=>'ppi_applied')); ?>
    </td>
</tr>
<tr>
    <td>Employment Status Then:</td>
    <td>
        <?php echo CHtml::dropDownList('emp_then', @$ppi_specific_employment_status_then, array(
            "Employed"=>"Employed",
            "Self Employed"=>"Self Employed",
            "Company Director"=>"Company Director",
            "Employed Part Time"=>"Employed Part Time",
            "Unemployed"=>"Unemployed",
            "Retired"=>"Retired",
            "Student"=>"Student",
        ), array('id'=>'emp_then','prompt'=>'--Select One--')); ?>
    </td>
    <td>Employment Status Now:</td>
    <td>
        <?php echo CHtml::dropDownList('emp_now', @$ppi_specific_employment_status_now, array(
            "Employed"=>"Employed",
            "Self Employed"=>"Self Employed",
            "Company Director"=>"Company Director",
            "Employed Part Time"=>"Employed Part Time",
            "Unemployed"=>"Unemployed",
            "Retired"=>"Retired",
            "Student"=>"Student"
        ), array('id'=>'emp_now','prompt'=>'--Select One--')); ?>
    </td>
</tr>
<tr>
    <?php 
        $missellingArr = array();
        if ((@$ppi_specific_misselling_reasons)) {
            $missellingArr = explode("|",@$ppi_specific_misselling_reasons);
        }
        $missellingArr = array_combine($missellingArr, $missellingArr);

    ?>
    <td valign="top">Misselling Reasons:</td>
    <td valign="top">
        <?php echo CHtml::checkBox('ppi_reason[]', ( is_null(@$missellingArr['Felt Coerced / Pressured']) ? false:true ) , array('id'=>'ppi_reason[]','value'=>'1')); ?>
        1. Felt Coerced / Pressured
        <br/>
    </td>
    <td valign="top">&nbsp;</td>
    <td valign="top">
        <?php echo CHtml::checkBox('ppi_reason[]', ( is_null(@$missellingArr['Insufficient term']) ? false:true ) , array('id'=>'ppi_reason[]','value'=>'8')); ?>
        8. Insufficient term 
        <br/>
    </td>
</tr>
<tr>
    <td>&nbsp;</td>
    <td>
        <?php echo CHtml::checkBox('ppi_reason[]', ( is_null(@$missellingArr["Didn't know there was PPI"]) ? false:true ) , array('id'=>'ppi_reason[]','value'=>'2')); ?>
        2. Didn't know there was PPI
    </td>
    <td>&nbsp;</td>
    <td>
        <?php echo CHtml::checkBox('ppi_reason[]', ( is_null(@$missellingArr['Medical Condition']) ? false:true ) , array('id'=>'ppi_reason[]','value'=>'9')); ?>
        9. Medical Condition
    </td>
</tr>
<tr>
    <td>&nbsp;</td>
    <td>
        <?php echo CHtml::checkBox('ppi_reason[]', ( is_null(@$missellingArr['Told it was complusory']) ? false:true ) , array('id'=>'ppi_reason[]','value'=>'3')); ?>
        3. Told it was complusory
    </td>
    <td>&nbsp;</td>
    <td>
        <?php echo CHtml::checkBox('ppi_reason[]', ( is_null(@$missellingArr['Previously Offered insufficient refund']) ? false:true ) , array('id'=>'ppi_reason[]','value'=>'10')); ?>
        10. Previously Offered insufficient refund
    </td>
</tr>
<tr>
    <td>&nbsp;</td>
    <td>
        <?php echo CHtml::checkBox('ppi_reason[]', ( is_null(@$missellingArr['Told it would assist credit']) ? false:true ) , array('id'=>'ppi_reason[]','value'=>'4')); ?>
        4. Told it would assist credit
    </td>
    <td>&nbsp;</td>
    <td>
        <?php echo CHtml::checkBox('ppi_reason[]', ( is_null(@$missellingArr['PPI Cost wasnt quoted']) ? false:true ) , array('id'=>'ppi_reason[]','value'=>'11')); ?>
        11. PPI Cost wasnt quoted
    </td>
</tr>
<tr>
    <td>&nbsp;</td>
    <td>
        <?php echo CHtml::checkBox('ppi_reason[]', ( is_null(@$missellingArr['Had alternative cover']) ? false:true ) , array('id'=>'ppi_reason[]','value'=>'5')); ?>
        5. Had alternative cover
    </td>
    <td>&nbsp;</td>
    <td>
        <?php echo CHtml::checkBox('ppi_reason[]', ( is_null(@$missellingArr['No T&amp;C explanation']) ? false:true ) , array('id'=>'ppi_reason[]','value'=>'12')); ?>
        12. No T&amp;C explanation
    </td>
</tr>
<tr>
    <td>&nbsp;</td>
    <td>
        <?php echo CHtml::checkBox('ppi_reason[]', ( is_null(@$missellingArr['Unqualified salesperson']) ? false:true ) , array('id'=>'ppi_reason[]','value'=>'6')); ?>
        6. Unqualified salesperson
    </td>
    <td>&nbsp;</td>
    <td>
        <?php echo CHtml::checkBox('ppi_reason[]', ( is_null(@$missellingArr['Over 70 when policy started']) ? false:true ) , array('id'=>'ppi_reason[]','value'=>'13')); ?>
        13. Over 70 when policy started
    </td>
</tr>
<tr>
    <td>&nbsp;</td>
    <td>
        <?php echo CHtml::checkBox('ppi_reason[]', ( is_null(@$missellingArr['Insufficient cover']) ? false:true ) , array('id'=>'ppi_reason[]','value'=>'7')); ?>
        7. Insufficient cover
    </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
</tr>
<tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Claimed:</td>
    <td>
        <?php echo CHtml::dropDownList('ppi_claimed', @$ppi_specific_claimed, array(
            "Dont Know"=>"Dont Know",
            "Yes"=>"Yes",
            "No"=>"No",
            "Declined"=>"Declined"
        ), array('id'=>'ppi_claimed')); ?>
    </td>
</tr>
<tr>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">&nbsp;</td>
</tr>
</table>
</div>
<div id="specific_Packaged" class="specific">
<table border="0" cellspacing="2px" cellpadding="2px" class="inputtbl"
       style="padding:5px; border-top-style:hidden; border-bottom-style:hidden;">
<tr class="tablehead">
    <td colspan="4" valign="middle">
        <h3>Account Details</h3>
    </td>
</tr>
<tr>
    <td width="15%" valign="middle">&nbsp;</td>
    <td width="35%" valign="middle">&nbsp;</td>
    <td width="15%" valign="middle">&nbsp;</td>
    <td width="35%" valign="middle">&nbsp;</td>
</tr>
<tr>
    <td valign="middle">Type:</td>
    <td valign="middle"><span id="spryselect2">
 <select name="PBA-type" class="fields" id="PBA-type">
     <option value="Packaged Account" id="Packaged" selected="selected">Packaged Account</option>
 </select> 
 <span class="selectInvalidMsg">Please select a valid item.</span><span
                class="selectRequiredMsg">Please select an item.</span></span>
        *
    </td>
    <td valign="middle">Credit Provider:</td>
    <td valign="middle"><span id="sprytextfield4">
        <?php //echo CHtml::textField('PBA-provider', @$pba_account_details_type, array('id'=>'PBA-provider','autocomplete'=>'off')); ?>
        <?php echo CHtml::textField('PBA-provider', @$pba_account_details_credit_provider, array('id'=>'PBA-provider','autocomplete'=>'off')); ?>
        <span class="textfieldRequiredMsg">A value is required.</span></span>
        *
    </td>
</tr>
<tr>
    <td valign="middle">Account Number:</td>
    <td valign="middle">
        <?php echo CHtml::textField('PBA-account_no', @$pba_account_details_account_number, array('id'=>'PBA-account_no','autocomplete'=>'off')); ?>
    </td>
    <td valign="middle">Job Title:</td>
    <td valign="middle"><span id="sprytextfield6">
        <?php echo CHtml::textField('PBA-job_title', @$pba_account_details_job_title, array('id'=>'PBA-job_title','autocomplete'=>'off')); ?>
 </span>
    </td>
</tr>
<tr>
    <td valign="middle">
        <!--Employment Status:-->
    </td>
    <td valign="middle">
        <input type="hidden" name="PBA-emp_stat" class="fields" id="PBA-emp_stat" value="-Depreciated-">
        <!--<span id="spryselect3"><select name="emp_stat" class="fields" id="emp_stat" readonly>
<option selected="selected">-Depreciated-</option>
<option value="Employed">Employed</option>
<option value="Part-Time">Part-Time</option>
<option value="Temporary">Temporary</option>
<option value="Self Employed">Self Employed</option>
<option value="Retired">Retired</option>
<option value="Student">Student</option>
<option value="Unpaid Work">Unpaid Work</option>
<option value="Unemployed">Unemployed</option>
</select>-->
        </span>
    </td>
    <td valign="middle">
        <!--When Taken:-->
    </td>
    <td valign="middle"><span id="sprytextfield5">
 <input type="hidden" name="taken" id="taken"/>
 </span>
    </td>
</tr>
<tr>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">&nbsp;</td>
</tr>
<tr class="tablehead">
    <td colspan="4" valign="middle">
        <h3>PBA Specific</h3>
    </td>
</tr>
<tr>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">&nbsp;</td>
</tr>
<tr>
    <td width="15%" valign="middle">Monthly Charge:</td>
    <td width="35%" valign="middle">£
        <?php echo CHtml::textField('pba_charge', @$pba_specific_monthly_charge, array('id'=>'pba_charge','autocomplete'=>'off')); ?>
    </td>
    <td width="15%" valign="middle">Time on Account</td>
    <td width="35%" valign="middle">
        <label for="pba_years"></label>
        <?php echo CHtml::textField('pba_years', @$pba_specific_time_on_account_years, array('id'=>'pba_years','size'=>'4','maxlength'=>'2')); ?> 
        Years
        <?php echo CHtml::textField('pba_months', @$pba_specific_time_on_account_years, array('id'=>'pba_months','size'=>'4','maxlength'=>'2')); ?>
        Months *
        <?php if (is_null(@$pba_specific_account_closed)): ?>
            <input name="pba_closed[]" type="checkbox" id="pba_closed[]" value="1"/> Account Closed
        <?php endif ?>
        <?php if (!is_null(@$pba_specific_account_closed) && $pba_specific_account_closed == '1'): ?>
            <input checked="checked" name="pba_closed[]" type="checkbox" id="pba_closed[]" value="1"/> Account Closed
        <?php endif ?>
        <br/>
    </td>
</tr>
<tr>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">PBA still active?</td>
    <td valign="middle">
        <?php echo CHtml::radioButtonList('pba_open', @$pba_specific_pba_still_active, array(
            'Y'=>'Yes',
            'N'=>'No'
        ), array()); ?>
        <br/>
        <?php echo CHtml::textArea('ope_specific', @$pba_specific_pba_still_active_specify, array(
                'id'=>'ope_specific',
                'cols'=>'45',
                'rows'=>'5',
                'placeholder'=>"e.g. If this is still open explain why and advise the client to close it ASAP.",
                'style'=>"display:none;",
            )); ?>
    </td>
</tr>
<tr>
    <td valign="middle">Know about charge:</td>
    <td valign="middle">
        <?php 
            echo CHtml::radioButtonList(
                'pba_notice', 
                @$pba_specific_know_about_charge, 
                array(
                        "Y"=>"Yes",
                        "N"=>"No",
                    ), 
                array()
            ); 
        ?>
        <br/>
        <?php echo CHtml::textArea(
            'ntc_specific', 
            @$pba_specific_know_about_charge_specify, 
            array(
                'cols'=>'45',
                'rows'=>'5',
                'placeholder'=>"e.g. When did they notice the fees and what did the customer beleive this charge was for?",
                'style'=>"display:none;"
            )
        ); 
        ?>
    </td>
    <td valign="middle">From</td>
    <td valign="middle">
        <?php

            $pba_specific_from_date = "";
            $pba_specific_from_month = "";
            $pba_specific_from_year = "";
            if (  @$pba_specific_from ) {
                $pba_specific_from_date = (int) date("d",strtotime($pba_specific_from));
                $pba_specific_from_month = (int) date("m",strtotime($pba_specific_from));
                $pba_specific_from_year = (int) date("Y",strtotime($pba_specific_from));
            }
        ?>
        <?php 
            echo CHtml::dropDownList(
                    'pba_day', 
                    $pba_specific_from_date,
                    $dateRange, 
                    array('id'=>'pba_day','prompt'=>'DD')
                ); 
        ?>
        /
        <?php 
            echo CHtml::dropDownList(
                    'pba_month', 
                    $pba_specific_from_month,
                    $monthRange,
                    array('id'=>'pba_month','prompt'=>'MM')
                ); 
        ?>
        / *
        <?php 
            echo CHtml::dropDownList(
                    'pba_year', 
                    $pba_specific_from_year,
                    $yearRange,
                    array('id'=>'pba_year','prompt'=>'YYYY')
                ); 
        ?>
    </td>
</tr>
<tr>
    <td valign="middle">Advised to take:</td>
    <td valign="middle">
        <?php 
            echo CHtml::radioButtonList(
                'pba_advice', 
                is_null(@$pba_specific_advise_to_take) ? 'U':$pba_specific_advise_to_take,
                array(
                        'Y'=>'Yes',
                        'N'=>'No',
                        'U'=>"Don't Know",
                    ), 
                array()
            ); 
        ?>
        <br/>
        <?php 
            echo CHtml::textArea(
                'adv_specific', 
                @$pba_specific_advised_to_take_specify, 
                array(
                    'id'=>'adv_specific',
                    'rows'=>'5',
                    'cols'=>'45',
                    'placeholder'=>'e.g. What was the advice given?',
                    'style'=>'display:none',
                )
            ); 
        ?>
    </td>
    <td valign="middle">Where Taken:</td>
    <td valign="middle">
        <?php 
            echo CHtml::dropDownList(
                'pba_how', 
                @$pba_specific_where_taken, 
                array(
                        "Meeting"=>"Meeting",
                        "Phone"=>"Phone",
                        "Internet"=>"Internet",
                        "Post"=>"Post",
                        "Leaflet"=>"Leaflet",
                        "Counter"=>"Counter",
                        "Cant remember"=>"Cant remember"
                    ), 
                array(
                        'id'=>'pba_how',
                        'class'=>'fields',
                    )
            ); 
        ?>
    </td>
</tr>
<tr>
    <td valign="middle">Had a free account:</td>
    <td valign="middle">
        <?php echo CHtml::radioButtonList('pba_free', @$pba_specific_had_free_account, array(
                "Y"=>"Yes",
                "N"=>"No",
        ), array()); ?>
    </td>
    <td valign="middle">Held another PBA:</td>
    <td valign="middle">
        <?php 
            echo CHtml::radioButtonList(
                'pba_others', 
                @$pba_specific_held_another_PBA, 
                array(
                        "Y"=>"Yes",
                        "N"=>"No",
                    ), 
                array()
            );
        ?>
        <br/>
        <?php 
            echo CHtml::textArea(
                'othacc_specific', 
                @$pba_specific_held_another_PBA_specify,
                array(
                    'id'=>'othacc_specific',
                    'cols'=>'45',
                    'rows'=>'5',
                    'placeholder'=>"e.g. Give details of any other accounts the customer has.",
                    'style'=>"display:none;",
                )
            ); 
        ?>
    </td>
</tr>
<tr>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">&nbsp;</td>
</tr>
<tr>

    <?php 
        $accountBenefitsArr = array();
        $accountBenefitsReasonArr = array();
        if (@$pba_specific_account_benefits) {
            $accountBenefitsArr = explode("|", @$pba_specific_account_benefits);
        }
        if (@$pba_specific_account_benefits_reason) {
            $accountBenefitsReasonArr = explode("|", @$pba_specific_account_benefits_reason);
        }
        $accountBenefitsArr = array_combine($accountBenefitsArr, $accountBenefitsArr);
        $accountBenefitsReasonArr = array_combine($accountBenefitsReasonArr, $accountBenefitsReasonArr);
    ?>

    <td valign="middle">Account Benefits:</td>
    <td valign="middle">
        <?php echo CHtml::checkBox('pba_benefits[]', ( is_null(@$accountBenefitsArr['RAC / AA / Breakdown Cover']) ? false:true ) , array('id'=>'pba_benefits[]','value'=>'1')); ?>
        1. RAC / AA / Breakdown Cover
    </td>
    <td valign="middle">Mis-Sold Reason:</td>
    <td valign="middle">
        <?php echo CHtml::checkBox('pba_reason[]', ( is_null(@$accountBenefitsReasonArr["Wasn't informed of alternative free account"]) ? false:true ) , array('id'=>'pba_reason[]','value'=>'1')); ?>
        1. RAC / AA / Breakdown Cover
    </td>
</tr>
<tr>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
        <?php echo CHtml::checkBox('pba_benefits[]', ( is_null(@$accountBenefitsArr['Mobile Cover']) ? false:true ) , array('id'=>'pba_benefits[]','value'=>'2')); ?>
        2. Mobile Cover
    </td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
        <?php echo CHtml::checkBox('pba_reason[]', ( is_null(@$accountBenefitsReasonArr['Told they had to have it']) ? false:true ) , array('id'=>'pba_reason[]','value'=>'2')); ?>
        2. Told they had to have it
    </td>
</tr>
<tr>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
       <?php echo CHtml::checkBox('pba_benefits[]', ( is_null(@$accountBenefitsArr['Travel Insurance']) ? false:true ) , array('id'=>'pba_benefits[]','value'=>'3')); ?>
        3. Travel Insurance
    </td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
        <?php echo CHtml::checkBox('pba_reason[]', ( is_null(@$accountBenefitsReasonArr['Too old for the insurance']) ? false:true ) , array('id'=>'pba_reason[]','value'=>'3')); ?>
        3. Too old for the insurance
    </td>
</tr>
<tr>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
       <?php echo CHtml::checkBox('pba_benefits[]', ( is_null(@$accountBenefitsArr['Overdraft']) ? false:true ) , array('id'=>'pba_benefits[]','value'=>'4')); ?>
       4. Overdraft
    </td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
        <?php echo CHtml::checkBox('pba_reason[]', ( is_null(@$accountBenefitsReasonArr['Misled into taking the account']) ? false:true ) , array('id'=>'pba_reason[]','value'=>'4')); ?>
        4. Misled into taking the account
        <br/>
        <?php 
            echo CHtml::textArea(
                'ml_specific', 
                @$ml_specific, 
                array(
                    'id'=>'ml_specific',
                    'cols'=>'45',
                    'rows'=>'5',
                    'placeholder'=>"e.g. they were told that taking the account would improve thier chances of an overdraft later on.",
                    'style'=>'display:none',
                )
        ); 
        ?>
    </td>
</tr>
<tr>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
       <?php echo CHtml::checkBox('pba_benefits[]', ( is_null(@$accountBenefitsArr['Home Emergency Cover']) ? false:true ) , array('id'=>'pba_benefits[]','value'=>'5')); ?>
        5. Home Emergency Cover
    </td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
        <?php echo CHtml::checkBox('pba_reason[]', ( is_null(@$accountBenefitsReasonArr["Hiked the price and didn't tell them"]) ? false:true ) , array('id'=>'pba_reason[]','value'=>'5')); ?>
        5. Hiked the price and didn't tell them
    </td>
</tr>
<tr>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
        <?php echo CHtml::checkBox('pba_othben', ( ( @$pba_othben) ? false:true ) , array('value'=>'Y','id'=>'pba_othben')); ?>
        6. Other
        <br/>
        <?php 
            echo CHtml::textArea(
                'othben_specific',
                @$pba_specific_other_specific,
                array(
                        'id'=>'othben_specific',
                        'rows'=>'5',
                        'cols'=>'45',
                        'style'=>'display:none',
                        'placeholder'=>"e.g. Give details of other benefits attached to this account.",
                    )
                ); 
        ?>
    </td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
        <?php echo CHtml::checkBox('pba_reason[]', ( is_null(@$accountBenefitsReasonArr['Added without their knowledge']) ? false:true ) , array('id'=>'pba_reason[]','value'=>'6')); ?>
        6. Added without their knowledge
    </td>
</tr>
<tr>
    <?php 
        $pbaBenefitsUsed = array();
        if (!is_null(@$pba_specific_benefits_used)) {
            $pbaBenefitsUsed = explode("|", $pba_specific_benefits_used);
        }
        $pbaBenefitsUsed = array_combine($pbaBenefitsUsed, $pbaBenefitsUsed);
    ?>
    <td valign="middle">Benefits Used:</td>
    <td valign="middle">
       <?php echo CHtml::checkBox('pba_benefits_used[]', ( is_null(@$pbaBenefitsUsed['RAC / AA / Breakdown Cover']) ? false:true ) , array('id'=>'pba_benefits_used[]','value'=>'1')); ?>
        1. RAC / AA / Breakdown Cover
    </td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
        <?php echo CHtml::checkBox('pba_reason[]', ( is_null(@$accountBenefitsReasonArr['Tried to cancel but forced to keep it']) ? false:true ) , array('id'=>'pba_reason7','value'=>'7')); ?>
        7. Tried to cancel but forced to keep it
        <br/>
        <?php 
        echo CHtml::textArea(
            'ca_specific',
            @$pba_specific_cancelled_specific,
            array(
                    'id'=>'ca_specific',
                    'cols'=>'45',
                    'rows'=>'5',
                    'placeholder'=>"e.g. when they attempted to cancel they were told that the overdraft facility would be removed.",
                    'style'=>'display:none',
                ));

        ?>


    </td>
</tr>
<tr>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
        <?php echo CHtml::checkBox('pba_benefits_used[]', ( is_null(@$pbaBenefitsUsed['Mobile Cover']) ? false:true ) , array('id'=>'pba_benefits_used[]','value'=>'2')); ?>
        2. Mobile Cover
    </td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
        <?php echo CHtml::checkBox('pba_reason[]', ( is_null(@$accountBenefitsReasonArr['Requirements not mentioned']) ? false:true ) , array('id'=>'pba_reason8','value'=>'8')); ?>
        8. Requirements not mentioned
        <br/>
        <?php echo CHtml::textArea(
            're_specific',
            @$pba_specific_cancelled_specific, 
            array(
                'id'=>'re_specific',
                'cols'=>'45',
                'rows'=>'5',
                'placeholder'=>"e.g. they were not told that they must specify a phone to add for the phone insurance.",
                'style'=>'display:none'
                ))
        ?>        
    </td>
</tr>
<tr>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
        <?php echo CHtml::checkBox('pba_benefits_used[]', ( is_null(@$pbaBenefitsUsed['Travel Insurance']) ? false:true ) , array('id'=>'pba_benefits_used[]','value'=>'3')); ?>
        3. Travel Insurance
    </td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
        <?php echo CHtml::checkBox('pba_reason[]', ( is_null(@$accountBenefitsReasonArr['Exclusions not satisfactorily explained']) ? false:true ) , array('id'=>'pba_reason9','value'=>'9')); ?>
        9. Exclusions not satisfactorily explained
        <br/>
        <?php echo CHtml::textArea(
            'ex_specific',
            @$pba_specific_exclusion_not_explained_specific,
            array(
                'id'=>'ex_specific',
                'cols'=>'45',
                'rows'=>'5',
                'placeholder'=>"e.g. they were not informed that thier phone would not be covered when left in the car.",
                'style'=>'display:none'
                )); 
        ?>
    </td>
</tr>
<tr>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
        <?php echo CHtml::checkBox('pba_benefits_used[]', ( is_null(@$pbaBenefitsUsed['Overdraft']) ? false:true ) , array('id'=>'pba_benefits_used[]','value'=>'4')); ?>
        4. Overdraft
    </td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
        <?php echo CHtml::checkBox('pba_reason[]', ( is_null(@$accountBenefitsReasonArr['Told it would improve credit rating']) ? false:true ) , array('id'=>'pba_reason[]','value'=>'10')); ?>
        10. Told it would improve credit rating
    </td>
</tr>
<tr>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
        <?php echo CHtml::checkBox('pba_benefits_used[]', ( is_null(@$pbaBenefitsUsed['Home Emergency Cover']) ? false:true ) , array('id'=>'pba_benefits_used[]','value'=>'5')); ?>
        5. Home Emergency Cover
        <br/>
        <?php echo CHtml::textArea(
            'claim_specific',
            @$pba_specific_exclusion_not_explained_specific,
            array(
                'id'=>'claim_specific',
                'cols'=>'45',
                'rows'=>'5',
                'placeholder'=>"e.g. Give details of claims the customer has made.",
                'style'=>'display:none'
                )); 
        ?>        
    </td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
        <?php echo CHtml::checkBox('pba_reason[]', ( is_null(@$accountBenefitsReasonArr['Told would receive special interest rates']) ? false:true ) , array('id'=>'pba_reason[]','value'=>'11')); ?>
        11. Told would receive special interest rates
    </td>
</tr>
<tr>
    <td valign="middle">Registered Benefits:</td>
    <td valign="middle">
        <?php 
        echo CHtml::radioButtonList(
                'pba_regben', 
                @$pba_specific_registered_benefits,
                array(
                        "Y"=>"Yes",
                        "N"=>"No",
                    ), 
                array()
            ); 
        ?>
        <br/>
        <?php 
            echo CHtml::textArea(
                'regben_specific', 
                @$pba_specific_registered_benefits_specify, 
                array(
                    'id'=>'regben_specific',
                    'cols'=>'45',
                    'rows'=>'5',
                    'placeholder'=>"e.g. Details of benefits registered.",
                    'style'=>"display:none;",
                )
            ); 
        ?>
    </td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
    <?php echo CHtml::checkBox('pba_reason[]', ( is_null(@$accountBenefitsReasonArr['Felt obliged/coerced to take the account']) ? false:true ) , array('id'=>'pba_reason[]','value'=>'12')); ?>
        12. Felt obliged/coerced to take the account
    </td>
</tr>
<tr>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">&nbsp;</td>
</tr>
<tr>

    <td valign="middle">Annual Reviews:</td>
    <td valign="middle">
        <?php 
            echo CHtml::radioButtonList(
                'pba_review', 
                @$pba_specific_annual_review, 
                array(
                        '1'=>'Yes',
                        '0'=>'No',
                    ), 
                array()
            ); 
        ?>
    </td>
    <td valign="middle">TCF:</td>
    <td valign="middle">
        <?php 
            $pbaTcfArr = array();
            if (!is_null(@$pba_specific_tcf)) {
                $pbaTcfArr = explode("|", $pba_specific_tcf);
            }
            $pbaTcfArr = array_combine(array_values($pbaTcfArr), $pbaTcfArr);
            
        ?>
       <?php 
            echo CHtml::checkBox('pba_tcf[]', ( is_null(@$pbaTcfArr["Didn't feel confident that they are dealing with firms where the fair treatment of customers is central to the corporate culture."]) ? false:true ) , array('id'=>'pba_tcf[]','value'=>'1'));
        ?>
        1. Didn't feel confident that they are dealing with firms where the fair treatment of customers is central to the corporate culture.
    </td>
</tr>
<tr>
    <td valign="middle">UK Resident:</td>
    <td valign="middle">
        <?php 
            echo CHtml::radioButtonList(
                'pba_uk_resident', 
                @$pba_specific_uk_residents, 
                array(
                        "1"=>"Yes",
                        "0"=>"No (Over 183 days a year outside UK)",
                    ), 
                array()
            ); 
        ?>
    </td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
        <?php 
            echo CHtml::checkBox('pba_tcf[]', ( is_null(@$pbaTcfArr["Account wasn't designed to meet the needs of identified consumer groups and are not targeted accordingly."]) ? false:true ) , array('id'=>'pba_tcf[]','value'=>'2'));
        ?>
        2. Account wasn't designed to meet the needs of identified consumer groups and are not targeted accordingly.
    </td>
</tr>
<tr>
    <td valign="middle">UK GP:</td>
    <td valign="middle">
        <?php 
            echo CHtml::radioButtonList(
                'pba_ukgp', 
                @$pba_specific_uk_gp, 
                array(
                        "Y"=>"Yes",
                        "N"=>"No",
                    ), 
                array()
            ); 
        ?>
    </td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
        <?php 
            echo CHtml::checkBox('pba_tcf[]', ( is_null(@$pbaTcfArr['Not provided with clear information and kept appropriately informed before, during and after the point of sale.']) ? false:true ) , array('id'=>'pba_tcf[]','value'=>'3'));
        ?>
        3. Not provided with clear information and kept appropriately informed before, during and after the point of sale.
    </td>
</tr>
<tr>
    <td valign="middle">Driving License:</td>
    <td valign="middle">
        <?php 
            echo CHtml::radioButtonList(
                'pba_driver', 
                @$pba_specific_driving_license,
                array(
                        "Y"=>"Yes",
                        "N"=>"No",
                    ), 
                array()
            ); 
        ?>
    </td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
        <?php 
            echo CHtml::checkBox('pba_tcf[]', ( is_null(@$pbaTcfArr['Advice was unsuitable and did it take account of their circumstances.']) ? false:true ) , array('id'=>'pba_tcf[]','value'=>'4'));
        ?>
        
        4. Advice was unsuitable and did it take account of their circumstances.
    </td>
</tr>
<tr>
    <td valign="middle">Armed Forces:</td>
    <td valign="middle">
        <?php 
            echo CHtml::radioButtonList(
                'pba_armed_forces', 
                @$pba_specific_armed_forces,
                array(
                        "1"=>"Yes",
                        "0"=>"No",
                    ), 
                array()
            ); 
        ?>    
        <br/>
        <?php 
            echo CHtml::textArea(
                'af_specific', 
                @$pba_specific_armed_forces_specify, 
                array(
                    'id'=>'af_specific',
                    'cols'=>'45',
                    'rows'=>'5',
                    'placeholder'=>"e.g. Our client's position in the armed forces means that they have specific medical care providers that are beyond the scope of this cover.",
                    'style'=>"display:none;",
                )
            ); 
        ?>
    </td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
        <?php 
            echo CHtml::checkBox('pba_tcf[]', ( is_null(@$pbaTcfArr['Account did not perform as firms have led them to expect, and the associated service is of an unacceptable standard.']) ? false:true ) , array('id'=>'pba_tcf[]','value'=>'5'));
        ?>
        5. Account did not perform as firms have led them to expect, and the associated service is of an unacceptable standard.
    </td>
</tr>
<tr>
    <td valign="middle">Value for Money:</td>
    <td valign="middle">

    <?php 
        echo CHtml::radioButtonList(
            'pba_vfm',
            @$pba_specific_value_for_money, 
            array(
                    'Y'=>"Yes",
                    'N'=>"No",
                ), 
            array()
        ); 
    ?>
    </td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
        <?php 
            echo CHtml::checkBox('pba_tcf[]', ( is_null(@$pbaTcfArr['Faced unreasonable post-sale barriers imposed by firms to change product, switch provider, submit a claim or make a complaint.']) ? false:true ) , array('id'=>'pba_tcf[]','value'=>'6'));
        ?>
        6. Faced unreasonable post-sale barriers imposed by firms to change product, switch provider, submit a claim or make a complaint.
    </td>
</tr>
<tr>
    <td valign="middle">Welcome Pack Received:</td>
    <td valign="middle">
    <?php 
        echo CHtml::radioButtonList(
            'pba_welcome', 
            @$pba_specific_welcome_pack_received, 
            array(
                    "Y"=>"Yes",
                    "N"=>"No",
                    "U"=>"Don't Know",
                ), 
            array()
        ); 
    ?>
    </td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">&nbsp;</td>
</tr>
<tr>
    <td valign="middle">Sign T&amp;C's:</td>
    <td valign="middle">
        <?php 
            echo CHtml::radioButtonList(
                'pba_terms', 
                @$pba_specific_sign_TC, 
                array(
                        'Y'=>'Yes',
                        'N'=>'No',
                        'U'=>"Don't Know",
                    ), 
                array()
            ); 
        ?>
    </td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">&nbsp;</td>
</tr>
<tr>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">&nbsp;</td>
</tr>
<tr>
    <?php 
        $pbaSpecificMobileCoverArr = array();
        if (isset($pba_specific_mobile_cover)) {
            $pbaSpecificMobileCoverArr = explode("|", $pba_specific_mobile_cover);
        }
        $pbaSpecificMobileCoverArr = array_combine($pbaSpecificMobileCoverArr, $pbaSpecificMobileCoverArr);
    ?>
    <td valign="middle">Mobile Cover:</td>
    <td valign="middle">
        <?php 
            echo CHtml::checkBox('pba_unsuitable[]', ( is_null(@$pbaSpecificMobileCoverArr['Other Bank Cover']) ? false:true ) , array('id'=>'pba_unsuitable[]','value'=>'1'));
        ?>
        1. Other Bank Cover
    </td>
    <td valign="middle">Holiday Pattern</td>
    <td valign="middle">
        <?php 
        echo CHtml::dropDownList(
                'hols1', 
                @$pba_specific_holiday_pattern_first, 
                array(
                        '11'=>'Never Holidays in Europe',
                        '12'=>'Holidays in Europe 1-3 times a year',
                        '13'=>'Holidays in Europe 3+ times a year',
                    ), 
                array('id'=>'hols1','class'=>'fields')
            );
        ?>
    </td>
</tr>
<tr>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
        <?php 
            echo CHtml::checkBox('pba_unsuitable[]', ( is_null(@$pbaSpecificMobileCoverArr['Other Gadget Insurer']) ? false:true ) , array('id'=>'pba_unsuitable[]','value'=>'2'));
        ?>
        2. Other Gadget Insurer
    </td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
        <?php 
            echo CHtml::dropDownList(
                'hols2', 
                @$pba_specific_holiday_pattern_second, 
                array(
                        '21'=>'Never Holidays in Europe',
                        '22'=>'Holidays in Europe 1-3 times a year',
                        '23'=>'Holidays in Europe 3+ times a year',
                    ), 
                array('id'=>'hols2','class'=>'fields')
            ); 
        ?>
    </td>
</tr>
<tr>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
        <?php 
            echo CHtml::checkBox('pba_unsuitable[]', ( is_null(@$pbaSpecificMobileCoverArr['Mobile Network Cover']) ? false:true ) , array('id'=>'pba_unsuitable[]','value'=>'3'));
        ?>
        3. Mobile Network Cover
    </td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
        <?php 
            echo CHtml::dropDownList(
                'hols3',
                @$pba_specific_holiday_pattern_third, 
                array(
                        '31'=>'Never Holidays in Europe',
                        '32'=>'Holidays in Europe 1-3 times a year',
                        '33'=>'Holidays in Europe 3+ times a year',
                    ), 
                array('id'=>'hols3','class'=>'fields')
            ); 
        ?>
    </td>
</tr>
<tr>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
        <?php 
            echo CHtml::checkBox('pba_unsuitable[]', ( is_null(@$pbaSpecificMobileCoverArr['Home Insurance']) ? false:true ) , array('id'=>'pba_unsuitable[]','value'=>'4'));
        ?>
        4. Home Insurance
    </td>
    <td valign="middle">Breakdown Cover:</td>
    <td valign="middle">
        <?php 
            echo CHtml::checkBox('pba_unsuitable[]', ( is_null(@$pbaSpecificMobileCoverArr['Company Car']) ? false:true ) , array('id'=>'pba_unsuitable[]','value'=>'11'));
        ?>
        1. Company Car
    </td>
</tr>
<tr>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
        <?php 
            echo CHtml::checkBox('pba_unsuitable[]', ( is_null(@$pbaSpecificMobileCoverArr['No Mobile Phone']) ? false:true ) , array('id'=>'pba_unsuitable[]','value'=>'5'));
        ?>
        5. No Mobile Phone
    </td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
        <?php 
            echo CHtml::checkBox('pba_unsuitable[]', ( is_null(@$pbaSpecificMobileCoverArr['No Car']) ? false:true ) , array('id'=>'pba_unsuitable[]','value'=>'12'));
        ?>
        2. No Car
    </td>
</tr>
<tr>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
        <?php 
            echo CHtml::checkBox('pba_unsuitable[]', ( is_null(@$pbaSpecificMobileCoverArr['No Smartphone']) ? false:true ) , array('id'=>'pba_unsuitable[]','value'=>'24'));
        ?>
        6. No Smartphone
    </td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
        <?php 
            echo CHtml::checkBox('pba_unsuitable[]', ( is_null(@$pbaSpecificMobileCoverArr['Third Party Cover']) ? false:true ) , array('id'=>'pba_unsuitable[]','value'=>'13'));
        ?>
        3. Third Party Cover
    </td>
</tr>
<tr>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
        <?php 
            echo CHtml::checkBox('pba_unsuitable[]', ( is_null(@$pbaSpecificMobileCoverArr['Declined Claim']) ? false:true ) , array('id'=>'pba_unsuitable[]','value'=>'21'));
        ?>
        7. Declined Claim
    </td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
        <?php 
            echo CHtml::checkBox('pba_unsuitable[]', ( is_null(@$pbaSpecificMobileCoverArr['Old Car']) ? false:true ) , array('id'=>'pba_unsuitable[]','value'=>'14'));
        ?>
        4. Old Car
    </td>
</tr>
<tr>
    <td valign="middle">Travel Cover:</td>
    <td valign="middle">
        <?php 
            echo CHtml::checkBox('pba_unsuitable[]', ( is_null(@$pbaSpecificMobileCoverArr['Over Cover Age']) ? false:true ) , array('id'=>'pba_unsuitable[]','value'=>'6'));
        ?>
        1. Over Cover Age
    </td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
        <?php 
            echo CHtml::checkBox('pba_unsuitable[]', ( is_null(@$pbaSpecificMobileCoverArr['Declined Claim']) ? false:true ) , array('id'=>'pba_unsuitable[]','value'=>'23'));
        ?>
        5. Declined Claim
    </td>
</tr>
<tr>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
        <?php 
            echo CHtml::checkBox('pba_unsuitable[]', ( is_null(@$pbaSpecificMobileCoverArr["Doesn't Travel"]) ? false:true ) , array('id'=>'pba_unsuitable[]','value'=>'7'));
        ?>
        2. Doesn't Travel
    </td>
    <td valign="middle">Overdraft</td>
    <td valign="middle">
        <?php 
            echo CHtml::checkBox('pba_unsuitable[]', ( is_null(@$pbaSpecificMobileCoverArr['Wrongly Advised']) ? false:true ) , array('id'=>'pba_unsuitable[]','value'=>'16'));
        ?>
        1. Wrongly Advised
    </td>
</tr>
<tr>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
        <?php 
            echo CHtml::checkBox('pba_unsuitable[]', ( is_null(@$pbaSpecificMobileCoverArr['Travels longer than 31 days']) ? false:true ) , array('id'=>'pba_unsuitable[]','value'=>'15'));
        ?>
        3. Travels longer than 31 days
    </td>
    <td valign="middle">Home Emergency</td>
    <td valign="middle">
        <?php 
            echo CHtml::checkBox('pba_unsuitable[]', ( is_null(@$pbaSpecificMobileCoverArr['Third Party Cover']) ? false:true ) , array('id'=>'pba_unsuitable[]','value'=>'17'));
        ?>
        1. Third Party Cover
    </td>
</tr>
<tr>
    <td valign="middle">&nbsp;</td>

    <td valign="middle">
        <?php 
            echo CHtml::checkBox('pba_unsuitable[]', ( is_null(@$pbaSpecificMobileCoverArr['Pre Existing Condition']) ? false:true ) , array('id'=>'pba_unsuitable8','value'=>'8'));
        ?>
        4. Pre Existing Condition
        <br/>
        <?php 
            echo CHtml::textArea(
                'health_specific', 
                @$pba_specific_health_specific, 
                array(
                    'id'=>'health_specific',
                    'cols'=>'45',
                    'rows'=>'5',
                    'placeholder'=>"e.g. Give details of health problems.",
                    'style'=>"display:none;",
                )
            ); 
        ?>
    </td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
        <?php 
            echo CHtml::checkBox('pba_unsuitable[]', ( is_null(@$pbaSpecificMobileCoverArr['Landlords Cover']) ? false:true ) , array('id'=>'pba_unsuitable[]','value'=>'18'));
        ?>
        2. Landlords Cover
    </td>
</tr>
<tr>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
        <?php 
            echo CHtml::checkBox('pba_unsuitable[]', ( is_null(@$pbaSpecificMobileCoverArr['Sought Own Cover']) ? false:true ) , array('id'=>'pba_unsuitable[]','value'=>'9'));
        ?>
        5. Sought Own Cover
    </td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
        <?php 
            echo CHtml::checkBox('pba_unsuitable[]', ( is_null(@$pbaSpecificMobileCoverArr['Parents / Other Accom']) ? false:true ) , array('id'=>'pba_unsuitable[]','value'=>'19'));
        ?>
        3. Parents / Other Accom
    </td>
</tr>
<tr>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
        <?php 
            echo CHtml::checkBox('pba_unsuitable[]', ( is_null(@$pbaSpecificMobileCoverArr['High Risk Travel']) ? false:true ) , array('id'=>'pba_unsuitable[]','value'=>'10'));
        ?>
        6. High Risk Travel
    </td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
        <?php 
            echo CHtml::checkBox('pba_unsuitable[]', ( is_null(@$pbaSpecificMobileCoverArr['Declined Claim']) ? false:true ) , array('id'=>'pba_unsuitable[]','value'=>'20'));
        ?>
        4. Declined Claim
    </td>
</tr>
<tr>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
        <?php 
            echo CHtml::checkBox('pba_unsuitable[]', ( is_null(@$pbaSpecificMobileCoverArr['Declined Claim']) ? false:true ) , array('id'=>'pba_unsuitable[]','value'=>'22'));
        ?>

        7. Declined Claim
    </td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">
            <?php 
                echo CHtml::checkBox('pba_othinskeep', ( is_null(@$pba_specific_keep_insurance_sold) ? false:true ) , array('id'=>'pba_othinskeep','value'=>'TRUE'));
            ?>
        Kept other insurances after PBA sold
        <br/>
        <?php 
            echo CHtml::textArea(
                'othins_specific', 
                @$kept_other_insurances_after_PBA_sold_specification, 
                array(
                    'id'=>'othins_specific',
                    'cols'=>'45',
                    'rows'=>'5',
                    'placeholder'=>"e.g. Give details of why the customer cancelled the other insurances.",
                    'style'=>"display:none;",
                )
            ); 
        ?>
    </td>
</tr>
<tr>
    <td valign="middle">Estimated Redress:</td>
    <td valign="middle"><strong>£<span id="result"> </span> + Interest</strong>
    </td>
    <td valign="middle">&nbsp;</td>
    <td valign="middle">&nbsp;</td>
</tr>
</table>
</div>
<table border="0" cellspacing="2px" cellpadding="2px" class="inputtbl" style=" border-top:none; padding:5px;">
    <tr>
        <td colspan="4" valign="top">
            <div align="center">
                <button type="submit" name="Save" id="Save" value="Save" tabindex="27" class="savebutton">Save<img
                        src="//icons.iconarchive.com/icons/dryicons/simplistica/32/accept-icon.png" witdh="15"
                        height="15"/>
                </button>
                <button type="reset" name="Reset" id="Reset" value="Reset" tabindex="28" class="resetbutton">Reset<img
                        src="//icons.iconarchive.com/icons/kyo-tux/ginux/32/Extras-Close-icon.png" witdh="15"
                        height="15"/>
                </button>
            </div>
        </td>
    </tr>
</table>

<?php echo CHtml::endForm(); ?>
<div align="center">
</div>

<script>
    function PopupCard() {
        window.open("../ccval.html", "_blank", "toolbar=no, scrollbars=no, resizable=no, top=100, left=700, width=350, height=500");
    }
</script>
<div class="easy-modal" id="modal_Packaged">
    <div class="easy-modal-inner">
        <h4>Confirm Packaged Account Criteria</h4>

        <p>Please confirm following criteria - The customer:</p>
        <ul>
            <li><strong>Has</strong> valid e-mail address</li>
            <li>is <strong>not</strong> in IVA or Debt Management</li>
            <li>is <strong>not</strong> currently in Bankruptcy</li>
            <li>is <strong>not</strong> in debt to the bank</li>
            <li><strong>is</strong> currently in employment</li>
            <li><strong>has</strong> used one or less benefits excluding overdraft</li>
            <li><strong>has</strong> still got the PBA on the account of closed less than 3 years</li>
        </ul>
        <br/>

        <div align="center">
            <button class="easy-modal-close" title="Close">Confirm</button>
        </div>
    </div>
</div>
<div class="easy-modal" id="modal_PPI">
    <div class="easy-modal-inner">
        <h4>Confirm PPI Criteria</h4>

        <p>Please confirm following criteria - The customer:</p>
        <ul>
            <li><strong>Has</strong> valid e-mail address</li>
            <li>is <strong>not</strong> in IVA or Debt Management</li>
            <li>is <strong>not</strong> currently in Bankruptcy</li>
            <li>Began <strong>before</strong> October 2010</li>
            <li>If HSBC or Nationwide, began <strong>before</strong> December 2007</li>
            <li>Is <strong>not</strong> a Store Card</li>
            <li>Is <strong>not</strong> a Cheltenham &amp; Gloucester Mortgage</li>
        </ul>
        <br/>

        <div align="center">
            <button class="easy-modal-close" title="Close">Confirm</button>
        </div>
    </div>
</div>
<script type="text/javascript">
$("input[name='pba_armed_forces']").change(function () {

    if ($(this).val() == "1") {
        $("#af_specific").show();
        tinymce.init({
            selector: "#af_specific",
            toolbar: false,
            statusbar: false,
            mode: "none",
            menubar: "insert",
            width: 370,
            setup: function (editor) {
                editor.addMenuItem('insertbddis', {
                    text: 'Breakdown Forces Discount',
                    context: 'insert',
                    onclick: function () {
                        editor.insertContent('Benefits from breakdown cover discount due to being in the forces. ');
                    }
                });
                editor.addMenuItem('insertlpa', {
                    text: 'Potential Long Periods Abroad',
                    context: 'insert',
                    onclick: function () {
                        editor.insertContent("Has the potential to spend long periods of time abroad with the forces in high risk destinations classing them as a high risk traveler. ");
                    }
                });
                editor.addMenuItem('insertohist', {
                    text: 'Actual Long Periods Abroad',
                    context: 'insert',
                    onclick: function () {
                        editor.insertContent('Has been out of the country with the forces for an average of X months almost every year since opening the account rendering them unable to use the majority of the benefits whilst away. ');
                    }
                });
                editor.addMenuItem('insertinsu', {
                    text: 'Recommended Travel Cover',
                    context: 'insert',
                    onclick: function () {
                        editor.insertContent('Is in the armed forces and was recommended this account on the basis that the travel insurance would cover them whilst abroad with work. ');
                    }
                });
                editor.addMenuItem('insertukgp', {
                    text: 'No UK GP',
                    context: 'insert',
                    onclick: function () {
                        editor.insertContent('Is unable to claim medical expenses through the banks travel insurance as not registered with a UK GP due to being in the forces. ');
                    }
                });
                editor.addMenuItem('insertsmppc', {
                    text: 'Military Posessions Cover',
                    context: 'insert',
                    onclick: function () {
                        editor.insertContent('Has specialist military insurance that provides personal possession cover. ');
                    }
                });
                editor.addMenuItem('insertsmhi', {
                    text: 'Military Home Contents',
                    context: 'insert',
                    onclick: function () {
                        editor.insertContent("Has specialist military insurance that provides home and contents cover. ");
                    }
                });
                editor.addMenuItem('insertsmtc', {
                    text: 'Military Travel Cover',
                    context: 'insert',
                    onclick: function () {
                        editor.insertContent("Has specialist military insurance that provides worldwide travel cover. ");
                    }
                });
            }
        });
    } else {
        tinymce.remove('#af_specific');
        $("#af_specific").hide();
    }

});
$("input[id='pba_reason4']").click(function () {
    if (this.checked) {
        $("#ml_specific").show();
        tinymce.init({
            selector: "#ml_specific",
            toolbar: false,
            statusbar: false,
            mode: "none",
            menubar: "insert",
            width: 370,
            setup: function (editor) {
                editor.addMenuItem('insertacc', {
                    text: 'Only Account Available',
                    context: 'insert',
                    onclick: function () {
                        editor.insertContent('Was led to believe this account was the only one available. ');
                    }
                });
                editor.addMenuItem('insertquest', {
                    text: 'No Questionnaire',
                    context: 'insert',
                    onclick: function () {
                        editor.insertContent("Wasn't asked a fact finding questionnaire (YPSOR) to see if the insurances and account were applicable.. ");
                    }
                });
                editor.addMenuItem('insertover', {
                    text: 'Offered Better Overdraft',
                    context: 'insert',
                    onclick: function () {
                        editor.insertContent('Was led to believe they would get a better overdraft limit and rate. ');
                    }
                });
                editor.addMenuItem('insertint', {
                    text: 'Offered Better Interest',
                    context: 'insert',
                    onclick: function () {
                        editor.insertContent('Was led to believe they would get preferential interest rates on loans, credit cards and mortgages. ');
                    }
                });
                editor.addMenuItem('insertcred', {
                    text: 'Credit Rating',
                    context: 'insert',
                    onclick: function () {
                        editor.insertContent('Was led to believe they would get an improved credit rating. ');
                    }
                });
                editor.addMenuItem('insertpress', {
                    text: 'Pressured',
                    context: 'insert',
                    onclick: function () {
                        editor.insertContent('Was not looking for a package account but was pressured into taking it. ');
                    }
                });
                editor.addMenuItem('insertcar', {
                    text: 'No Car',
                    context: 'insert',
                    onclick: function () {
                        editor.insertContent("Didn't have a car for the first X years of the account but was sold breakdown cover regardless. ");
                    }
                });
            }
        });
    } else {
        tinymce.remove('#ml_specific');
        $("#ml_specific").hide();
    }
});
$("input[id='pba_reason7']").click(function () {
    if (this.checked) {
        $("#ca_specific").show();
    } else {
        $("#ca_specific").hide();
    }
});
$("input[id='pba_reason8']").click(function () {
    if (this.checked) {
        $("#re_specific").show();
        tinymce.init({
            selector: "#re_specific",
            toolbar: false,
            statusbar: false,
            mode: "none",
            menubar: "insert",
            width: 370,
            setup: function (editor) {
                editor.addMenuItem('insertreg', {
                    text: 'Not told to register',
                    context: 'insert',
                    onclick: function () {
                        editor.insertContent('Was not told to register their phones IMEI at point of sale to activate the insurance therefore leaving their phone un-insured. ');
                    }
                });
            }
        });
    } else {
        tinymce.remove('#re_specific');
        $("#re_specific").hide();
    }
});
$("input[id='pba_reason9']").click(function () {
    if (this.checked) {
        $("#ex_specific").show();
        tinymce.init({
            selector: "#ex_specific",
            toolbar: false,
            statusbar: false,
            mode: "none",
            menubar: "insert",
            width: 370,
            setup: function (editor) {
                editor.addMenuItem('insertexc', {
                    text: 'Exclusions not Explained',
                    context: 'insert',
                    onclick: function () {
                        editor.insertContent('Was not made aware of all the exclusions and excess costs that come with the insurances. ');
                    }
                });
                editor.addMenuItem('insertreg', {
                    text: 'High Risk Sports',
                    context: 'insert',
                    onclick: function () {
                        editor.insertContent('Participates in high risk sports whilst abroad, e.g. diving and snowboarding. ');
                    }
                });
            }
        });
    } else {
        tinymce.remove('#ex_specific');
        $("#ex_specific").hide();
    }
});
$("input[name='pba_notice']").change(function () {
    if ($(this).val() == "Y") {
        $("#ntc_specific").show();
    } else {
        $("#ntc_specific").hide();
    }
});
$("input[name='pba_advice']").change(function () {
    if ($(this).val() == "Y") {
        $("#adv_specific").show();
    } else {
        $("#adv_specific").hide();
    }
});
$("input[name='pba_open']").change(function () {
    if ($(this).val() == "Y") {
        $("#ope_specific").show();
    } else {
        $("#ope_specific").hide();
    }
});
$("input[name='pba_others']").change(function () {
    if ($(this).val() == "Y") {
        $("#othacc_specific").show();
    } else {
        $("#othacc_specific").hide();
    }
});
$("input[id='pba_unsuitable8']").click(function () {
    if (this.checked) {
        $("#health_specific").show();
    } else {
        $("#health_specific").hide();
    }
});
$("input[name='pba_regben']").change(function () {
    if ($(this).val() == "Y") {
        $("#regben_specific").show();
    } else {
        $("#regben_specific").hide();
    }
});
$("input[name='pba_benefits_used[]']").click(function () {
    if (this.checked) {
        $("#claim_specific").show();
    } else {
        $("#claim_specific").hide();
    }
});
$("input[id='pba_othben']").click(function () {
    if (this.checked) {
        $("#othben_specific").show();
    } else {
        $("#othben_specific").hide();
    }
});
$("input[id='pba_othinskeep']").click(function () {
    if (this.checked) {
        $("#othins_specific").hide();
    } else {
        $("#othins_specific").show();
    }
});

</script>
<p align='center'>
    <br/>
<p align="center">

    Copyright &copy;2013 - <?php echo date('Y') ?> <?php echo Yii::app()->name ?>
</p>
</div>
</div>


<script type="text/javascript">
    /* CRAFTY CLICKS POSTAL*/
    var cp_access_token = "e4c62-b99b6-21239-0112a"; // ***** DON'T FORGET TO PUT YOUR ACCESS TOKEN HERE IN PLACE OF X's !!!! *****  
    var cp_obj_1 = CraftyPostcodeCreate();
    cp_obj_1.set("access_token", cp_access_token);
    cp_obj_1.set("first_res_line", "----- Main Policy Holder's address ----");
    cp_obj_1.set("res_autoselect", "0");
    cp_obj_1.set("result_elem_id", "crafty_postcode_result_display_1");
    cp_obj_1.set("form", "details"); // note this is the same as cp_obj_2
    // note the lines below are different to cp_obj_2
    cp_obj_1.set("elem_house_num", "add_house");
    cp_obj_1.set("elem_street1", "add_street");
    cp_obj_1.set("elem_street2", "add_2"); // optional, but highly recommended
    cp_obj_1.set("elem_town", "add_town");
    cp_obj_1.set("elem_postcode", "add_postcode");
    cp_obj_1.set("single_res_autoselect", 1); // don't show a drop down box if only one matching address is found
    // house name/num search setup
    cp_obj_1.set("elem_search_house", "search_string");
    var cp_obj_2 = CraftyPostcodeCreate();
    cp_obj_2.set("access_token", cp_access_token);
    cp_obj_2.set("first_res_line", "----- Secondary Policy Holder's address ----");
    cp_obj_2.set("res_autoselect", "0");
    cp_obj_2.set("result_elem_id", "crafty_postcode_result_display_2");
    cp_obj_2.set("form", "details"); // note this is the same as cp_obj_2
    // note the lines below are different to cp_obj_1
    cp_obj_2.set("elem_house_num", "2_add_house");
    cp_obj_2.set("elem_street1", "2_add_street");
    cp_obj_2.set("elem_street2", "2_add_2"); // optional, but highly recommended
    cp_obj_2.set("elem_town", "2_add_town");
    cp_obj_2.set("elem_postcode", "2_add_postcode");
    cp_obj_2.set("single_res_autoselect", 1); // don't show a drop down box if only one matching address is found
    // house name/num search setup
    cp_obj_2.set("elem_search_house", "2_search_string");


    // house name/num search setup
    cp_obj_2.set("elem_search_house", "2_search_string");
</script>

