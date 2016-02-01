<?php
/* @var $this MainLeadController */
/* @var $data MainLeadModel */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('closer')); ?>:</b>
	<?php echo CHtml::encode($data->closer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('policy_holder_1_title')); ?>:</b>
	<?php echo CHtml::encode($data->policy_holder_1_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('policy_holder_1_forename')); ?>:</b>
	<?php echo CHtml::encode($data->policy_holder_1_forename); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('policy_holder_1_surname')); ?>:</b>
	<?php echo CHtml::encode($data->policy_holder_1_surname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('policy_holder_1_dateOfBirth')); ?>:</b>
	<?php echo CHtml::encode($data->policy_holder_1_dateOfBirth); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('policy_holder_1_email')); ?>:</b>
	<?php echo CHtml::encode($data->policy_holder_1_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('policy_holder_1_dayTimeTelephone')); ?>:</b>
	<?php echo CHtml::encode($data->policy_holder_1_dayTimeTelephone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('policy_holder_1_eveningTelephone')); ?>:</b>
	<?php echo CHtml::encode($data->policy_holder_1_eveningTelephone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('policy_holder_1_mobileTelephone')); ?>:</b>
	<?php echo CHtml::encode($data->policy_holder_1_mobileTelephone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('policy_holder_1_houseNumber')); ?>:</b>
	<?php echo CHtml::encode($data->policy_holder_1_houseNumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('policy_holder_1_postCode')); ?>:</b>
	<?php echo CHtml::encode($data->policy_holder_1_postCode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('policy_holder_1_houseName')); ?>:</b>
	<?php echo CHtml::encode($data->policy_holder_1_houseName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('policy_holder_1_street')); ?>:</b>
	<?php echo CHtml::encode($data->policy_holder_1_street); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('policy_holder_1_address2')); ?>:</b>
	<?php echo CHtml::encode($data->policy_holder_1_address2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('policy_holder_1_town')); ?>:</b>
	<?php echo CHtml::encode($data->policy_holder_1_town); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('policy_holder_2_title')); ?>:</b>
	<?php echo CHtml::encode($data->policy_holder_2_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('policy_holder_2_forename')); ?>:</b>
	<?php echo CHtml::encode($data->policy_holder_2_forename); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('policy_holder_2_surname')); ?>:</b>
	<?php echo CHtml::encode($data->policy_holder_2_surname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('policy_holder_2_dateOfBirth')); ?>:</b>
	<?php echo CHtml::encode($data->policy_holder_2_dateOfBirth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('policy_holder_2_email')); ?>:</b>
	<?php echo CHtml::encode($data->policy_holder_2_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('policy_holder_2_dayTimeTelephone')); ?>:</b>
	<?php echo CHtml::encode($data->policy_holder_2_dayTimeTelephone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('policy_holder_2_eveningTelephone')); ?>:</b>
	<?php echo CHtml::encode($data->policy_holder_2_eveningTelephone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('policy_holder_2_mobileTelephone')); ?>:</b>
	<?php echo CHtml::encode($data->policy_holder_2_mobileTelephone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('policy_holder_2_houseNumber')); ?>:</b>
	<?php echo CHtml::encode($data->policy_holder_2_houseNumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('policy_holder_2_postCode')); ?>:</b>
	<?php echo CHtml::encode($data->policy_holder_2_postCode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('policy_holder_2_houseName')); ?>:</b>
	<?php echo CHtml::encode($data->policy_holder_2_houseName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('policy_holder_2_street')); ?>:</b>
	<?php echo CHtml::encode($data->policy_holder_2_street); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('policy_holder_2_address2')); ?>:</b>
	<?php echo CHtml::encode($data->policy_holder_2_address2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('policy_holder_2_town')); ?>:</b>
	<?php echo CHtml::encode($data->policy_holder_2_town); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('add_account')); ?>:</b>
	<?php echo CHtml::encode($data->add_account); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('addedAccount')); ?>:</b>
	<?php echo CHtml::encode($data->addedAccount); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('includeFreePPIAssesment')); ?>:</b>
	<?php echo CHtml::encode($data->includeFreePPIAssesment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ppi_account_details_type')); ?>:</b>
	<?php echo CHtml::encode($data->ppi_account_details_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ppi_account_details_account_number')); ?>:</b>
	<?php echo CHtml::encode($data->ppi_account_details_account_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ppi_account_details_credit_provider')); ?>:</b>
	<?php echo CHtml::encode($data->ppi_account_details_credit_provider); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ppi_account_details_job_title')); ?>:</b>
	<?php echo CHtml::encode($data->ppi_account_details_job_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ppi_specific_date_taken')); ?>:</b>
	<?php echo CHtml::encode($data->ppi_specific_date_taken); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ppi_specific_employment_status_then')); ?>:</b>
	<?php echo CHtml::encode($data->ppi_specific_employment_status_then); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ppi_specific_misselling_reasons')); ?>:</b>
	<?php echo CHtml::encode($data->ppi_specific_misselling_reasons); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ppi_specific_where_applied')); ?>:</b>
	<?php echo CHtml::encode($data->ppi_specific_where_applied); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ppi_specific_employment_status_now')); ?>:</b>
	<?php echo CHtml::encode($data->ppi_specific_employment_status_now); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ppi_specific_claimed')); ?>:</b>
	<?php echo CHtml::encode($data->ppi_specific_claimed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_account_details_type')); ?>:</b>
	<?php echo CHtml::encode($data->pba_account_details_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_account_details_account_number')); ?>:</b>
	<?php echo CHtml::encode($data->pba_account_details_account_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_account_details_credit_provider')); ?>:</b>
	<?php echo CHtml::encode($data->pba_account_details_credit_provider); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_account_details_job_title')); ?>:</b>
	<?php echo CHtml::encode($data->pba_account_details_job_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_monthly_charge')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_monthly_charge); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_know_about_charge')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_know_about_charge); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_know_about_charge_specify')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_know_about_charge_specify); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_advise_to_take')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_advise_to_take); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_advise_to_take_specify')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_advise_to_take_specify); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_mobile_cover')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_mobile_cover); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_estimate_redress')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_estimate_redress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_time_on_account_years')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_time_on_account_years); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_time_on_account_months')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_time_on_account_months); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_account_closed')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_account_closed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_pba_still_active')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_pba_still_active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_pba_still_active_specify')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_pba_still_active_specify); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_from')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_from); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_advised_to_take')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_advised_to_take); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_advised_to_take_specify')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_advised_to_take_specify); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_where_taken')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_where_taken); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_had_free_account')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_had_free_account); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_held_another_PBA')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_held_another_PBA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_held_another_PBA_specify')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_held_another_PBA_specify); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_account_benefits')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_account_benefits); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_account_benefits_reason')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_account_benefits_reason); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_missold_reason')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_missold_reason); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_other_specific')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_other_specific); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_cancelled_specific')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_cancelled_specific); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_requirements_not_mentioned_specific')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_requirements_not_mentioned_specific); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_exclusion_not_explained_specific')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_exclusion_not_explained_specific); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_benefits_used')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_benefits_used); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_home_emergency_specific')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_home_emergency_specific); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_registered_benefits')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_registered_benefits); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_registered_benefits_specify')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_registered_benefits_specify); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_annual_review')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_annual_review); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_tcf')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_tcf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_uk_residents')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_uk_residents); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_uk_gp')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_uk_gp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_driving_license')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_driving_license); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_armed_forces')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_armed_forces); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_armed_forces_specify')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_armed_forces_specify); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_value_for_money')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_value_for_money); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_welcome_pack_received')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_welcome_pack_received); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_sign_TC')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_sign_TC); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_travel_cover')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_travel_cover); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_health_specific')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_health_specific); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_holiday_pattern_first')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_holiday_pattern_first); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_holiday_pattern_second')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_holiday_pattern_second); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_holiday_pattern_third')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_holiday_pattern_third); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_declined_claim_specify')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_declined_claim_specify); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pba_specific_keep_insurance_sold')); ?>:</b>
	<?php echo CHtml::encode($data->pba_specific_keep_insurance_sold); ?>
	<br />

	*/ ?>

</div>