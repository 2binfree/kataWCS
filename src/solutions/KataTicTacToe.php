<?php

namespace wcs; // or your own namespace

class KataTicTacToe
{
    public static function action($grid, $size, $scoreToWin)
    {
        for ($x = 0; $x < $size; $x++) {
            $playerH = 0;
            $playerV = 0;
            $scoreH = 1;
            $scoreV = 1;
            for ($y = 0; $y < $size; $y++) {
                $cell = $grid[$x][$y];
                if ($playerH === $cell && $playerH !== 0) {
                    $scoreH++;
                    if ($scoreH === $scoreToWin) {
                        return $playerH;
                    }
                } else {
                    $playerH = $cell;
                    $scoreH = 1;
                }
                $cell = $grid[$y][$x];
                if ($playerV === $cell && $playerV !== 0) {
                    $scoreV++;
                    if ($scoreV === $scoreToWin) {
                        return $playerV;
                    }
                } else {
                    $playerV = $cell;
                    $scoreV = 1;
                }
            }
        }
        for ($x = $size - $scoreToWin; $x >= 0; $x--) {
            $playerL = 0;
            $playerR = 0;
            $scoreL = 1;
            $scoreR = 1;
            for ($y = 0; $y < $size - $x; $y++) {
                $cell = $grid[$y + $x][$y];
                if ($playerL === $cell && $playerL !== 0) {
                    $scoreL++;
                    if ($scoreL === $scoreToWin) {
                        return $playerL;
                    }
                } else {
                    $playerL = $cell;
                    $scoreL = 1;
                }
                $cell = $grid[$size - ($y + $x) - 1][$y];
                if ($playerR === $cell && $playerR !== 0) {
                    $scoreR++;
                    if ($scoreR === $scoreToWin) {
                        return $playerR;
                    }
                } else {
                    $playerR = $cell;
                    $scoreR = 1;
                }
            }
        }
        return false;
    }
}




