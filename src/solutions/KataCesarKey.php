<?php

namespace wcs; // or your own namespace

class KataExemple
{
    public static function crypt($value, $key)
    {
        $max = 122;
        $min = 32;
        $strArray = str_split($value);
        $crypted = "";
        foreach($strArray as $char){
            $ascii = ord($char);
            $newAscii = $ascii + $key;
            while ($newAscii > $max){
                $newAscii = ($newAscii - $max) + $min;
            }
            $crypted .= chr($newAscii);
        }
        return $crypted;
    }

    public static function decrypt($value, $key)
    {
        $max = 122;
        $min = 32;
        $strArray = str_split($value);
        $crypted = "";
        foreach($strArray as $char){
            $ascii = ord($char);
            $newAscii = $ascii - $key;
            while ($newAscii < $min){
                $newAscii = ($newAscii + $max) - $min;
            }
            $crypted .= chr($newAscii);
        }
        return $crypted;
    }
}