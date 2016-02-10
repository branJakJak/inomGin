<?php


class HolidayPatternTranslator {
    public static function translator($key){
        $key = trim($key);
        $key = ltrim($key);
        $key = rtrim($key);
        $map = array(
            "11" => "Never Holidays in Europe",
            "12" => "Holidays in Europe 1-3 times a year",
            "13" => "Holidays in Europe 3+ times a year",
            "21" => "Never Holidays in Europe",
            "22" => "Holidays in Europe 1-3 times a year",
            "23" => "Holidays in Europe 3+ times a year",
            "31" => "Never Holidays in Europe",
            "32" => "Holidays in Europe 1-3 times a year",
            "33" => "Holidays in Europe 3+ times a year",
        );
        if (!array_key_exists($key, $map)) {
            throw new Exception("Key $key doesn't exists in the map");
        }
        return $map[$key];
    }
}