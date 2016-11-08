<?php

namespace wcs; // or your own namespace

class KataMatrice
{
    public static function action($matrice, $operator, $value)
    {
        $result = array();
        $rows = count($matrice);
        for ($row = 0; $row < $rows; $row++){
            $cells = count($matrice[$row]);
            for ($cell = 0; $cell < $cells; $cell++){
                switch ($operator){
                    case "+":
                        $result[$row][$cell] = $matrice[$row][$cell] + $value;
                        break;
                    case "-":
                        $result[$row][$cell] = $matrice[$row][$cell] - $value;
                        break;
                    case "/":
                        $result[$row][$cell] = $matrice[$row][$cell] / $value;
                        break;
                    case "x":
                        $result[$row][$cell] = $matrice[$row][$cell] * $value;
                        break;
                }
            }
        }
    }
}
