<?php

namespace App;

class Helper
{
    public static function array_ucfirst(array $arr)
    {
        return array_map(function($val) {
            return ucfirst(strtolower($val));
        }, $arr);
    }
}
