<?php

class MayaConverter
{

    private $mayaNumber;
    private $valueNumber;
    private $number1;
    private $number2;
    private $dictionary;
    private $convert;
    private $operation;

    public function __construct($strMaya)
    {
        for ($i = 0; $i < 20; $i++) {
            $index = md5($strMaya[$i]);
            $this->dictionary[$index] = array("maya" => $strMaya[$i], "value" => $i);
            $this->convert[$i] = $strMaya[$i];
        }
    }

    public function getNumberValue($strMayaNumber)
    {
        $values = $this->getAllNumberValue($strMayaNumber);
        $pow = count($values) - 1;
        $total = 0;
        foreach ($values as $value) {
            $total += $value * (int)(bcpow(20, $pow));
            $pow--;
        }
        return $total;
    }

    public function getMayaValue()
    {
        $values = array();
        $b20 = base_convert($this->valueNumber, 10, 20);
        for ($i=0; $i<strlen($b20); $i++){
            if (false === strpos("0123456789", $b20[$i])){
                $values[] = ord(strtoupper($b20[$i])) - 55;
            } else {
                $values[] = (int)$b20[$i];
            }
        }

        $mayaNumber = "";
        foreach ($values as $value) {
            $mayaNumber .= $this->convert[$value];
        }
        return $mayaNumber;
    }

    public function getAllNumberValue($strMayaNumber)
    {
        $result = array();
        for ($i = 0; $i < strlen($strMayaNumber); $i += 16) {
            $strMaya = substr($strMayaNumber, $i, 16);
            $result[] = $this->dictionary[md5($strMaya)]["value"];
        }
        return $result;
    }

    public function setNumber1($strMaya)
    {
        $this->number1 = $this->getNumberValue($strMaya);
    }

    public function setNumber2($strMaya)
    {
        $this->number2 = $this->getNumberValue($strMaya);
    }

    public function setOperation($operation)
    {
        $this->operation = $operation;
    }

    public function compute()
    {
        switch ($this->operation) {
            case "+":
                $this->valueNumber = $this->number1 + $this->number2;
                break;
            case "-":
                $this->valueNumber = $this->number1 - $this->number2;
                break;
            case "/":
                $this->valueNumber = $this->number1 / $this->number2;
                break;
            case "*":
                $this->valueNumber = $this->number1 * $this->number2;
                break;
        }
    }
}

$input = array (
    0 => '.oo.o..o.oo.....',
    1 => 'o...............',
    2 => 'oo..............',
    3 => 'ooo.............',
    4 => 'oooo............',
    5 => '....____........',
    6 => 'o...____........',
    7 => 'oo..____........',
    8 => 'ooo.____........',
    9 => 'oooo____........',
    10 => '....________....',
    11 => 'o...________....',
    12 => 'oo..________....',
    13 => 'ooo.________....',
    14 => 'oooo________....',
    15 => '....____________',
    16 => 'o...____________',
    17 => 'oo..____________',
    18 => 'ooo.____________',
    19 => 'oooo____________',
);
$maya1 = "o...................________....oo..____________....____........";
$maya2 = "oooo............ooo.____________oo..________........________....oo..________....";
$operator = "*";
$maya = new MayaConverter($input);
$maya->setNumber1($maya1);
$maya->setNumber2($maya2);
$maya->setOperation($operator);
$maya->compute();
$result = $maya->getMayaValue();

for ($j=0; $j<strlen($result); $j+=4){
    echo substr($result, $j, 4) . "\n";
}




