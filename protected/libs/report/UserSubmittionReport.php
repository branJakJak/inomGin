<?php
/**
 * Created by JetBrains PhpStorm.
 * User: kevin
 * Date: 2/1/16
 * Time: 7:44 PM
 * To change this template use File | Settings | File Templates.
 */

class UserSubmittionReport {
    /**
     * @return array Returns array containing user and its submitted lead
     */
    public function getReport(){
    	$finalReport = [];
        /*get all agents*/
        $agentsUsername = ["thomasgriffiths", "jamiemorris", "lukeperry", "Christhyers","gemma","tmccay"];
        foreach ($agentsUsername as $key => $currentUsername) {
        	$userModel = User::model()->findByAttributes(array('username'=>$currentUsername));
        	if ($userModel) {
        		$criteria = new CDbCriteria;
        		$criteria->compare("user_id",$userModel->id);
        		$count = MainLeadModel::model()->count($criteria);
        		$finalReport[] = array($userModel,$count);
        	}
        }
        return $finalReport;
    }
}