<?php

namespace wcs; // or your own namespace

class KataExemple
{
    public static function action($value)
    {
       $result = [0, 0];
       foreach ($value as $number){
           if($number > 0){
               $result[0] += $number;
           }
           else {
               $result[1] += $number;
           }
       }
       return $result;
    }
}




