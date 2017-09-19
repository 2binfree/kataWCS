<?php

namespace wcs; // or your own namespace

class KataArraySum
{
    public static function action($numbers)
    {
        if (count($numbers) === 0 or !is_array($numbers)) {
            return [];
        }
        $result = [0, 0];
        foreach ($numbers as $number) {
            $result[($number > 0) ? 0 : 1] += $number;
        }
        return $result;
    }
}