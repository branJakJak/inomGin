<?php

class m160216_191749_alter_ppi_specific_misselling_reasons extends CDbMigration
{
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		$this->alterColumn("tbl_gin", "ppi_specific_misselling_reasons","text");		
	}
	public function safeDown()
	{
        $this->alterColumn("tbl_gin", "ppi_specific_misselling_reasons","string");		
	}

}