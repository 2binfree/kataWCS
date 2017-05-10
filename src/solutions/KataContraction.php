<?php

namespace wcs; // or your own namespace

class KataContraction
{
    public static function action($value)
    {
        $array = explode(" ", $value);
        $accronym = "";
        $prevChar = "";
        $countChar = 0;
        foreach ($array as $word){
            $firstLetter = "";
            if (strlen($word) > 3 or $countChar >= 2) {
                $firstLetter = $word[0];
                $accronym .= $firstLetter . ".";
            } else if (count($array) <= 3){
                $firstLetter = $word[0];
                $accronym .= strtoupper($firstLetter) . ".";
            }
            if ($firstLetter !== ""){
                if ($firstLetter !== $prevChar){
                    $countChar = 1;
                    $prevChar = $firstLetter;
                } else {
                    $countChar++;
                    if ($countChar === 3){
                        $accronym = $firstLetter . ".3.";
                    }
                }
            }
        }
        return $accronym;
    }
}





