<?php


namespace wcs\solutions;


class KataPalindrome
{
    public static function action($value)
    {
        $size = strlen($value);
        if ($size % 2 === 0) {
            $sizeToCut = $size / 2;
        } else {
            $sizeToCut = ($size - 1) / 2;
        }
        $left = substr($value, 0, $sizeToCut);
        $right = substr($value, -$sizeToCut);
        if ($left === strrev($right)){
            return true;
        }
        return false;
    }
}