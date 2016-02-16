<?php

class m160215_223415_create_kept_other_insurances_after_PBA_sold_specification extends CDbMigration
{
	
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		//othins_specific
		$this->addColumn("tbl_gin", "kept_other_insurances_after_PBA_sold_specification","text");
	}
	public function safeDown()
	{
		$this->dropColumn("tbl_gin", "kept_other_insurances_after_PBA_sold_specification");
	}
}