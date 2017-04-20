<?php

namespace wcs; // or your own namespace


class KataCharCount
{
    public static function action($string)
    {
        $string = preg_replace('/[^a-z]+/', '', strtolower($string));
        foreach( count_chars($string, 1) as $letter => $nb){
            $result[chr($letter)] = $nb;
        }
        return arsort($result);
    }
}
