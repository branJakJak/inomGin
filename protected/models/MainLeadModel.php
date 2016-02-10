<?php

/**
 * This is the model class for table "tbl_gin".
 *
 * The followings are the available columns in table 'tbl_gin':
 * @property integer $id
 * @property integer $user_id
 * @property string $closer
 * @property string $policy_holder_1_title
 * @property string $policy_holder_1_forename
 * @property string $policy_holder_1_surname
 * @property string $policy_holder_1_dateOfBirth
 * @property string $policy_holder_1_email
 * @property string $policy_holder_1_dayTimeTelephone
 * @property string $policy_holder_1_eveningTelephone
 * @property string $policy_holder_1_mobileTelephone
 * @property string $policy_holder_1_houseNumber
 * @property string $policy_holder_1_postCode
 * @property string $policy_holder_1_houseName
 * @property string $policy_holder_1_street
 * @property string $policy_holder_1_address2
 * @property string $policy_holder_1_town
 * @property string $policy_holder_2_title
 * @property string $policy_holder_2_forename
 * @property string $policy_holder_2_surname
 * @property string $policy_holder_2_dateOfBirth
 * @property string $policy_holder_2_email
 * @property string $policy_holder_2_dayTimeTelephone
 * @property string $policy_holder_2_eveningTelephone
 * @property string $policy_holder_2_mobileTelephone
 * @property string $policy_holder_2_houseNumber
 * @property string $policy_holder_2_postCode
 * @property string $policy_holder_2_houseName
 * @property string $policy_holder_2_street
 * @property string $policy_holder_2_address2
 * @property string $policy_holder_2_town
 * @property string $add_account
 * @property string $addedAccount
 * @property string $includeFreePPIAssesment
 * @property string $ppi_account_details_type
 * @property string $ppi_account_details_account_number
 * @property string $ppi_account_details_credit_provider
 * @property string $ppi_account_details_job_title
 * @property string $ppi_specific_date_taken
 * @property string $ppi_specific_employment_status_then
 * @property string $ppi_specific_misselling_reasons
 * @property string $ppi_specific_where_applied
 * @property string $ppi_specific_employment_status_now
 * @property string $ppi_specific_claimed
 * @property string $pba_account_details_type
 * @property string $pba_account_details_account_number
 * @property string $pba_account_details_credit_provider
 * @property string $pba_account_details_job_title
 * @property double $pba_specific_monthly_charge
 * @property string $pba_specific_know_about_charge
 * @property string $pba_specific_know_about_charge_specify
 * @property string $pba_specific_advise_to_take
 * @property string $pba_specific_advise_to_take_specify
 * @property string $pba_specific_mobile_cover
 * @property string $pba_specific_estimate_redress
 * @property string $pba_specific_time_on_account_years
 * @property string $pba_specific_time_on_account_months
 * @property string $pba_specific_account_closed
 * @property string $pba_specific_pba_still_active
 * @property string $pba_specific_pba_still_active_specify
 * @property string $pba_specific_from
 * @property string $pba_specific_advised_to_take
 * @property string $pba_specific_advised_to_take_specify
 * @property string $pba_specific_where_taken
 * @property string $pba_specific_had_free_account
 * @property string $pba_specific_held_another_PBA
 * @property string $pba_specific_held_another_PBA_specify
 * @property string $pba_specific_account_benefits
 * @property string $pba_specific_account_benefits_reason
 * @property string $pba_specific_missold_reason
 * @property string $pba_specific_other_specific
 * @property string $pba_specific_cancelled_specific
 * @property string $pba_specific_requirements_not_mentioned_specific
 * @property string $pba_specific_exclusion_not_explained_specific
 * @property string $pba_specific_benefits_used
 * @property string $pba_specific_home_emergency_specific
 * @property string $pba_specific_registered_benefits
 * @property string $pba_specific_registered_benefits_specify
 * @property string $pba_specific_annual_review
 * @property string $pba_specific_tcf
 * @property string $pba_specific_uk_residents
 * @property string $pba_specific_uk_gp
 * @property string $pba_specific_driving_license
 * @property string $pba_specific_armed_forces
 * @property string $pba_specific_armed_forces_specify
 * @property string $pba_specific_value_for_money
 * @property string $pba_specific_welcome_pack_received
 * @property string $pba_specific_sign_TC
 * @property string $pba_specific_travel_cover
 * @property string $pba_specific_health_specific
 * @property string $pba_specific_holiday_pattern_first
 * @property string $pba_specific_holiday_pattern_second
 * @property string $pba_specific_holiday_pattern_third
 * @property string $pba_specific_declined_claim_specify
 * @property string $pba_specific_keep_insurance_sold
 * @property string $reason_for_delay
 *
 *
 * The followings are the available model relations:
 * @property Users $user
 */
