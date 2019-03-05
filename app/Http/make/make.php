<?php

namespace App\Http\make;

class make
{

    protected static $make = [
        "toyota" => "to",
        "nissan" => "ni",
        "honda" => "hon",
        "mitstubish" => "mit",
        "isuzu" => "isu",
        "lexus" => "le",
        "suziki" => "su",
        "mazda" => "ma",
        "hino" => "hi",
        "bmw" => "bm",
        "mercdeze" => "me",
        "rangeRover" => "ran",
        "audi" => "au",
    ];

    public static function all()
    {
        return array_keys(static::$make);
    }

}
