<?php

class m160210_140506_create_facilitator_role extends CDbMigration
{

    public function safeUp()
    {
        /*create new user */
        $facilitatorUserModel = new User();
        $facilitatorUserModel->username = "facilitator";
        $facilitatorUserModel->email = "facilitator@test.com";
        $facilitatorUserModel->activkey = UserModule::encrypting(microtime() . "BQ60pIEy05");
        $facilitatorUserModel->password = UserModule::encrypting("BQ60pIEy05");
        $facilitatorUserModel->superuser = 0;
        $facilitatorUserModel->status = User::STATUS_ACTIVE;

        if (!$facilitatorUserModel->save()) {
            throw new Exception("Stop!");
        }
        /**
         * @var $authManager RDbAuthManager
         */
        $authManager = Yii::app()->authManager;
        $facilitatorRlObj = $authManager->createRole("facilitator", "facilitates leads submitted by the user");
        $authManager->assign($facilitatorRlObj, $facilitatorUserModel->id);
    }

    public function safeDown()
    {
        /**
         * @var $authManager RDbAuthManager
         */
        $authManager = Yii::app()->authManager;
        $facilitatorModl = User::model()->findByAttributes(array("username" => "facilitator"));

        if ($facilitatorModl) {
            //revoke role
            $authManager->revoke("facilitator",$facilitatorModl->id);
            //delete role
            $authManager->removeAuthItem("facilitator");
        } else {
            echo "No facilitator found";
        }
    }
}