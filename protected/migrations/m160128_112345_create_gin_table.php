<?php

class m160128_112345_create_gin_table extends CDbMigration
{
    public function safeUp()
    {
        /*
        * Wont be putting restriction or validation at database .
        * Better validate at code level.
        * This design is shit. I should feel bad.
        */
        $this->createTable("tbl_gin", array(
            "id" => "pk",
            "user_id" => "integer",
            "closer" => "string",
            "policy_holder_1_title" => "string",
            "policy_holder_1_forename" => "string",
            "policy_holder_1_surname" => "string",
            "policy_holder_1_dateOfBirth" => "datetime",
            "policy_holder_1_email" => "string",
            "policy_holder_1_dayTimeTelephone" => "string",
            "policy_holder_1_eveningTelephone" => "string",
            "policy_holder_1_mobileTelephone" => "string",
            "policy_holder_1_houseNumber" => "string",
            "policy_holder_1_postCode" => "string",
            "policy_holder_1_houseName" => "string",
            "policy_holder_1_street" => "string",
            "policy_holder_1_address2" => "string",
            "policy_holder_1_town" => "string",

            "policy_holder_2_title" => "string",
            "policy_holder_2_forename" => "string",
            "policy_holder_2_surname" => "string",
            "policy_holder_2_dateOfBirth" => "datetime",
            "policy_holder_2_email" => "string",
            "policy_holder_2_dayTimeTelephone" => "string",
            "policy_holder_2_eveningTelephone" => "string",
            "policy_holder_2_mobileTelephone" => "string",
            "policy_holder_2_houseNumber" => "string",
            "policy_holder_2_postCode" => "string",
            "policy_holder_2_houseName" => "string",
            "policy_holder_2_street" => "string",
            "policy_holder_2_address2" => "string",
            "policy_holder_2_town" => "string",

            "add_account" => "string",

            "addedAccount" => "string",
            "includeFreePPIAssesment" => "string",


            "ppi_account_details_type" => "string",
            "ppi_account_details_account_number" => "string",
            "ppi_account_details_credit_provider" => "string",
            "ppi_account_details_job_title" => "string",


            "ppi_specific_date_taken" => "date",
            "ppi_specific_employment_status_then" => "string",
            "ppi_specific_misselling_reasons" => "string",
            "ppi_specific_where_applied" => "string",
            "ppi_specific_employment_status_now" => "string",
            "ppi_specific_claimed" => "string default 'Dont Know'",


            "pba_account_details_type" => "string",
            "pba_account_details_account_number" => "string",
            "pba_account_details_credit_provider" => "string",
            "pba_account_details_job_title" => "string",


            "pba_specific_monthly_charge" => "double",
            "pba_specific_know_about_charge" => "string default 'no'",
            "pba_specific_know_about_charge_specify" => "string",
            "pba_specific_advise_to_take" => "string default 'Dont Know'",
            "pba_specific_advise_to_take_specify" => "string",


            "pba_specific_mobile_cover" => "string",
            "pba_specific_estimate_redress" => "string",
            "pba_specific_time_on_account_years" => "string",
            "pba_specific_time_on_account_months" => "string",
            "pba_specific_account_closed" => "string",
            "pba_specific_pba_still_active" => "string",
            "pba_specific_pba_still_active_specify" => "string",
            "pba_specific_from" => "date",
            "pba_specific_advised_to_take" => "string",
            "pba_specific_advised_to_take_specify" => "string",
            "pba_specific_where_taken" => "string",
            "pba_specific_had_free_account" => "string",
            "pba_specific_held_another_PBA" => "string",
            "pba_specific_held_another_PBA_specify" => "string",
            "pba_specific_account_benefits" => "string",
            "pba_specific_account_benefits_reason" => "string",
            "pba_specific_missold_reason" => "string",
            "pba_specific_other_specific" => "string",
            "pba_specific_cancelled_specific" => "string",
            "pba_specific_requirements_not_mentioned_specific" => "string",
            "pba_specific_exclusion_not_explained_specific" => "string",
            "pba_specific_benefits_used" => "string",
            "pba_specific_home_emergency_specific" => "string",
            "pba_specific_registered_benefits" => "string",
            "pba_specific_registered_benefits_specify" => "string",
            "pba_specific_annual_review" => "string",
            "pba_specific_tcf" => "string",
            "pba_specific_uk_residents" => "string",
            "pba_specific_uk_gp" => "string",
            "pba_specific_driving_license" => "string",
            "pba_specific_armed_forces" => "string",
            "pba_specific_armed_forces_specify" => "string",
            "pba_specific_value_for_money" => "string",
            "pba_specific_welcome_pack_received" => "string",
            "pba_specific_sign_TC" => "string",
            "pba_specific_travel_cover" => "string",
            "pba_specific_health_specific" => "string",
            "pba_specific_holiday_pattern_first" => "string",
            "pba_specific_holiday_pattern_second" => "string",
            "pba_specific_holiday_pattern_third" => "string",
            "pba_specific_declined_claim_specify" => "string",
            "pba_specific_keep_insurance_sold" => "string",
            
            // "pba_specific_breakdown_cover" => "string",
            // "pba_specific_overdraft_home_emergency" => "string",
        ));
        $this->addForeignKey("user_fk", "tbl_gin", "user_id", "users", "id", "CASCADE", "CASCADE");
    }

    public function safeDown()
    {
        $this->dropForeignKey("user_fk", "tbl_gin");
        $this->dropTable("tbl_gin");
    }
}