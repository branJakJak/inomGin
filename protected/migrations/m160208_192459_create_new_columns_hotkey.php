<?php

class m160208_192459_create_new_columns_hotkey extends CDbMigration
{

	public function safeUp()
	{
        $this->addColumn("tbl_gin", "over_3_hours_delay","string");
        $this->addColumn("tbl_gin", "within_last_6_years","string");
        $this->addColumn("tbl_gin", "techinal_airline_fault","string");
        $this->addColumn("tbl_gin", "flew_with_airlines_agreed","string");//[British Airways ,Thomson , Thomas Cook , Air France , Flybe ,KLM,Monarch,Virgin Atlantic ,Jet2,EasyJet,RyanAir]
        $this->addColumn("tbl_gin", "ever_made_claim_before","string");
        $this->addColumn("tbl_gin", "happy_to_claim","string");
        $this->addColumn("tbl_gin", "time_to_talk","string");
        $this->addColumn("tbl_gin", "date_created","date");
        $this->addColumn("tbl_gin", "date_updated","date");
	}

	public function safeDown()
	{
        $this->dropColumn("tbl_gin", "over_3_hours_delay");
        $this->dropColumn("tbl_gin", "within_last_6_years");
        $this->dropColumn("tbl_gin", "techinal_airline_fault");
        $this->dropColumn("tbl_gin", "flew_with_airlines_agreed");
        $this->dropColumn("tbl_gin", "ever_made_claim_before");
        $this->dropColumn("tbl_gin", "happy_to_claim");
        $this->dropColumn("tbl_gin", "time_to_talk");
        $this->dropColumn("tbl_gin", "date_created");
        $this->dropColumn("tbl_gin", "date_updated");
    }
}