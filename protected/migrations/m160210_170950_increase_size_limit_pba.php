<?php

class m160210_170950_increase_size_limit_pba extends CDbMigration
{
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
        $this->alterColumn("tbl_gin", "pba_specific_mobile_cover","text");
        $this->alterColumn("tbl_gin", "pba_specific_tcf","text");
        $this->alterColumn("tbl_gin", "pba_specific_account_benefits_reason","text");
	}

	public function safeDown()
	{
        $this->alterColumn("tbl_gin", "pba_specific_mobile_cover","string");
        $this->alterColumn("tbl_gin", "pba_specific_tcf","string");
        $this->alterColumn("tbl_gin", "pba_specific_account_benefits_reason","string");
	}

}