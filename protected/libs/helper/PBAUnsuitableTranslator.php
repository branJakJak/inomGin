<?php


class PBAUnsuitableTranslator implements ILeadFormValueTranslator
{

    public function translate($id)
    {
        $id = trim($id);
        $id = rtrim($id);
        $id = ltrim($id);
        $idMap = array(
            "1" => "Other Bank Cover ",
            "2" => "Other Gadget Insurer ",
            "3" => "Mobile Network Cover ",
            "4" => "Home Insurance ",
            "5" => "No Mobile Phone ",
            "6" => "Over Cover Age ",
            "7" => "Doesn't Travel ",
            "8" => "Pre Existing Condition",
            "9" => "Sought Own Cover ",
            "10" => "High Risk Travel ",
            "11" => "Company Car ",
            "12" => "No Car ",
            "13" => "Third Party Cover ",
            "14" => "Old Car ",
            "15" => "Travels longer than 31 days ",
            "16" => "Wrongly Advised ",
            "17" => "Third Party Cover ",
            "18" => "Landlords Cover ",
            "19" => "Parents / Other Accom ",
            "20" => "Declined Claim ",
            "21" => "Declined Claim ",
            "22" => "Declined Claim ",
            "23" => "Declined Claim ",
            "24" => "No Smartphone "
        );
        if (!array_key_exists($id, $idMap)) {
            throw new Exception("Key $id doesn't exists the map");
        }
        return $idMap[$id];
    }
}