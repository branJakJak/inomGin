<?php
/**
 * Created by JetBrains PhpStorm.
 * User: kevin
 * Date: 1/29/16
 * Time: 12:55 AM
 * To change this template use File | Settings | File Templates.
 */

class MainFormHelper
{
    public function setFormValToObj($postData)
    {
        $mainLeadObj = new MainLeadModel();
        $mainLeadObj->closer = @$postData['closer'];
        $mainLeadObj->policy_holder_1_title = @$postData['title'];
        $mainLeadObj->policy_holder_2_title = @$postData['2_title'];
        $mainLeadObj->policy_holder_1_forename = @$postData['forename'];
        $mainLeadObj->policy_holder_2_forename = @$postData['2_forename'];
        $mainLeadObj->policy_holder_1_surname = @$postData['surname'];
        $mainLeadObj->policy_holder_2_surname = @$postData['2_surname'];
        $mainLeadObj->policy_holder_1_dateOfBirth = @$postData['dob'];
        $mainLeadObj->policy_holder_2_dateOfBirth = @$postData['2_dob'];
        $mainLeadObj->policy_holder_1_email = @$postData['email'];
        $mainLeadObj->policy_holder_2_email = @$postData['2_email'];
        $mainLeadObj->policy_holder_1_dayTimeTelephone = @$postData['tel_daytime'];
        $mainLeadObj->policy_holder_1_eveningTelephone = @$postData['tel_evening'];
        $mainLeadObj->policy_holder_1_mobileTelephone = @$postData['tel_mobile'];
        $mainLeadObj->policy_holder_1_postCode = @$postData['add_postcode'];
        $mainLeadObj->policy_holder_2_postCode = @$postData['2_add_postcode'];
        $mainLeadObj->policy_holder_1_houseNumber = @$postData['add_house'];
        $mainLeadObj->policy_holder_2_houseNumber = @$postData['2_add_house'];
        $mainLeadObj->policy_holder_1_houseName = @$postData['add_2'];
        $mainLeadObj->policy_holder_2_houseName = @$postData['2_add_2'];
        $mainLeadObj->policy_holder_1_street = @$postData['add_street'];
        $mainLeadObj->policy_holder_2_street = @$postData['2_add_street'];
        $mainLeadObj->policy_holder_1_town = @$postData['add_town'];
        $mainLeadObj->policy_holder_2_town = @$postData['2_add_town'];
        $mainLeadObj->add_account = @$postData['add_account'];

        $mainLeadObj->ppi_account_details_type = @$postData['PPI-type'];
        $mainLeadObj->ppi_account_details_credit_provider = @$postData['PPI-provider'];
        $mainLeadObj->ppi_account_details_account_number = @$postData['PPI-account_no'];
        $mainLeadObj->ppi_account_details_job_title = @$postData['PPI-provider'];
        $mainLeadObj->ppi_specific_date_taken = sprintf("%s-%s-%s", @$postData['ppi_year'], @$postData['ppi_month'], @$postData['ppi_day']);
        $mainLeadObj->ppi_specific_where_applied = @$postData['ppi_applied'];
        $mainLeadObj->ppi_specific_employment_status_then = @$postData['emp_then'];
        $mainLeadObj->ppi_specific_employment_status_now = @$postData['emp_now'];
        $mainLeadObj->ppi_specific_claimed = @$postData['ppi_claimed'];

        $mainLeadObj->pba_account_details_type = @$postData['PBA-type'];
        $mainLeadObj->pba_account_details_credit_provider = @$postData['PBA-provider'];
        $mainLeadObj->pba_account_details_account_number = @$postData['PBA-account_no'];
        $mainLeadObj->pba_account_details_job_title = @$postData['PBA-job_title'];
        $mainLeadObj->pba_specific_monthly_charge = @$postData['pba_charge'];
        $mainLeadObj->pba_specific_time_on_account_years = @$postData['pba_years'];
        $mainLeadObj->pba_specific_time_on_account_months = @$postData['pba_months'];
        if ((@$postData['pba_closed'] !== null) && !empty($postData['pba_closed'])) {
            $mainLeadObj->pba_specific_account_closed = implode("|", @$postData['pba_closed'] );
        }

        $mainLeadObj->pba_specific_pba_still_active = @$postData['pba_open'];
        $mainLeadObj->pba_specific_pba_still_active_specify = @$postData['ope_specific'];
        $mainLeadObj->pba_specific_know_about_charge = @$postData['pba_notice'];
        $mainLeadObj->pba_specific_know_about_charge_specify = @$postData['ntc_specific'];

        $mainLeadObj->pba_specific_from = sprintf("%s-%s-%s", @$postData['pba_year'], @$postData['pba_month'], @$postData['pba_day']);
        $mainLeadObj->pba_specific_advise_to_take = @$postData['pba_advice'];
        $mainLeadObj->pba_specific_advised_to_take_specify = @$postData['adv_specific'];

        $mainLeadObj->pba_specific_where_taken = @$postData['pba_how'];
        $mainLeadObj->pba_specific_had_free_account = @$postData['pba_free'];

        $mainLeadObj->pba_specific_held_another_PBA = @$postData['pba_others'];
        $mainLeadObj->pba_specific_held_another_PBA_specify = @$postData['othacc_specific'];

        if ((@$postData['pba_benefits'] !== null && !empty($postData['pba_benefits']))) {
            $mainLeadObj->pba_specific_account_benefits = implode("|", @$postData['pba_benefits']);
        }
        if ((@$postData['pba_reason'] !== null) && !empty($postData['pba_reason'])) {
            $mainLeadObj->pba_specific_account_benefits_reason = implode("|", @$postData['pba_reason']);
        }

        $mainLeadObj->pba_specific_missold_reason = @$postData['pba_specific_missold_reason'];

        $mainLeadObj->pba_specific_other_specific = @$postData['othben_specific'];
        $mainLeadObj->pba_specific_cancelled_specific = @$postData['ca_specific'];
        $mainLeadObj->pba_specific_requirements_not_mentioned_specific = @$postData['re_specific'];
        $mainLeadObj->pba_specific_exclusion_not_explained_specific = @$postData['ex_specific'];

        if ((@$postData['pba_benefits_used'] !== null) && !empty($postData['pba_benefits_used'])) {
            $mainLeadObj->pba_specific_benefits_used = implode("|", @$postData['pba_benefits_used']);
        }

        $mainLeadObj->pba_specific_home_emergency_specific = @$postData['claim_specific'];
        $mainLeadObj->pba_specific_registered_benefits = @$postData['pba_regben'];
        $mainLeadObj->pba_specific_registered_benefits_specify = @$postData['regben_specific'];
        $mainLeadObj->pba_specific_annual_review = @$postData['pba_review'];
        if ((@$postData['pba_tcf'] !== null) && !empty($postData['pba_tcf'])) {
            $mainLeadObj->pba_specific_tcf = implode("|", @$postData['pba_tcf']);
        }

        $mainLeadObj->pba_specific_uk_residents = @$postData['pba_uk_resident'];
        $mainLeadObj->pba_specific_uk_gp = @$postData['pba_ukgp'];
        $mainLeadObj->pba_specific_driving_license = @$postData['pba_driver'];
        $mainLeadObj->pba_specific_armed_forces = @$postData['pba_armed_forces'];
        $mainLeadObj->pba_specific_armed_forces_specify = @$postData['af_specific'];
        $mainLeadObj->pba_specific_value_for_money = @$postData['pba_vfm'];
        $mainLeadObj->pba_specific_welcome_pack_received = @$postData['pba_welcome'];
        $mainLeadObj->pba_specific_sign_TC = @$postData['pba_terms'];
        if ((@$postData['pba_unsuitable'] !== null) && !empty($postData['pba_unsuitable'])) {
            $mainLeadObj->pba_specific_mobile_cover = implode("|", @$postData['pba_unsuitable']);
        }
        if ((@$postData['pba_unsuitable'] !== null) && !empty($postData['pba_unsuitable'])) {
            $mainLeadObj->pba_specific_travel_cover = implode("|", @$postData['pba_unsuitable']);
        }

        $mainLeadObj->pba_specific_health_specific = @$postData['health_specific'];
        $mainLeadObj->pba_specific_holiday_pattern_first = @$postData['hols1'];
        $mainLeadObj->pba_specific_holiday_pattern_second = @$postData['hols2'];
        $mainLeadObj->pba_specific_holiday_pattern_third = @$postData['hols3'];
        $mainLeadObj->pba_specific_keep_insurance_sold = @$postData['pba_othinskeep'];

        return $mainLeadObj;
    }

}