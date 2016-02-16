<?php

class m160215_191536_add_ml_specific_col extends CDbMigration
{
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		$this->addColumn("tbl_gin", "ml_specific","text");
	}
	public function safeDown()
	{
		$this->dropColumn("tbl_gin", "ml_specific");
	}
}