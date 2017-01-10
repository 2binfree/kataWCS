<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 08/11/16
 * Time: 08:14
 */
namespace wcs; // or your own namespace

class KataUnaire
{

    public static function action($value)
    {
        $strArray = str_split($value);
        $strBin = "";
        foreach ($strArray as $char) {
            $charBin = decbin(ord($char));
            $charBin = str_pad($charBin, 7, "0", STR_PAD_LEFT);
            $strBin .= $charBin;
        }
        $len = strlen($strBin);
        $star = 0;
        $currentSymbol = "";
        $count = 0;
        $currentSymbolCount = 0;
        $unaire = "";
        while ($count < $len) {
            $currentChar = substr($strBin, $count, 1);
            if ($currentSymbol != $currentChar) {
                if ($count > 0) {
                    $unaire .= str_repeat("0", $currentSymbolCount) . " ";
                }
                $currentSymbolCount = 1;
                $unaire .= ($currentChar == "0") ? "00 " : "0 ";
                $currentSymbol = $currentChar;
            } else {
                $currentSymbolCount++;
            }
            $count++;
        }
        $unaire .= str_repeat("0", $currentSymbolCount);
        return $unaire;
    }
}

echo KataUnaire::action("Wild");