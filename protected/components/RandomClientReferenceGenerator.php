<?php


class RandomClientReferenceGenerator {
    public static function generateRandomRefence(){
        $faker = Faker\Factory::create();
        return uniqid();
    }

} 