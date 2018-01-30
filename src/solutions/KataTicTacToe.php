<?php

namespace wcs; // or your own namespace

class KataTicTacToe
{
    public static function action($grid, $size, $score2Win)
    {
        $size2Test = $size - $score2Win;
        for ($x = 0; $x <= $size2Test; $x++) {
            for ($y = 0; $y <= $size2Test; $y++) {
                $scoreDL = 1;
                $scoreDR = 1;
                $playerDL = false;
                $playerDR = false;
                for ($d = 0; $d < $score2Win; $d++) {
                    $cell1 = $grid[$x + $d][$y + $d];
                    if ($playerDR === $cell1 && $cell1 !== 0) {
                        $scoreDR++;
                        if ($scoreDR === $score2Win) {
                            return $playerDR;
                        }
                    } else {
                        $playerDR = $cell1;
                        $scoreDR = 1;
                    }
                    $cell2 = $grid[$x - $d + ($score2Win - 1)][$y + $d];
                    if ($playerDL === $cell2 && $cell2 !== 0) {
                        $scoreDL++;
                        if ($scoreDL === $score2Win) {
                            return $playerDL;
                        }
                    } else {
                        $playerDL = $cell2;
                        $scoreDL = 1;
                    }
                }
            }
        }
        for($x = 0; $x < $size; $x++){
            $scoreH = 1;
            $scoreV = 1;
            $playerH = false;
            $playerV = false;
            for($y = 0; $y < $size; $y++){
                if ($playerH === $grid[$x][$y] && $grid[$x][$y] !== 0){
                    $scoreH++;
                    if ($scoreH === $score2Win){
                        return $playerH;
                    }
                } else {
                    $playerH = $grid[$x][$y];
                    $scoreH = 1;
                }
                if ($playerV === $grid[$y][$x] && $grid[$y][$x] !== 0){
                    $scoreV++;
                    if ($scoreV === $score2Win){
                        return $playerV;
                    }
                } else {
                    $playerV = $grid[$y][$x];
                    $scoreV = 1;
                }
            }
        }
        return false;
    }
}




