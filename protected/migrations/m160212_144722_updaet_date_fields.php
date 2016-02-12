<?php

class m160212_144722_updaet_date_fields extends CDbMigration
{
	public function safeUp()
	{
        $this->alterColumn("tbl_gin", "date_created", "datetime");
        $this->alterColumn("tbl_gin", "date_created", "datetime");
	}

	public function safeDown()
	{
        $this->alterColumn("tbl_gin", "date_created", "date");
        $this->alterColumn("tbl_gin", "date_created", "date");
	}

}