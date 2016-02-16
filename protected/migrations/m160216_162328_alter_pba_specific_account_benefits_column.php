<?php

class m160216_162328_alter_pba_specific_account_benefits_column extends CDbMigration
{
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		$this->alterColumn("tbl_gin", "pba_specific_account_benefits","text");
		$this->alterColumn("tbl_gin", "pba_specific_account_benefits_reason","text");
	}

	public function safeDown()
	{
        $this->alterColumn("tbl_gin", "pba_specific_account_benefits","string");
        $this->alterColumn("tbl_gin", "pba_specific_account_benefits_reason","string");
	}
}