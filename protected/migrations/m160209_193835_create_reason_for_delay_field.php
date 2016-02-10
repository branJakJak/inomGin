<?php

class m160209_193835_create_reason_for_delay_field extends CDbMigration
{
    public function safeUp()
    {
        $this->addColumn("tbl_gin", "reason_for_delay","string after techinal_airline_fault");
    }

    public function safeDown()
    {
        $this->dropColumn("tbl_gin", "reason_for_delay");
    }
}