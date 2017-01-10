<?php

namespace wcs; // or your own namespace


class KataMatrix
{
    public static function action($matrix, $operator, $value)
    {
        $result = array();
        foreach($matrix as $keyRow => $row){
            foreach ($row as $keyCell => $cell){
                switch ($operator) {
                    case "+":
                        $result[$keyRow][$keyCell] = $cell + $value;
                        break;
                    case "-":
                        $result[$keyRow][$keyCell] = $cell - $value;
                        break;
                    case "/":
                        $result[$keyRow][$keyCell] = $cell / $value;
                        break;
                    case "*":
                        $result[$keyRow][$keyCell] = $cell * $value;
                        break;
                }
            }
        }
        return $result;
    }
}
