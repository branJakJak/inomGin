<?php

class SubmitFormController extends Controller
{
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', 
		);
	}
	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',
				'actions'=>array('index'),
				'users'=>array('*'),
			),
			array('deny',
				'users'=>array('*'),
			),
		);
	}
	public function actionIndex()
	{
		if (Yii::app()->request->isPostRequest) {
	        $mainFormHelper = new MainFormHelper();
	        $mainLeadObj = $mainFormHelper->setFormValToObj($_POST);
	        $mainLeadObj->user_id = Yii::app()->user->id;
	        if ($mainLeadObj->save()) {
	        	Yii::app()->user->setFlash("success","Success! Lead saved");
	        }else{
				Yii::app()->user->setFlash("error",CHtml::errorSummary($mainLeadObj));
	        }
		}
		$this->redirect(array('/site/index'));
	}


}