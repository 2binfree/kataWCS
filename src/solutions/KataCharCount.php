<?php

namespace wcs; // or your own namespace


class KataCharCount
{
    public static function action($str)
    {
        $result = array();
        $str = strtolower($str);
        for($i = 0; $i < strlen($str); $i++){
            if (preg_match("/^[a-z]+$/", $str[$i])) {
                if (!isset($result[$str[$i]])){
                    $result[$str[$i]] = 1;
                } else {
                    $result[$str[$i]]++;
                }
            }
        }
        arsort($result);
        return $result;
    }
}
