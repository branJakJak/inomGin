<?php
/* @var $this MainLeadController */
/* @var $model MainLeadModel */

$this->breadcrumbs=array(
	'Main Lead Models'=>array('index'),
	$model->id,
);

$this->menu=array(
//	array('label'=>'List MainLeadModel', 'url'=>array('index')),
//	array('label'=>'Create MainLeadModel', 'url'=>array('create')),
//	array('label'=>'Update MainLeadModel', 'url'=>array('update', 'id'=>$model->id)),
//	array('label'=>'Delete MainLeadModel', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage MainLeadModel', 'url'=>array('admin')),
);
$urlReferer = Yii::app()->request->getUrlReferrer();
if (!is_null($urlReferer) && isset($urlReferer)) {
	$this->menu=array(
		array('label'=>'Back', 'url'=>$urlReferer),
	);
}else{
	$this->menu=array(
		array('label'=>'Back', 'url'=>array("/submittion") ),
	);
}



/*include the javascript*/
$baseUrl = Yii::app()->theme->baseUrl; 
Yii::app()->clientScript->registerScriptFile($baseUrl.'/bower_components/clipboard/dist/clipboard.min.js', CClientScript::POS_HEAD);

Yii::app()->clientScript->registerScript('clipboardJs', '
var clipboard = new Clipboard(".btn");
	', CClientScript::POS_READY);

?>


<div class="view">
	<table class='table table-strippe table-bordered'>
		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('id')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('id')) ?>">
				<?php echo CHtml::link(CHtml::encode($model->id), array('view', 'id'=>$model->id)); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('id')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('user_id')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('user_id')) ?>">
				<?php echo CHtml::encode($model->user_id); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('user_id')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('closer')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('closer')) ?>">
				<?php echo CHtml::encode($model->closer); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('closer')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('policy_holder_1_title')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('policy_holder_1_title')) ?>">
				<?php echo CHtml::encode($model->policy_holder_1_title); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('policy_holder_1_title')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('policy_holder_1_forename')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('policy_holder_1_forename')) ?>">
				<?php echo CHtml::encode($model->policy_holder_1_forename); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('policy_holder_1_forename')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('policy_holder_1_surname')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('policy_holder_1_surname')) ?>">
				<?php echo CHtml::encode($model->policy_holder_1_surname); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('policy_holder_1_surname')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('policy_holder_1_dateOfBirth')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('policy_holder_1_dateOfBirth')) ?>">
				<?php echo CHtml::encode($model->policy_holder_1_dateOfBirth); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('policy_holder_1_dateOfBirth')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('policy_holder_1_email')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('policy_holder_1_email')) ?>">
				<?php echo CHtml::encode($model->policy_holder_1_email); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('policy_holder_1_email')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('policy_holder_1_dayTimeTelephone')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('policy_holder_1_dayTimeTelephone')) ?>">
				<?php echo CHtml::encode($model->policy_holder_1_dayTimeTelephone); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('policy_holder_1_dayTimeTelephone')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('policy_holder_1_eveningTelephone')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('policy_holder_1_eveningTelephone')) ?>">
				<?php echo CHtml::encode($model->policy_holder_1_eveningTelephone); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('policy_holder_1_eveningTelephone')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('policy_holder_1_mobileTelephone')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('policy_holder_1_mobileTelephone')) ?>">
				<?php echo CHtml::encode($model->policy_holder_1_mobileTelephone); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('policy_holder_1_mobileTelephone')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('policy_holder_1_houseNumber')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('policy_holder_1_houseNumber')) ?>">
				<?php echo CHtml::encode($model->policy_holder_1_houseNumber); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('policy_holder_1_houseNumber')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('policy_holder_1_postCode')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('policy_holder_1_postCode')) ?>">
				<?php echo CHtml::encode($model->policy_holder_1_postCode); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('policy_holder_1_postCode')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('policy_holder_1_houseName')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('policy_holder_1_houseName')) ?>">
				<?php echo CHtml::encode($model->policy_holder_1_houseName); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('policy_holder_1_houseName')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('policy_holder_1_street')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('policy_holder_1_street')) ?>">
				<?php echo CHtml::encode($model->policy_holder_1_street); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('policy_holder_1_street')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('policy_holder_1_address2')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('policy_holder_1_address2')) ?>">
				<?php echo CHtml::encode($model->policy_holder_1_address2); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('policy_holder_1_address2')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('policy_holder_1_town')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('policy_holder_1_town')) ?>">
				<?php echo CHtml::encode($model->policy_holder_1_town); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('policy_holder_1_town')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('policy_holder_2_title')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('policy_holder_2_title')) ?>">
				<?php echo CHtml::encode($model->policy_holder_2_title); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('policy_holder_2_title')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('policy_holder_2_forename')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('policy_holder_2_forename')) ?>">
				<?php echo CHtml::encode($model->policy_holder_2_forename); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('policy_holder_2_forename')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('policy_holder_2_surname')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('policy_holder_2_surname')) ?>">
				<?php echo CHtml::encode($model->policy_holder_2_surname); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('policy_holder_2_surname')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('policy_holder_2_dateOfBirth')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('policy_holder_2_dateOfBirth')) ?>">
				<?php echo CHtml::encode($model->policy_holder_2_dateOfBirth); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('policy_holder_2_dateOfBirth')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('policy_holder_2_email')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('policy_holder_2_email')) ?>">
				<?php echo CHtml::encode($model->policy_holder_2_email); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('policy_holder_2_email')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('policy_holder_2_dayTimeTelephone')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('policy_holder_2_dayTimeTelephone')) ?>">
				<?php echo CHtml::encode($model->policy_holder_2_dayTimeTelephone); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('policy_holder_2_dayTimeTelephone')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('policy_holder_2_eveningTelephone')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('policy_holder_2_eveningTelephone')) ?>">
				<?php echo CHtml::encode($model->policy_holder_2_eveningTelephone); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('policy_holder_2_eveningTelephone')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('policy_holder_2_mobileTelephone')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('policy_holder_2_mobileTelephone')) ?>">
				<?php echo CHtml::encode($model->policy_holder_2_mobileTelephone); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('policy_holder_2_mobileTelephone')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('policy_holder_2_houseNumber')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('policy_holder_2_houseNumber')) ?>">
				<?php echo CHtml::encode($model->policy_holder_2_houseNumber); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('policy_holder_2_houseNumber')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('policy_holder_2_postCode')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('policy_holder_2_postCode')) ?>">
				<?php echo CHtml::encode($model->policy_holder_2_postCode); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('policy_holder_2_postCode')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('policy_holder_2_houseName')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('policy_holder_2_houseName')) ?>">
				<?php echo CHtml::encode($model->policy_holder_2_houseName); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('policy_holder_2_houseName')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('policy_holder_2_street')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('policy_holder_2_street')) ?>">
				<?php echo CHtml::encode($model->policy_holder_2_street); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('policy_holder_2_street')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('policy_holder_2_address2')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('policy_holder_2_address2')) ?>">
				<?php echo CHtml::encode($model->policy_holder_2_address2); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('policy_holder_2_address2')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('policy_holder_2_town')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('policy_holder_2_town')) ?>">
				<?php echo CHtml::encode($model->policy_holder_2_town); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('policy_holder_2_town')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('add_account')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('add_account')) ?>">
				<?php echo CHtml::encode($model->add_account); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('add_account')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('addedAccount')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('addedAccount')) ?>">
				<?php echo CHtml::encode($model->addedAccount); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('addedAccount')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('includeFreePPIAssesment')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('includeFreePPIAssesment')) ?>">
				<?php echo CHtml::encode($model->includeFreePPIAssesment); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('includeFreePPIAssesment')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('ppi_account_details_type')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('ppi_account_details_type')) ?>">
				<?php echo CHtml::encode($model->ppi_account_details_type); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('ppi_account_details_type')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('ppi_account_details_account_number')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('ppi_account_details_account_number')) ?>">
				<?php echo CHtml::encode($model->ppi_account_details_account_number); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('ppi_account_details_account_number')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('ppi_account_details_credit_provider')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('ppi_account_details_credit_provider')) ?>">
				<?php echo CHtml::encode($model->ppi_account_details_credit_provider); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('ppi_account_details_credit_provider')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('ppi_account_details_job_title')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('ppi_account_details_job_title')) ?>">
				<?php echo CHtml::encode($model->ppi_account_details_job_title); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('ppi_account_details_job_title')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('ppi_specific_date_taken')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('ppi_specific_date_taken')) ?>">
				<?php echo CHtml::encode($model->ppi_specific_date_taken); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('ppi_specific_date_taken')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('ppi_specific_employment_status_then')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('ppi_specific_employment_status_then')) ?>">
				<?php echo CHtml::encode($model->ppi_specific_employment_status_then); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('ppi_specific_employment_status_then')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('ppi_specific_misselling_reasons')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('ppi_specific_misselling_reasons')) ?>">
				<?php echo CHtml::encode($model->ppi_specific_misselling_reasons); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('ppi_specific_misselling_reasons')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('ppi_specific_where_applied')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('ppi_specific_where_applied')) ?>">
				<?php echo CHtml::encode($model->ppi_specific_where_applied); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('ppi_specific_where_applied')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('ppi_specific_employment_status_now')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('ppi_specific_employment_status_now')) ?>">
				<?php echo CHtml::encode($model->ppi_specific_employment_status_now); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('ppi_specific_employment_status_now')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('ppi_specific_claimed')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('ppi_specific_claimed')) ?>">
				<?php echo CHtml::encode($model->ppi_specific_claimed); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('ppi_specific_claimed')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_account_details_type')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_account_details_type')) ?>">
				<?php echo CHtml::encode($model->pba_account_details_type); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_account_details_type')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_account_details_account_number')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_account_details_account_number')) ?>">
				<?php echo CHtml::encode($model->pba_account_details_account_number); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_account_details_account_number')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_account_details_credit_provider')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_account_details_credit_provider')) ?>">
				<?php echo CHtml::encode($model->pba_account_details_credit_provider); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_account_details_credit_provider')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_account_details_job_title')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_account_details_job_title')) ?>">
				<?php echo CHtml::encode($model->pba_account_details_job_title); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_account_details_job_title')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_monthly_charge')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_monthly_charge')) ?>">
				<?php echo CHtml::encode($model->pba_specific_monthly_charge); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_monthly_charge')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_know_about_charge')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_know_about_charge')) ?>">
				<?php echo CHtml::encode($model->pba_specific_know_about_charge); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_know_about_charge')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_know_about_charge_specify')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_know_about_charge_specify')) ?>">
				<?php echo CHtml::encode($model->pba_specific_know_about_charge_specify); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_know_about_charge_specify')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_advise_to_take')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_advise_to_take')) ?>">
				<?php echo CHtml::encode($model->pba_specific_advise_to_take); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_advise_to_take')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_advise_to_take_specify')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_advise_to_take_specify')) ?>">
				<?php echo CHtml::encode($model->pba_specific_advise_to_take_specify); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_advise_to_take_specify')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_mobile_cover')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_mobile_cover')) ?>">
				<?php echo CHtml::encode($model->pba_specific_mobile_cover); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_mobile_cover')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_estimate_redress')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_estimate_redress')) ?>">
				<?php echo CHtml::encode($model->pba_specific_estimate_redress); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_estimate_redress')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_time_on_account_years')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_time_on_account_years')) ?>">
				<?php echo CHtml::encode($model->pba_specific_time_on_account_years); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_time_on_account_years')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_time_on_account_months')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_time_on_account_months')) ?>">
				<?php echo CHtml::encode($model->pba_specific_time_on_account_months); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_time_on_account_months')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_account_closed')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_account_closed')) ?>">
				<?php echo CHtml::encode($model->pba_specific_account_closed); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_account_closed')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_pba_still_active')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_pba_still_active')) ?>">
				<?php echo CHtml::encode($model->pba_specific_pba_still_active); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_pba_still_active')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_pba_still_active_specify')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_pba_still_active_specify')) ?>">
				<?php echo CHtml::encode($model->pba_specific_pba_still_active_specify); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_pba_still_active_specify')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_from')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_from')) ?>">
				<?php echo CHtml::encode($model->pba_specific_from); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_from')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_advised_to_take')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_advised_to_take')) ?>">
				<?php echo CHtml::encode($model->pba_specific_advised_to_take); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_advised_to_take')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_advised_to_take_specify')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_advised_to_take_specify')) ?>">
				<?php echo CHtml::encode($model->pba_specific_advised_to_take_specify); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_advised_to_take_specify')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_where_taken')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_where_taken')) ?>">
				<?php echo CHtml::encode($model->pba_specific_where_taken); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_where_taken')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_had_free_account')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_had_free_account')) ?>">
				<?php echo CHtml::encode($model->pba_specific_had_free_account); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_had_free_account')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_held_another_PBA')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_held_another_PBA')) ?>">
				<?php echo CHtml::encode($model->pba_specific_held_another_PBA); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_held_another_PBA')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_held_another_PBA_specify')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_held_another_PBA_specify')) ?>">
				<?php echo CHtml::encode($model->pba_specific_held_another_PBA_specify); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_held_another_PBA_specify')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_account_benefits')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_account_benefits')) ?>">
				<?php echo CHtml::encode($model->pba_specific_account_benefits); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_account_benefits')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_account_benefits_reason')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_account_benefits_reason')) ?>">
				<?php echo CHtml::encode($model->pba_specific_account_benefits_reason); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_account_benefits_reason')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_missold_reason')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_missold_reason')) ?>">
				<?php echo CHtml::encode($model->pba_specific_missold_reason); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_missold_reason')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_other_specific')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_other_specific')) ?>">
				<?php echo CHtml::encode($model->pba_specific_other_specific); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_other_specific')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_cancelled_specific')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_cancelled_specific')) ?>">
				<?php echo CHtml::encode($model->pba_specific_cancelled_specific); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_cancelled_specific')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_requirements_not_mentioned_specific')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_requirements_not_mentioned_specific')) ?>">
				<?php echo CHtml::encode($model->pba_specific_requirements_not_mentioned_specific); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_requirements_not_mentioned_specific')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_exclusion_not_explained_specific')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_exclusion_not_explained_specific')) ?>">
				<?php echo CHtml::encode($model->pba_specific_exclusion_not_explained_specific); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_exclusion_not_explained_specific')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_benefits_used')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_benefits_used')) ?>">
				<?php echo CHtml::encode($model->pba_specific_benefits_used); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_benefits_used')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_home_emergency_specific')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_home_emergency_specific')) ?>">
				<?php echo CHtml::encode($model->pba_specific_home_emergency_specific); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_home_emergency_specific')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_registered_benefits')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_registered_benefits')) ?>">
				<?php echo CHtml::encode($model->pba_specific_registered_benefits); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_registered_benefits')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_registered_benefits_specify')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_registered_benefits_specify')) ?>">
				<?php echo CHtml::encode($model->pba_specific_registered_benefits_specify); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_registered_benefits_specify')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_annual_review')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_annual_review')) ?>">
				<?php echo CHtml::encode($model->pba_specific_annual_review); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_annual_review')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_tcf')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_tcf')) ?>">
				<?php echo CHtml::encode($model->pba_specific_tcf); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_tcf')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_uk_residents')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_uk_residents')) ?>">
				<?php echo CHtml::encode($model->pba_specific_uk_residents); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_uk_residents')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_uk_gp')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_uk_gp')) ?>">
				<?php echo CHtml::encode($model->pba_specific_uk_gp); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_uk_gp')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_driving_license')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_driving_license')) ?>">
				<?php echo CHtml::encode($model->pba_specific_driving_license); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_driving_license')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_armed_forces')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_armed_forces')) ?>">
				<?php echo CHtml::encode($model->pba_specific_armed_forces); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_armed_forces')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_armed_forces_specify')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_armed_forces_specify')) ?>">
				<?php echo CHtml::encode($model->pba_specific_armed_forces_specify); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_armed_forces_specify')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_value_for_money')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_value_for_money')) ?>">
				<?php echo CHtml::encode($model->pba_specific_value_for_money); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_value_for_money')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_welcome_pack_received')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_welcome_pack_received')) ?>">
				<?php echo CHtml::encode($model->pba_specific_welcome_pack_received); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_welcome_pack_received')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_sign_TC')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_sign_TC')) ?>">
				<?php echo CHtml::encode($model->pba_specific_sign_TC); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_sign_TC')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_travel_cover')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_travel_cover')) ?>">
				<?php echo CHtml::encode($model->pba_specific_travel_cover); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_travel_cover')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_health_specific')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_health_specific')) ?>">
				<?php echo CHtml::encode($model->pba_specific_health_specific); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_health_specific')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_holiday_pattern_first')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_holiday_pattern_first')) ?>">
				<?php echo CHtml::encode($model->pba_specific_holiday_pattern_first); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_holiday_pattern_first')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_holiday_pattern_second')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_holiday_pattern_second')) ?>">
				<?php echo CHtml::encode($model->pba_specific_holiday_pattern_second); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_holiday_pattern_second')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_holiday_pattern_third')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_holiday_pattern_third')) ?>">
				<?php echo CHtml::encode($model->pba_specific_holiday_pattern_third); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_holiday_pattern_third')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_declined_claim_specify')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_declined_claim_specify')) ?>">
				<?php echo CHtml::encode($model->pba_specific_declined_claim_specify); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_declined_claim_specify')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('pba_specific_keep_insurance_sold')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('pba_specific_keep_insurance_sold')) ?>">
				<?php echo CHtml::encode($model->pba_specific_keep_insurance_sold); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('pba_specific_keep_insurance_sold')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('over_3_hours_delay')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('over_3_hours_delay')) ?>">
				<?php echo CHtml::encode($model->over_3_hours_delay); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('over_3_hours_delay')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('within_last_6_years')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('within_last_6_years')) ?>">
				<?php echo CHtml::encode($model->within_last_6_years); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('within_last_6_years')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('techinal_airline_fault')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('techinal_airline_fault')) ?>">
				<?php echo CHtml::encode($model->techinal_airline_fault); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('techinal_airline_fault')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('flew_with_airlines_agreed')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('flew_with_airlines_agreed')) ?>">
				<?php echo CHtml::encode($model->flew_with_airlines_agreed); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('flew_with_airlines_agreed')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('ever_made_claim_before')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('ever_made_claim_before')) ?>">
				<?php echo CHtml::encode($model->ever_made_claim_before); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('ever_made_claim_before')))); ?>
			</td>
		</tr>
		


		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('happy_to_claim')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('happy_to_claim')) ?>">
				<?php echo CHtml::encode($model->happy_to_claim); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('happy_to_claim')))); ?>
			</td>
		</tr>
		


		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('time_to_talk')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('time_to_talk')) ?>">
				<?php echo CHtml::encode($model->time_to_talk); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('time_to_talk')))); ?>
			</td>
		</tr>
		

		<tr>
			<td width="300">
				<b><?php echo CHtml::encode($model->getAttributeLabel('reason_for_delay')); ?>:</b>
			</td>
			<td  id="a<?php echo md5($model->getAttributeLabel('reason_for_delay')) ?>">
				<?php echo CHtml::encode($model->reason_for_delay); ?>
			</td>
			<td width="100">
				<?php echo CHtml::button('Copy', array('class'=>'btn','data-clipboard-target'=>'#a'.md5($model->getAttributeLabel('reason_for_delay')))); ?>
			</td>
		</tr>
	</table>	



</div>