class MainLeadModel extends CActiveRecord
{
    public $over_3_hours_delay;
    public $within_last_6_years;
    public $techinal_airline_fault;
    public $flew_with_airlines_agreed;
    public $ever_made_claim_before;
    public $happy_to_claim;
    public $time_to_talk;
    public $date_created;
    public $date_updated;
    public $reason_for_delay;

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'tbl_gin';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('user_id', 'numerical', 'integerOnly' => true),
            array('pba_specific_monthly_charge', 'numerical'),
            array(
                'closer, policy_holder_1_title, policy_holder_1_forename, policy_holder_1_surname, policy_holder_1_email, policy_holder_1_dayTimeTelephone, policy_holder_1_eveningTelephone, policy_holder_1_mobileTelephone, policy_holder_1_houseNumber, policy_holder_1_postCode, policy_holder_1_houseName, policy_holder_1_street, policy_holder_1_address2, policy_holder_1_town, policy_holder_2_title, policy_holder_2_forename, policy_holder_2_surname, policy_holder_2_email, policy_holder_2_dayTimeTelephone, policy_holder_2_eveningTelephone, policy_holder_2_mobileTelephone, policy_holder_2_houseNumber, policy_holder_2_postCode, policy_holder_2_houseName, policy_holder_2_street, policy_holder_2_address2, policy_holder_2_town, add_account, addedAccount, includeFreePPIAssesment, ppi_account_details_type, ppi_account_details_account_number, ppi_account_details_credit_provider, ppi_account_details_job_title, ppi_specific_employment_status_then, ppi_specific_misselling_reasons, ppi_specific_where_applied, ppi_specific_employment_status_now, ppi_specific_claimed, pba_account_details_type, pba_account_details_account_number, pba_account_details_credit_provider, pba_account_details_job_title, pba_specific_know_about_charge, pba_specific_know_about_charge_specify, pba_specific_advise_to_take, pba_specific_advise_to_take_specify, pba_specific_estimate_redress, pba_specific_time_on_account_years, pba_specific_time_on_account_months, pba_specific_account_closed, pba_specific_pba_still_active, pba_specific_pba_still_active_specify, pba_specific_advised_to_take, pba_specific_advised_to_take_specify, pba_specific_where_taken, pba_specific_had_free_account, pba_specific_held_another_PBA, pba_specific_held_another_PBA_specify, pba_specific_account_benefits, pba_specific_missold_reason, pba_specific_other_specific, pba_specific_cancelled_specific, pba_specific_requirements_not_mentioned_specific, pba_specific_exclusion_not_explained_specific, pba_specific_benefits_used, pba_specific_home_emergency_specific, pba_specific_registered_benefits, pba_specific_registered_benefits_specify, pba_specific_annual_review, pba_specific_uk_residents, pba_specific_uk_gp, pba_specific_driving_license, pba_specific_armed_forces, pba_specific_armed_forces_specify, pba_specific_value_for_money, pba_specific_welcome_pack_received, pba_specific_sign_TC, pba_specific_travel_cover, pba_specific_health_specific, pba_specific_holiday_pattern_first, pba_specific_holiday_pattern_second, pba_specific_holiday_pattern_third, pba_specific_declined_claim_specify, pba_specific_keep_insurance_sold , over_3_hours_delay,within_last_6_years , techinal_airline_fault , flew_with_airlines_agreed , ever_made_claim_before , happy_to_claim , time_to_talk,reason_for_delay',
                'length',
                'max' => 255
            ),
            array(
                'policy_holder_1_dateOfBirth, policy_holder_2_dateOfBirth, ppi_specific_date_taken, pba_specific_from,date_created,date_updated,pba_specific_mobile_cover,pba_specific_tcf,pba_specific_account_benefits_reason',
                'safe'
            ),
            // The following rule is used by search().
            array(
                'id, user_id, closer, policy_holder_1_title, policy_holder_1_forename, policy_holder_1_surname, policy_holder_1_dateOfBirth, policy_holder_1_email, policy_holder_1_dayTimeTelephone, policy_holder_1_eveningTelephone, policy_holder_1_mobileTelephone, policy_holder_1_houseNumber, policy_holder_1_postCode, policy_holder_1_houseName, policy_holder_1_street, policy_holder_1_address2, policy_holder_1_town, policy_holder_2_title, policy_holder_2_forename, policy_holder_2_surname, policy_holder_2_dateOfBirth, policy_holder_2_email, policy_holder_2_dayTimeTelephone, policy_holder_2_eveningTelephone, policy_holder_2_mobileTelephone, policy_holder_2_houseNumber, policy_holder_2_postCode, policy_holder_2_houseName, policy_holder_2_street, policy_holder_2_address2, policy_holder_2_town, add_account, addedAccount, includeFreePPIAssesment, ppi_account_details_type, ppi_account_details_account_number, ppi_account_details_credit_provider, ppi_account_details_job_title, ppi_specific_date_taken, ppi_specific_employment_status_then, ppi_specific_misselling_reasons, ppi_specific_where_applied, ppi_specific_employment_status_now, ppi_specific_claimed, pba_account_details_type, pba_account_details_account_number, pba_account_details_credit_provider, pba_account_details_job_title, pba_specific_monthly_charge, pba_specific_know_about_charge, pba_specific_know_about_charge_specify, pba_specific_advise_to_take, pba_specific_advise_to_take_specify, pba_specific_estimate_redress, pba_specific_time_on_account_years, pba_specific_time_on_account_months, pba_specific_account_closed, pba_specific_pba_still_active, pba_specific_pba_still_active_specify, pba_specific_from, pba_specific_advised_to_take, pba_specific_advised_to_take_specify, pba_specific_where_taken, pba_specific_had_free_account, pba_specific_held_another_PBA, pba_specific_held_another_PBA_specify, pba_specific_account_benefits, pba_specific_account_benefits_reason, pba_specific_missold_reason, pba_specific_other_specific, pba_specific_cancelled_specific, pba_specific_requirements_not_mentioned_specific, pba_specific_exclusion_not_explained_specific, pba_specific_benefits_used, pba_specific_home_emergency_specific, pba_specific_registered_benefits, pba_specific_registered_benefits_specify, pba_specific_annual_review, pba_specific_tcf, pba_specific_uk_residents, pba_specific_uk_gp, pba_specific_driving_license, pba_specific_armed_forces, pba_specific_armed_forces_specify, pba_specific_value_for_money, pba_specific_welcome_pack_received, pba_specific_sign_TC, pba_specific_travel_cover, pba_specific_health_specific, pba_specific_holiday_pattern_first, pba_specific_holiday_pattern_second, pba_specific_holiday_pattern_third, pba_specific_declined_claim_specify, pba_specific_keep_insurance_sold, over_3_hours_delay,within_last_6_years , techinal_airline_fault , flew_with_airlines_agreed , ever_made_claim_before , happy_to_claim , time_to_talk,reason_for_delay',
                'safe',
                'on' => 'search'
            ),

        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'user' => array(self::BELONGS_TO, 'Users', 'user_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'user_id' => 'User',
            'closer' => 'Closer',
            'policy_holder_1_title' => 'Policy Holder 1 Title',
            'policy_holder_1_forename' => 'Policy Holder 1 Forename',
            'policy_holder_1_surname' => 'Policy Holder 1 Surname',
            'policy_holder_1_dateOfBirth' => 'Policy Holder 1 Date Of Birth',
            'policy_holder_1_email' => 'Policy Holder 1 Email',
            'policy_holder_1_dayTimeTelephone' => 'Policy Holder 1 Day Time Telephone',
            'policy_holder_1_eveningTelephone' => 'Policy Holder 1 Evening Telephone',
            'policy_holder_1_mobileTelephone' => 'Policy Holder 1 Mobile Telephone',
            'policy_holder_1_houseNumber' => 'Policy Holder 1 House Number',
            'policy_holder_1_postCode' => 'Policy Holder 1 Post Code',
            'policy_holder_1_houseName' => 'Policy Holder 1 House Name',
            'policy_holder_1_street' => 'Policy Holder 1 Street',
            'policy_holder_1_address2' => 'Policy Holder 1 Address2',
            'policy_holder_1_town' => 'Policy Holder 1 Town',
            'policy_holder_2_title' => 'Policy Holder 2 Title',
            'policy_holder_2_forename' => 'Policy Holder 2 Forename',
            'policy_holder_2_surname' => 'Policy Holder 2 Surname',
            'policy_holder_2_dateOfBirth' => 'Policy Holder 2 Date Of Birth',
            'policy_holder_2_email' => 'Policy Holder 2 Email',
            'policy_holder_2_dayTimeTelephone' => 'Policy Holder 2 Day Time Telephone',
            'policy_holder_2_eveningTelephone' => 'Policy Holder 2 Evening Telephone',
            'policy_holder_2_mobileTelephone' => 'Policy Holder 2 Mobile Telephone',
            'policy_holder_2_houseNumber' => 'Policy Holder 2 House Number',
            'policy_holder_2_postCode' => 'Policy Holder 2 Post Code',
            'policy_holder_2_houseName' => 'Policy Holder 2 House Name',
            'policy_holder_2_street' => 'Policy Holder 2 Street',
            'policy_holder_2_address2' => 'Policy Holder 2 Address2',
            'policy_holder_2_town' => 'Policy Holder 2 Town',
            'add_account' => 'Add Account',
            'addedAccount' => 'Added Account',
            'includeFreePPIAssesment' => 'Include Free Ppiassesment',
            'ppi_account_details_type' => 'Ppi Account Details Type',
            'ppi_account_details_account_number' => 'Ppi Account Details Account Number',
            'ppi_account_details_credit_provider' => 'Ppi Account Details Credit Provider',
            'ppi_account_details_job_title' => 'Ppi Account Details Job Title',
            'ppi_specific_date_taken' => 'Ppi Specific Date Taken',
            'ppi_specific_employment_status_then' => 'Ppi Specific Employment Status Then',
            'ppi_specific_misselling_reasons' => 'Ppi Specific Misselling Reasons',
            'ppi_specific_where_applied' => 'Ppi Specific Where Applied',
            'ppi_specific_employment_status_now' => 'Ppi Specific Employment Status Now',
            'ppi_specific_claimed' => 'Ppi Specific Claimed',
            'pba_account_details_type' => 'Pba Account Details Type',
            'pba_account_details_account_number' => 'Pba Account Details Account Number',
            'pba_account_details_credit_provider' => 'Pba Account Details Credit Provider',
            'pba_account_details_job_title' => 'Pba Account Details Job Title',
            'pba_specific_monthly_charge' => 'Pba Specific Monthly Charge',
            'pba_specific_know_about_charge' => 'Pba Specific Know About Charge',
            'pba_specific_know_about_charge_specify' => 'Pba Specific Know About Charge Specify',
            'pba_specific_advise_to_take' => 'Pba Specific Advise To Take',
            'pba_specific_advise_to_take_specify' => 'Pba Specific Advise To Take Specify',
            'pba_specific_mobile_cover' => 'Pba Specific Mobile Cover',
            'pba_specific_estimate_redress' => 'Pba Specific Estimate Redress',
            'pba_specific_time_on_account_years' => 'Pba Specific Time On Account Years',
            'pba_specific_time_on_account_months' => 'Pba Specific Time On Account Months',
            'pba_specific_account_closed' => 'Pba Specific Account Closed',
            'pba_specific_pba_still_active' => 'Pba Specific Pba Still Active',
            'pba_specific_pba_still_active_specify' => 'Pba Specific Pba Still Active Specify',
            'pba_specific_from' => 'Pba Specific From',
            'pba_specific_advised_to_take' => 'Pba Specific Advised To Take',
            'pba_specific_advised_to_take_specify' => 'Pba Specific Advised To Take Specify',
            'pba_specific_where_taken' => 'Pba Specific Where Taken',
            'pba_specific_had_free_account' => 'Pba Specific Had Free Account',
            'pba_specific_held_another_PBA' => 'Pba Specific Held Another Pba',
            'pba_specific_held_another_PBA_specify' => 'Pba Specific Held Another Pba Specify',
            'pba_specific_account_benefits' => 'Pba Specific Account Benefits',
            'pba_specific_account_benefits_reason' => 'Pba Specific Account Benefits Reason',
            'pba_specific_missold_reason' => 'Pba Specific Missold Reason',
            'pba_specific_other_specific' => 'Pba Specific Other Specific',
            'pba_specific_cancelled_specific' => 'Pba Specific Cancelled Specific',
            'pba_specific_requirements_not_mentioned_specific' => 'Pba Specific Requirements Not Mentioned Specific',
            'pba_specific_exclusion_not_explained_specific' => 'Pba Specific Exclusion Not Explained Specific',
            'pba_specific_benefits_used' => 'Pba Specific Benefits Used',
            'pba_specific_home_emergency_specific' => 'Pba Specific Home Emergency Specific',
            'pba_specific_registered_benefits' => 'Pba Specific Registered Benefits',
            'pba_specific_registered_benefits_specify' => 'Pba Specific Registered Benefits Specify',
            'pba_specific_annual_review' => 'Pba Specific Annual Review',
            'pba_specific_tcf' => 'Pba Specific Tcf',
            'pba_specific_uk_residents' => 'Pba Specific Uk Residents',
            'pba_specific_uk_gp' => 'Pba Specific Uk Gp',
            'pba_specific_driving_license' => 'Pba Specific Driving License',
            'pba_specific_armed_forces' => 'Pba Specific Armed Forces',
            'pba_specific_armed_forces_specify' => 'Pba Specific Armed Forces Specify',
            'pba_specific_value_for_money' => 'Pba Specific Value For Money',
            'pba_specific_welcome_pack_received' => 'Pba Specific Welcome Pack Received',
            'pba_specific_sign_TC' => 'Pba Specific Sign Tc',
            'pba_specific_travel_cover' => 'Pba Specific Travel Cover',
            'pba_specific_health_specific' => 'Pba Specific Health Specific',
            'pba_specific_holiday_pattern_first' => 'Pba Specific Holiday Pattern First',
            'pba_specific_holiday_pattern_second' => 'Pba Specific Holiday Pattern Second',
            'pba_specific_holiday_pattern_third' => 'Pba Specific Holiday Pattern Third',
            'pba_specific_declined_claim_specify' => 'Pba Specific Declined Claim Specify',
            'pba_specific_keep_insurance_sold' => 'Pba Specific Keep Insurance Sold',
            'over_3_hours_delay' => "Over 3 hours delay",
            'within_last_6_years' => "Within last 6 years",
            'techinal_airline_fault' => "Technical/Airline Fault",
            'flew_with_airlines_agreed' => "Flew with airlines agreed",
            'ever_made_claim_before' => "Ever made claim before",
            'happy_to_claim' => "Happy to claim",
            'time_to_talk' => "Time to talk",
            'date_created' => "Date created",
            'date_updated' => "Date updated",
            'reason_for_delay' => "Reason for delay",
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search()
    {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('user_id', $this->user_id);
        $criteria->compare('closer', $this->closer, true);
        $criteria->compare('policy_holder_1_title', $this->policy_holder_1_title, true);
        $criteria->compare('policy_holder_1_forename', $this->policy_holder_1_forename, true);
        $criteria->compare('policy_holder_1_surname', $this->policy_holder_1_surname, true);
        $criteria->compare('policy_holder_1_dateOfBirth', $this->policy_holder_1_dateOfBirth, true);
        $criteria->compare('policy_holder_1_email', $this->policy_holder_1_email, true);
        $criteria->compare('policy_holder_1_dayTimeTelephone', $this->policy_holder_1_dayTimeTelephone, true);
        $criteria->compare('policy_holder_1_eveningTelephone', $this->policy_holder_1_eveningTelephone, true);
        $criteria->compare('policy_holder_1_mobileTelephone', $this->policy_holder_1_mobileTelephone, true);
        $criteria->compare('policy_holder_1_houseNumber', $this->policy_holder_1_houseNumber, true);
        $criteria->compare('policy_holder_1_postCode', $this->policy_holder_1_postCode, true);
        $criteria->compare('policy_holder_1_houseName', $this->policy_holder_1_houseName, true);
        $criteria->compare('policy_holder_1_street', $this->policy_holder_1_street, true);
        $criteria->compare('policy_holder_1_address2', $this->policy_holder_1_address2, true);
        $criteria->compare('policy_holder_1_town', $this->policy_holder_1_town, true);
        $criteria->compare('policy_holder_2_title', $this->policy_holder_2_title, true);
        $criteria->compare('policy_holder_2_forename', $this->policy_holder_2_forename, true);
        $criteria->compare('policy_holder_2_surname', $this->policy_holder_2_surname, true);
        $criteria->compare('policy_holder_2_dateOfBirth', $this->policy_holder_2_dateOfBirth, true);
        $criteria->compare('policy_holder_2_email', $this->policy_holder_2_email, true);
        $criteria->compare('policy_holder_2_dayTimeTelephone', $this->policy_holder_2_dayTimeTelephone, true);
        $criteria->compare('policy_holder_2_eveningTelephone', $this->policy_holder_2_eveningTelephone, true);
        $criteria->compare('policy_holder_2_mobileTelephone', $this->policy_holder_2_mobileTelephone, true);
        $criteria->compare('policy_holder_2_houseNumber', $this->policy_holder_2_houseNumber, true);
        $criteria->compare('policy_holder_2_postCode', $this->policy_holder_2_postCode, true);
        $criteria->compare('policy_holder_2_houseName', $this->policy_holder_2_houseName, true);
        $criteria->compare('policy_holder_2_street', $this->policy_holder_2_street, true);
        $criteria->compare('policy_holder_2_address2', $this->policy_holder_2_address2, true);
        $criteria->compare('policy_holder_2_town', $this->policy_holder_2_town, true);
        $criteria->compare('add_account', $this->add_account, true);
        $criteria->compare('addedAccount', $this->addedAccount, true);
        $criteria->compare('includeFreePPIAssesment', $this->includeFreePPIAssesment, true);
        $criteria->compare('ppi_account_details_type', $this->ppi_account_details_type, true);
        $criteria->compare('ppi_account_details_account_number', $this->ppi_account_details_account_number, true);
        $criteria->compare('ppi_account_details_credit_provider', $this->ppi_account_details_credit_provider, true);
        $criteria->compare('ppi_account_details_job_title', $this->ppi_account_details_job_title, true);
        $criteria->compare('ppi_specific_date_taken', $this->ppi_specific_date_taken, true);
        $criteria->compare('ppi_specific_employment_status_then', $this->ppi_specific_employment_status_then, true);
        $criteria->compare('ppi_specific_misselling_reasons', $this->ppi_specific_misselling_reasons, true);
        $criteria->compare('ppi_specific_where_applied', $this->ppi_specific_where_applied, true);
        $criteria->compare('ppi_specific_employment_status_now', $this->ppi_specific_employment_status_now, true);
        $criteria->compare('ppi_specific_claimed', $this->ppi_specific_claimed, true);
        $criteria->compare('pba_account_details_type', $this->pba_account_details_type, true);
        $criteria->compare('pba_account_details_account_number', $this->pba_account_details_account_number, true);
        $criteria->compare('pba_account_details_credit_provider', $this->pba_account_details_credit_provider, true);
        $criteria->compare('pba_account_details_job_title', $this->pba_account_details_job_title, true);
        $criteria->compare('pba_specific_monthly_charge', $this->pba_specific_monthly_charge);
        $criteria->compare('pba_specific_know_about_charge', $this->pba_specific_know_about_charge, true);
        $criteria->compare('pba_specific_know_about_charge_specify', $this->pba_specific_know_about_charge_specify,
            true);
        $criteria->compare('pba_specific_advise_to_take', $this->pba_specific_advise_to_take, true);
        $criteria->compare('pba_specific_advise_to_take_specify', $this->pba_specific_advise_to_take_specify, true);
        $criteria->compare('pba_specific_mobile_cover', $this->pba_specific_mobile_cover, true);
        $criteria->compare('pba_specific_estimate_redress', $this->pba_specific_estimate_redress, true);
        $criteria->compare('pba_specific_time_on_account_years', $this->pba_specific_time_on_account_years, true);
        $criteria->compare('pba_specific_time_on_account_months', $this->pba_specific_time_on_account_months, true);
        $criteria->compare('pba_specific_account_closed', $this->pba_specific_account_closed, true);
        $criteria->compare('pba_specific_pba_still_active', $this->pba_specific_pba_still_active, true);
        $criteria->compare('pba_specific_pba_still_active_specify', $this->pba_specific_pba_still_active_specify, true);
        $criteria->compare('pba_specific_from', $this->pba_specific_from, true);
        $criteria->compare('pba_specific_advised_to_take', $this->pba_specific_advised_to_take, true);
        $criteria->compare('pba_specific_advised_to_take_specify', $this->pba_specific_advised_to_take_specify, true);
        $criteria->compare('pba_specific_where_taken', $this->pba_specific_where_taken, true);
        $criteria->compare('pba_specific_had_free_account', $this->pba_specific_had_free_account, true);
        $criteria->compare('pba_specific_held_another_PBA', $this->pba_specific_held_another_PBA, true);
        $criteria->compare('pba_specific_held_another_PBA_specify', $this->pba_specific_held_another_PBA_specify, true);
        $criteria->compare('pba_specific_account_benefits', $this->pba_specific_account_benefits, true);
        $criteria->compare('pba_specific_account_benefits_reason', $this->pba_specific_account_benefits_reason, true);
        $criteria->compare('pba_specific_missold_reason', $this->pba_specific_missold_reason, true);
        $criteria->compare('pba_specific_other_specific', $this->pba_specific_other_specific, true);
        $criteria->compare('pba_specific_cancelled_specific', $this->pba_specific_cancelled_specific, true);
        $criteria->compare('pba_specific_requirements_not_mentioned_specific',
            $this->pba_specific_requirements_not_mentioned_specific, true);
        $criteria->compare('pba_specific_exclusion_not_explained_specific',
            $this->pba_specific_exclusion_not_explained_specific, true);
        $criteria->compare('pba_specific_benefits_used', $this->pba_specific_benefits_used, true);
        $criteria->compare('pba_specific_home_emergency_specific', $this->pba_specific_home_emergency_specific, true);
        $criteria->compare('pba_specific_registered_benefits', $this->pba_specific_registered_benefits, true);
        $criteria->compare('pba_specific_registered_benefits_specify', $this->pba_specific_registered_benefits_specify,
            true);
        $criteria->compare('pba_specific_annual_review', $this->pba_specific_annual_review, true);
        $criteria->compare('pba_specific_tcf', $this->pba_specific_tcf, true);
        $criteria->compare('pba_specific_uk_residents', $this->pba_specific_uk_residents, true);
        $criteria->compare('pba_specific_uk_gp', $this->pba_specific_uk_gp, true);
        $criteria->compare('pba_specific_driving_license', $this->pba_specific_driving_license, true);
        $criteria->compare('pba_specific_armed_forces', $this->pba_specific_armed_forces, true);
        $criteria->compare('pba_specific_armed_forces_specify', $this->pba_specific_armed_forces_specify, true);
        $criteria->compare('pba_specific_value_for_money', $this->pba_specific_value_for_money, true);
        $criteria->compare('pba_specific_welcome_pack_received', $this->pba_specific_welcome_pack_received, true);
        $criteria->compare('pba_specific_sign_TC', $this->pba_specific_sign_TC, true);
        $criteria->compare('pba_specific_travel_cover', $this->pba_specific_travel_cover, true);
        $criteria->compare('pba_specific_health_specific', $this->pba_specific_health_specific, true);
        $criteria->compare('pba_specific_holiday_pattern_first', $this->pba_specific_holiday_pattern_first, true);
        $criteria->compare('pba_specific_holiday_pattern_second', $this->pba_specific_holiday_pattern_second, true);
        $criteria->compare('pba_specific_holiday_pattern_third', $this->pba_specific_holiday_pattern_third, true);
        $criteria->compare('pba_specific_declined_claim_specify', $this->pba_specific_declined_claim_specify, true);
        $criteria->compare('pba_specific_keep_insurance_sold', $this->pba_specific_keep_insurance_sold, true);
        $criteria->compare('over_3_hours_delay', $this->over_3_hours_delay, true);
        $criteria->compare('within_last_6_years', $this->within_last_6_years, true);
        $criteria->compare('techinal_airline_fault', $this->techinal_airline_fault, true);
        $criteria->compare('flew_with_airlines_agreed', $this->flew_with_airlines_agreed, true);
        $criteria->compare('ever_made_claim_before', $this->ever_made_claim_before, true);
        $criteria->compare('happy_to_claim', $this->happy_to_claim, true);
        $criteria->compare('time_to_talk', $this->time_to_talk, true);
        $criteria->compare('date_created', $this->date_created, true);
        $criteria->compare('date_updated', $this->date_updated, true);
        $criteria->compare('reason_for_delay', $this->reason_for_delay, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return MainLeadModel the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function behaviors()
    {
        return array(
            'CTimestampBehavior' => array(
                'class' => 'zii.behaviors.CTimestampBehavior',
                'createAttribute' => 'date_created',
                'updateAttribute' => 'date_updated',
            )
        );
    }
}
