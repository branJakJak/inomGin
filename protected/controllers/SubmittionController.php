<?php
/**
 * 
 */
class SubmittionController extends CController
{
	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',
				'actions'=>array('index','user','export','exportAll'),
				'roles'=>array('administrator'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', 
		);
	}
    public function actionIndex()
    {
    	/*get all user and their submittion count*/
    	$submittionReport = new UserSubmittionReport();
    	$data = $submittionReport->getReport();
    	$this->render('index',compact('data'));
    }
    public function actionUser($username)
    {
    	$userModel = User::model()->findByAttributes(array('username'=>$username));
    	if (!$userModel) {
    		throw new CHttpException(404,"Agent/user doesn't exists");
    	}
    	/*get leads submitted by this user */
    	$leadModel = new MainLeadModel;
    	$leadModel->unsetAttributes();
    	$leadModel->user_id = $userModel->id;
    	$dataprovider = $leadModel->search();
    	$this->render('user',compact('dataprovider','leadModel','userModel'));
    }
    public function actionExport($username)
    {
    	Yii::import('ext.ECSVExport.ECSVExport');
    	$dateToday = date("Y-m-d");

		$filename = 'leads-submitted-'.$username.'-'.$dateToday;
    	header("Pragma: public");
    	header("Expires: 0");
    	header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    	header("Cache-Control: private",false);
    	header("Content-Type: application/octet-stream");
    	header("Content-Disposition: attachment; filename=\"$filename.csv\";" );
    	header("Content-Transfer-Encoding: binary");

    	$userModel = User::model()->findByAttributes(array('username'=>$username));
    	if (!$userModel) {
    		throw new CHttpException(404,"Agent/user doesn't exists");
    	}
		
    	/*find all lead and export*/
		// $csv = new ECSVExport(MainLeadModel::model()->findAllByAttributes(array('user_id'=>$userModel->id)));
		$tempFileContainer = tempnam(sys_get_temp_dir(), "asd");

    	$cmd = Yii::app()->db->createCommand("SELECT * FROM tbl_gin where user_id = ".$userModel->id);
		$csv = new ECSVExport($cmd);
		$csv->setOutputFile($tempFileContainer);
		$csv->toCSV();
		echo file_get_contents($tempFileContainer);
    }
    public function actionExportAll()
    {
     	Yii::import('ext.ECSVExport.ECSVExport');
    	$dateToday = date("Y-m-d");
		$filename = 'all-leads-submitted-'.$dateToday;
    	header("Pragma: public");
    	header("Expires: 0");
    	header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    	header("Cache-Control: private",false);
    	header("Content-Type: application/octet-stream");
    	header("Content-Disposition: attachment; filename=\"$filename.csv\";" );
    	header("Content-Transfer-Encoding: binary");
    	/*find all lead and export*/
		// $csv = new ECSVExport(MainLeadModel::model()->findAllByAttributes(array('user_id'=>$userModel->id)));
		$tempFileContainer = tempnam(sys_get_temp_dir(), "asd");
    	$cmd = Yii::app()->db->createCommand("SELECT * FROM tbl_gin");
		$csv = new ECSVExport($cmd);
		$csv->setOutputFile($tempFileContainer);
		$csv->toCSV();
		echo file_get_contents($tempFileContainer);
    }
}