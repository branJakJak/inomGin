<?php


class PBABenefitsTranslator implements ILeadFormValueTranslator
{
    public function translate($key)
    {
        $key = trim($key);
        $key = ltrim($key);
        $key = rtrim($key);
        $map = array(
            "1" => "RAC / AA / Breakdown Cover",
            "2" => "Mobile Cover",
            "3" => "Travel Insurance",
            "4" => "Overdraft",
            "5" => "Home Emergency Cover"
        );
        if ( !array_key_exists($key , $map)  ) {
            throw new Exception("Key $key doesn't exists in the map");
        }
        return $map[$key];
    }

}