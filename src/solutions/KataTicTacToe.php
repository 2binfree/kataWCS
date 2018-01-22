<?php

namespace wcs; // or your own namespace

class KataTicTacToe
{
    const SCORE_WIN = 3;
    const TAB_SIZE = 3;

    public static function action($value)
    {
        for ($x = 0; $x < self::TAB_SIZE; $x++) {
            $playerH = 0;
            $playerV = 0;
            $scoreH = 1;
            $scoreV = 1;
            for ($y = 0; $y < self::TAB_SIZE; $y++) {
                if ($playerH === $value[$x][$y][0] && $playerH !== 0) {
                    $scoreH++;
                    if ($scoreH === self::SCORE_WIN) {
                        return $playerH;
                    }
                } else {
                    $playerH = $value[$x][$y][0];
                }
                if ($playerV === $value[$y][$x][0] && $playerV !== 0) {
                    $scoreV++;
                    if ($scoreV === self::SCORE_WIN) {
                        return $playerV;
                    }
                } else {
                    $playerV = $value[$y][$x][0];
                }
            }
        }
        $playerL = 0;
        $playerR = 0;
        $scoreL = 1;
        $scoreR = 1;
        for ($z = 0; $z < self::TAB_SIZE; $z++) {
            if ($playerL === $value[$z][$z][0] && $playerL !== 0) {
                $scoreL++;
                if ($scoreL === self::SCORE_WIN) {
                    return $playerL;
                }
            } else {
                $playerL = $value[$z][$z][0];
            }
            if ($playerR === $value[self::TAB_SIZE - $z - 1][$z][0] && $playerR !== 0) {
                $scoreR++;
                if ($scoreR === self::SCORE_WIN) {
                    return $playerR;
                }
            } else {
                $playerR = $value[self::TAB_SIZE - $z - 1][$z][0];
            }
        }
        return false;
    }
}




