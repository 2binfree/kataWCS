<?php

namespace wcs; // or your own namespace

class KataRandomArray
{
    public function generate()
    {
        $randArray = array();
        for ($i = 0; $i < 50; $i++) {
            $randArray[] = rand(1, 100);
        }
        rsort($randArray);
        return ($randArray);
    }
}