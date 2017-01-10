<?php

namespace wcs; // or your own namespace

class KataTemperature
{
    public static function action($temperatures)
    {
        if (count($temperatures) > 0) {
            $nearPos = 10000;
            $nearNeg = -10000;
            $nearGlo = 10000;
            foreach ($temperatures as $temp) {
                if (abs($temp) < abs($nearGlo)) {
                    $nearGlo = $temp;
                }
                if ($temp < 0) {
                    if ($temp > $nearNeg) {
                        $nearNeg = $temp;
                    }
                } else {
                    if ($temp < $nearPos) {
                        $nearPos = $temp;
                    }
                }
            }
            if (abs($nearPos) == abs($nearNeg)) {
                return $nearPos;
            } else {
                return $nearGlo;
            }
        } else {
            return 0;
        }
    }
}
