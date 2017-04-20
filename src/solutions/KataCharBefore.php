<?php

namespace wcs; // or your own namespace

class KataCharBefore
{
    // with regex
    public static function action($value)
    {
        preg_match_all('/\D(?=e)/', $value, $matches);
        $letters = strtolower(implode('', array_values($matches[0])));
        $letters = preg_replace('/[^a-z]/', '',$letters);
        $count = count_chars($letters);
        arsort($count);
        $result = chr(key($count));
        return $result;
    }

    //without regex
    public static function action2($string)
    {
        $charBefore = $string[0];
        $statArray = array();
        for ($i = 1; $i< strlen($string); $i++){
            if (!isset($statArray[$charBefore])){
                $statArray[$charBefore] = 0;
            }
            if ($string[$i] === 'e'){
                $statArray[$charBefore]++;
            }
            $charBefore = $string[$i];
        }
        arsort($statArray);
        return key($statArray);
    }

}