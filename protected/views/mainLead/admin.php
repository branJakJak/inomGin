<?php
/* @var $this MainLeadController */
/* @var $model MainLeadModel */

$this->breadcrumbs=array(
	'Main Lead Models'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List MainLeadModel', 'url'=>array('index')),
	array('label'=>'Create MainLeadModel', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#main-lead-model-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Main Lead Models</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'main-lead-model-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'user_id',
		'closer',
		'policy_holder_1_title',
		'policy_holder_1_forename',
		'policy_holder_1_surname',
		/*
		'policy_holder_1_dateOfBirth',
		'policy_holder_1_email',
		'policy_holder_1_dayTimeTelephone',
		'policy_holder_1_eveningTelephone',
		'policy_holder_1_mobileTelephone',
		'policy_holder_1_houseNumber',
		'policy_holder_1_postCode',
		'policy_holder_1_houseName',
		'policy_holder_1_street',
		'policy_holder_1_address2',
		'policy_holder_1_town',
		'policy_holder_2_title',
		'policy_holder_2_forename',
		'policy_holder_2_surname',
		'policy_holder_2_dateOfBirth',
		'policy_holder_2_email',
		'policy_holder_2_dayTimeTelephone',
		'policy_holder_2_eveningTelephone',
		'policy_holder_2_mobileTelephone',
		'policy_holder_2_houseNumber',
		'policy_holder_2_postCode',
		'policy_holder_2_houseName',
		'policy_holder_2_street',
		'policy_holder_2_address2',
		'policy_holder_2_town',
		'add_account',
		'addedAccount',
		'includeFreePPIAssesment',
		'ppi_account_details_type',
		'ppi_account_details_account_number',
		'ppi_account_details_credit_provider',
		'ppi_account_details_job_title',
		'ppi_specific_date_taken',
		'ppi_specific_employment_status_then',
		'ppi_specific_misselling_reasons',
		'ppi_specific_where_applied',
		'ppi_specific_employment_status_now',
		'ppi_specific_claimed',
		'pba_account_details_type',
		'pba_account_details_account_number',
		'pba_account_details_credit_provider',
		'pba_account_details_job_title',
		'pba_specific_monthly_charge',
		'pba_specific_know_about_charge',
		'pba_specific_know_about_charge_specify',
		'pba_specific_advise_to_take',
		'pba_specific_advise_to_take_specify',
		'pba_specific_mobile_cover',
		'pba_specific_estimate_redress',
		'pba_specific_time_on_account_years',
		'pba_specific_time_on_account_months',
		'pba_specific_account_closed',
		'pba_specific_pba_still_active',
		'pba_specific_pba_still_active_specify',
		'pba_specific_from',
		'pba_specific_advised_to_take',
		'pba_specific_advised_to_take_specify',
		'pba_specific_where_taken',
		'pba_specific_had_free_account',
		'pba_specific_held_another_PBA',
		'pba_specific_held_another_PBA_specify',
		'pba_specific_account_benefits',
		'pba_specific_account_benefits_reason',
		'pba_specific_missold_reason',
		'pba_specific_other_specific',
		'pba_specific_cancelled_specific',
		'pba_specific_requirements_not_mentioned_specific',
		'pba_specific_exclusion_not_explained_specific',
		'pba_specific_benefits_used',
		'pba_specific_home_emergency_specific',
		'pba_specific_registered_benefits',
		'pba_specific_registered_benefits_specify',
		'pba_specific_annual_review',
		'pba_specific_tcf',
		'pba_specific_uk_residents',
		'pba_specific_uk_gp',
		'pba_specific_driving_license',
		'pba_specific_armed_forces',
		'pba_specific_armed_forces_specify',
		'pba_specific_value_for_money',
		'pba_specific_welcome_pack_received',
		'pba_specific_sign_TC',
		'pba_specific_travel_cover',
		'pba_specific_health_specific',
		'pba_specific_holiday_pattern_first',
		'pba_specific_holiday_pattern_second',
		'pba_specific_holiday_pattern_third',
		'pba_specific_declined_claim_specify',
		'pba_specific_keep_insurance_sold',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
