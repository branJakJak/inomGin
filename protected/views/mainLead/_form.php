<?php
/* @var $this MainLeadController */
/* @var $model MainLeadModel */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'main-lead-model-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'closer'); ?>
		<?php echo $form->textField($model,'closer',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'closer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'policy_holder_1_title'); ?>
		<?php echo $form->textField($model,'policy_holder_1_title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'policy_holder_1_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'policy_holder_1_forename'); ?>
		<?php echo $form->textField($model,'policy_holder_1_forename',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'policy_holder_1_forename'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'policy_holder_1_surname'); ?>
		<?php echo $form->textField($model,'policy_holder_1_surname',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'policy_holder_1_surname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'policy_holder_1_dateOfBirth'); ?>
		<?php echo $form->textField($model,'policy_holder_1_dateOfBirth'); ?>
		<?php echo $form->error($model,'policy_holder_1_dateOfBirth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'policy_holder_1_email'); ?>
		<?php echo $form->textField($model,'policy_holder_1_email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'policy_holder_1_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'policy_holder_1_dayTimeTelephone'); ?>
		<?php echo $form->textField($model,'policy_holder_1_dayTimeTelephone',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'policy_holder_1_dayTimeTelephone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'policy_holder_1_eveningTelephone'); ?>
		<?php echo $form->textField($model,'policy_holder_1_eveningTelephone',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'policy_holder_1_eveningTelephone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'policy_holder_1_mobileTelephone'); ?>
		<?php echo $form->textField($model,'policy_holder_1_mobileTelephone',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'policy_holder_1_mobileTelephone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'policy_holder_1_houseNumber'); ?>
		<?php echo $form->textField($model,'policy_holder_1_houseNumber',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'policy_holder_1_houseNumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'policy_holder_1_postCode'); ?>
		<?php echo $form->textField($model,'policy_holder_1_postCode',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'policy_holder_1_postCode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'policy_holder_1_houseName'); ?>
		<?php echo $form->textField($model,'policy_holder_1_houseName',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'policy_holder_1_houseName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'policy_holder_1_street'); ?>
		<?php echo $form->textField($model,'policy_holder_1_street',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'policy_holder_1_street'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'policy_holder_1_address2'); ?>
		<?php echo $form->textField($model,'policy_holder_1_address2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'policy_holder_1_address2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'policy_holder_1_town'); ?>
		<?php echo $form->textField($model,'policy_holder_1_town',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'policy_holder_1_town'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'policy_holder_2_title'); ?>
		<?php echo $form->textField($model,'policy_holder_2_title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'policy_holder_2_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'policy_holder_2_forename'); ?>
		<?php echo $form->textField($model,'policy_holder_2_forename',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'policy_holder_2_forename'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'policy_holder_2_surname'); ?>
		<?php echo $form->textField($model,'policy_holder_2_surname',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'policy_holder_2_surname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'policy_holder_2_dateOfBirth'); ?>
		<?php echo $form->textField($model,'policy_holder_2_dateOfBirth'); ?>
		<?php echo $form->error($model,'policy_holder_2_dateOfBirth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'policy_holder_2_email'); ?>
		<?php echo $form->textField($model,'policy_holder_2_email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'policy_holder_2_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'policy_holder_2_dayTimeTelephone'); ?>
		<?php echo $form->textField($model,'policy_holder_2_dayTimeTelephone',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'policy_holder_2_dayTimeTelephone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'policy_holder_2_eveningTelephone'); ?>
		<?php echo $form->textField($model,'policy_holder_2_eveningTelephone',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'policy_holder_2_eveningTelephone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'policy_holder_2_mobileTelephone'); ?>
		<?php echo $form->textField($model,'policy_holder_2_mobileTelephone',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'policy_holder_2_mobileTelephone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'policy_holder_2_houseNumber'); ?>
		<?php echo $form->textField($model,'policy_holder_2_houseNumber',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'policy_holder_2_houseNumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'policy_holder_2_postCode'); ?>
		<?php echo $form->textField($model,'policy_holder_2_postCode',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'policy_holder_2_postCode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'policy_holder_2_houseName'); ?>
		<?php echo $form->textField($model,'policy_holder_2_houseName',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'policy_holder_2_houseName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'policy_holder_2_street'); ?>
		<?php echo $form->textField($model,'policy_holder_2_street',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'policy_holder_2_street'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'policy_holder_2_address2'); ?>
		<?php echo $form->textField($model,'policy_holder_2_address2',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'policy_holder_2_address2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'policy_holder_2_town'); ?>
		<?php echo $form->textField($model,'policy_holder_2_town',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'policy_holder_2_town'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'add_account'); ?>
		<?php echo $form->textField($model,'add_account',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'add_account'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'addedAccount'); ?>
		<?php echo $form->textField($model,'addedAccount',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'addedAccount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'includeFreePPIAssesment'); ?>
		<?php echo $form->textField($model,'includeFreePPIAssesment',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'includeFreePPIAssesment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ppi_account_details_type'); ?>
		<?php echo $form->textField($model,'ppi_account_details_type',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ppi_account_details_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ppi_account_details_account_number'); ?>
		<?php echo $form->textField($model,'ppi_account_details_account_number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ppi_account_details_account_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ppi_account_details_credit_provider'); ?>
		<?php echo $form->textField($model,'ppi_account_details_credit_provider',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ppi_account_details_credit_provider'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ppi_account_details_job_title'); ?>
		<?php echo $form->textField($model,'ppi_account_details_job_title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ppi_account_details_job_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ppi_specific_date_taken'); ?>
		<?php echo $form->textField($model,'ppi_specific_date_taken'); ?>
		<?php echo $form->error($model,'ppi_specific_date_taken'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ppi_specific_employment_status_then'); ?>
		<?php echo $form->textField($model,'ppi_specific_employment_status_then',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ppi_specific_employment_status_then'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ppi_specific_misselling_reasons'); ?>
		<?php echo $form->textField($model,'ppi_specific_misselling_reasons',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ppi_specific_misselling_reasons'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ppi_specific_where_applied'); ?>
		<?php echo $form->textField($model,'ppi_specific_where_applied',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ppi_specific_where_applied'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ppi_specific_employment_status_now'); ?>
		<?php echo $form->textField($model,'ppi_specific_employment_status_now',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ppi_specific_employment_status_now'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ppi_specific_claimed'); ?>
		<?php echo $form->textField($model,'ppi_specific_claimed',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ppi_specific_claimed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_account_details_type'); ?>
		<?php echo $form->textField($model,'pba_account_details_type',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_account_details_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_account_details_account_number'); ?>
		<?php echo $form->textField($model,'pba_account_details_account_number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_account_details_account_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_account_details_credit_provider'); ?>
		<?php echo $form->textField($model,'pba_account_details_credit_provider',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_account_details_credit_provider'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_account_details_job_title'); ?>
		<?php echo $form->textField($model,'pba_account_details_job_title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_account_details_job_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_monthly_charge'); ?>
		<?php echo $form->textField($model,'pba_specific_monthly_charge'); ?>
		<?php echo $form->error($model,'pba_specific_monthly_charge'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_know_about_charge'); ?>
		<?php echo $form->textField($model,'pba_specific_know_about_charge',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_know_about_charge'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_know_about_charge_specify'); ?>
		<?php echo $form->textField($model,'pba_specific_know_about_charge_specify',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_know_about_charge_specify'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_advise_to_take'); ?>
		<?php echo $form->textField($model,'pba_specific_advise_to_take',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_advise_to_take'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_advise_to_take_specify'); ?>
		<?php echo $form->textField($model,'pba_specific_advise_to_take_specify',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_advise_to_take_specify'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_mobile_cover'); ?>
		<?php echo $form->textField($model,'pba_specific_mobile_cover',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_mobile_cover'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_estimate_redress'); ?>
		<?php echo $form->textField($model,'pba_specific_estimate_redress',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_estimate_redress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_time_on_account_years'); ?>
		<?php echo $form->textField($model,'pba_specific_time_on_account_years',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_time_on_account_years'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_time_on_account_months'); ?>
		<?php echo $form->textField($model,'pba_specific_time_on_account_months',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_time_on_account_months'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_account_closed'); ?>
		<?php echo $form->textField($model,'pba_specific_account_closed',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_account_closed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_pba_still_active'); ?>
		<?php echo $form->textField($model,'pba_specific_pba_still_active',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_pba_still_active'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_pba_still_active_specify'); ?>
		<?php echo $form->textField($model,'pba_specific_pba_still_active_specify',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_pba_still_active_specify'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_from'); ?>
		<?php echo $form->textField($model,'pba_specific_from'); ?>
		<?php echo $form->error($model,'pba_specific_from'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_advised_to_take'); ?>
		<?php echo $form->textField($model,'pba_specific_advised_to_take',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_advised_to_take'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_advised_to_take_specify'); ?>
		<?php echo $form->textField($model,'pba_specific_advised_to_take_specify',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_advised_to_take_specify'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_where_taken'); ?>
		<?php echo $form->textField($model,'pba_specific_where_taken',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_where_taken'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_had_free_account'); ?>
		<?php echo $form->textField($model,'pba_specific_had_free_account',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_had_free_account'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_held_another_PBA'); ?>
		<?php echo $form->textField($model,'pba_specific_held_another_PBA',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_held_another_PBA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_held_another_PBA_specify'); ?>
		<?php echo $form->textField($model,'pba_specific_held_another_PBA_specify',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_held_another_PBA_specify'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_account_benefits'); ?>
		<?php echo $form->textField($model,'pba_specific_account_benefits',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_account_benefits'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_account_benefits_reason'); ?>
		<?php echo $form->textField($model,'pba_specific_account_benefits_reason',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_account_benefits_reason'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_missold_reason'); ?>
		<?php echo $form->textField($model,'pba_specific_missold_reason',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_missold_reason'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_other_specific'); ?>
		<?php echo $form->textField($model,'pba_specific_other_specific',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_other_specific'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_cancelled_specific'); ?>
		<?php echo $form->textField($model,'pba_specific_cancelled_specific',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_cancelled_specific'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_requirements_not_mentioned_specific'); ?>
		<?php echo $form->textField($model,'pba_specific_requirements_not_mentioned_specific',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_requirements_not_mentioned_specific'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_exclusion_not_explained_specific'); ?>
		<?php echo $form->textField($model,'pba_specific_exclusion_not_explained_specific',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_exclusion_not_explained_specific'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_benefits_used'); ?>
		<?php echo $form->textField($model,'pba_specific_benefits_used',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_benefits_used'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_home_emergency_specific'); ?>
		<?php echo $form->textField($model,'pba_specific_home_emergency_specific',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_home_emergency_specific'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_registered_benefits'); ?>
		<?php echo $form->textField($model,'pba_specific_registered_benefits',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_registered_benefits'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_registered_benefits_specify'); ?>
		<?php echo $form->textField($model,'pba_specific_registered_benefits_specify',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_registered_benefits_specify'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_annual_review'); ?>
		<?php echo $form->textField($model,'pba_specific_annual_review',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_annual_review'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_tcf'); ?>
		<?php echo $form->textField($model,'pba_specific_tcf',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_tcf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_uk_residents'); ?>
		<?php echo $form->textField($model,'pba_specific_uk_residents',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_uk_residents'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_uk_gp'); ?>
		<?php echo $form->textField($model,'pba_specific_uk_gp',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_uk_gp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_driving_license'); ?>
		<?php echo $form->textField($model,'pba_specific_driving_license',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_driving_license'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_armed_forces'); ?>
		<?php echo $form->textField($model,'pba_specific_armed_forces',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_armed_forces'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_armed_forces_specify'); ?>
		<?php echo $form->textField($model,'pba_specific_armed_forces_specify',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_armed_forces_specify'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_value_for_money'); ?>
		<?php echo $form->textField($model,'pba_specific_value_for_money',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_value_for_money'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_welcome_pack_received'); ?>
		<?php echo $form->textField($model,'pba_specific_welcome_pack_received',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_welcome_pack_received'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_sign_TC'); ?>
		<?php echo $form->textField($model,'pba_specific_sign_TC',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_sign_TC'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_travel_cover'); ?>
		<?php echo $form->textField($model,'pba_specific_travel_cover',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_travel_cover'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_health_specific'); ?>
		<?php echo $form->textField($model,'pba_specific_health_specific',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_health_specific'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_holiday_pattern_first'); ?>
		<?php echo $form->textField($model,'pba_specific_holiday_pattern_first',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_holiday_pattern_first'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_holiday_pattern_second'); ?>
		<?php echo $form->textField($model,'pba_specific_holiday_pattern_second',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_holiday_pattern_second'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_holiday_pattern_third'); ?>
		<?php echo $form->textField($model,'pba_specific_holiday_pattern_third',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_holiday_pattern_third'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_declined_claim_specify'); ?>
		<?php echo $form->textField($model,'pba_specific_declined_claim_specify',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_declined_claim_specify'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pba_specific_keep_insurance_sold'); ?>
		<?php echo $form->textField($model,'pba_specific_keep_insurance_sold',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pba_specific_keep_insurance_sold'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->