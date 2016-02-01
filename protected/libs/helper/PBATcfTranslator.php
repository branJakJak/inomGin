<?php


class PBATcfTranslator implements ILeadFormValueTranslator
{

    public function translate($id)
    {
        $id = trim($id);
        $id = rtrim($id);
        $id = ltrim($id);
        $idMap = array(
            "1" => "Didn't feel confident that they are dealing with firms where the fair treatment of customers is central to the corporate culture.",
            "2" => "Account wasn't designed to meet the needs of identified consumer groups and are not targeted accordingly.",
            "3" => "Not provided with clear information and kept appropriately informed before, during and after the point of sale.",
            "4" => "Advice was unsuitable and did it take account of their circumstances.",
            "5" => "Account did not perform as firms have led them to expect, and the associated service is of an unacceptable standard.",
            "6" => "Faced unreasonable post-sale barriers imposed by firms to change product, switch provider, submit a claim or make a complaint."
        );
        if (!array_key_exists($id, $idMap)) {
            throw new Exception("Key $id doesn't exists the map");
        }
        return $idMap[$id];
    }
}