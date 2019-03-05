<?php

namespace App\Http\type;

class type
{
    protected static $type =
        [
            "1 series" => "1 s",
            "1007" => "10",
            "gh2" => "h2",
            "140" => "40",
            "147" => "47",
            "1500" => "500",
            "18 feet" => "feet",
            "2 series" => "series",
            "206" => "06",
            "3 series" => "series",
            "3 series cabriote" => "cabriote",
            "300c" => "c",
            "A1" => "allion",
            "avenger" => "venge",
            "lyon king" => "king",
        ];

    public static function all()
    {
        return array_keys(static::$type);
    }


}
