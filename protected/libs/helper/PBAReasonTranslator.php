<?php


class PBAReasonTranslator implements ILeadFormValueTranslator
{
    public function translate($key)
    {
        $key = trim($key);
        $key = ltrim($key);
        $key = rtrim($key);
        $map = array(
            "1" => "Wasn't informed of alternative free account",
            "2" => "Told they had to have it",
            "3" => "Too old for the insurance",
            "4" => "Misled into taking the account",
            "5" => "Hiked the price and didn't tell them",
            "6" => "Added without their knowledge",
            "7" => "Tried to cancel but forced to keep it",
            "8" => "Requirements not mentioned",
            "9" => "Exclusions not satisfactorily explained",
            "10" => "Told it would improve credit rating",
            "11" => "Told would receive special interest rates",
            "12" => "Felt obliged/coerced to take the account"
        );
        if (!array_key_exists($key, $map)) {
            throw new Exception("Key $key doesn't exists in the map");
        }
        return $map[$key];
    }
}