<?php

namespace wcs; // or your own namespace

class KataStrCalc
{
    public static function action($value)
    {
        $operands = array("+", "-", "/", "*");
        $arrayValues = str_split($value, 1);

        $firstLength = array_shift($arrayValues);
        $firstNumber = array_slice($arrayValues, 0, $firstLength);
        $operand = $arrayValues[$firstLength + 1];
        $secondLength = $arrayValues[$firstLength + 2];
        $secondNumber = array_slice($arrayValues, $firstLength + 3, $secondLength);
        $firstNumber = implode("", $firstNumber);
        $secondNumber = implode("", $secondNumber);

        return eval('return ' . $firstNumber . $operands[$operand] . $secondNumber . ";");
    }
}