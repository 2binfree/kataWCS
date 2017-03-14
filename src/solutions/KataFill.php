<?php

namespace wcs; // or your own namespace


class KataFill
{

    public static function action($input)
    {
        $result = array();
        for($y = 0; $y < count($input); $y++){
            $row = $input[$y];
            for ($x = 0; $x < count($row); $x++){
                $result[$y][$x] = $input[$y][$x];
                if (1 === $input[$y][$x]){
                    if (isset($input[$y][$x-1]) &&
                        isset($input[$y][$x+1]) &&
                        isset($input[$y-1][$x]) &&
                        isset($input[$y+1][$x])){
                        $ok2Fill = true;
                        for ($i = $x - 1; $i <= $x + 1; $i++){
                            for ($j = $y - 1; $j <= $y + 1; $j++){
                                if ($input[$j][$i] !== 1 ){
                                    $ok2Fill = false;
                                    break 2;
                                }
                            }
                        }
                        if (true === $ok2Fill){
                            $result[$y][$x] = 2;
                        }
                    }
                }
            }
        }
        return $result;
    }
}

