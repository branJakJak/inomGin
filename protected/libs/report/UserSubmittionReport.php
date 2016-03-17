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
        // $agentsUsername = ["thomasgriffiths", "jamiemorris", "lukeperry", "Christhyers","gemma","tmccay","alexdavies"];
        $agentsUsername = $this->getAgents();
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
    /**
     * Returns list of agents 
     * @return array list of agents
     */
    public function getAgents()
    {
        $agentNamesCollection = array();
        $sqlCommand = <<<EOL
        select  distinct users.*
        from users
        inner join authassignment on authassignment.userid = users.id
        where 
        authassignment.itemname = 'agents' and 
        users.superuser = false
EOL;
        $resultList = Yii::app()->db->createCommand($sqlCommand)->queryAll();
        foreach ($resultList as $key => $value) {
            $agentNamesCollection[] = $value['username'];
        }
        return $agentNamesCollection;
    }
}