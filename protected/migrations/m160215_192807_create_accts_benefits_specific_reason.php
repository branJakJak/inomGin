<?php

class m160215_192807_create_accts_benefits_specific_reason extends CDbMigration
{
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		//other benefitst
		$this->addColumn("tbl_gin", "pba_othben","text");
	}

	public function safeDown()
	{
		$this->dropColumn("tbl_gin", "pba_othben");
	}
}