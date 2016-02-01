<?php


class PPIReasonTranslator implements ILeadFormValueTranslator
{
    public function translate($id)
    {
        $id = trim($id);
        $id = rtrim($id);
        $id = ltrim($id);
        $idMap = array(
            "1" => "Felt Coerced / Pressured",
            "2" => "Didn't know there was PPI",
            "3" => "Told it was complusory",
            "4" => "Told it would assist credit",
            "5" => "Had alternative cover",
            "6" => "Unqualified salesperson",
            "7" => "Insufficient cover",
            "8" => "Insufficient term",
            "9" => "Medical Condition",
            "10" => "Previously Offered insufficient refund",
            "11" => "PPI Cost wasnt quoted",
            "12" => "No T&amp;C explanation",
            "13" => "Over 70 when policy started"
        );
        if (!array_key_exists($id, $idMap)) {
            throw new Exception("Key $id doesn't exists the map");
        }
        return $idMap[$id];
    }
}