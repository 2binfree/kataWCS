<?php

namespace wcs; // or your own namespace

class KataMorse
{
    public static $morse = array(
        "-.-.--" => "!",
        "....-" => "4",
        "..--.." => "?",
        "--..--" => ",",
        ".-.-.-" => ".",
        "..---" => "2",
        "...--" => "3",
        "--..." => "7",
        "-...." => "6",
        "....." => "5",
        "---.." => "8",
        "-..." => "B",
        "----." => "9",
        ".--." => "P",
        "-----" => "0",
        "--.." => "Z",
        "-.--" => "Y",
        "-..-" => "X",
        "-.-." => "C",
        "...-" => "V",
        ".----" => "1",
        "..-." => "F",
        "...." => "H",
        ".---" => "J",
        "--.-" => "Q",
        "-..-." => "/",
        ".-.." => "L",
        "..." => "S",
        "---" => "O",
        "-.-" => "K",
        ".-." => "R",
        "..-" => "U",
        "-.." => "D",
        ".--" => "W",
        "--." => "G",
        "-." => "N",
        "--" => "M",
        ".." => "I",
        ".-" => "A",
        "-" => "T",
        "." => "E",
    );

    public function morse2Text($sentence)
    {
        $words = explode("   ", $sentence);
        $phrase = '';
        foreach($words as $word){
            $letters = explode(" ",$word);
            $result = '';
            foreach ($letters as $letter){
                $result .= self::$morse[$letter];
            }
            $phrase .= $result . " "  ;
        }
        return trim($phrase);
    }

    public static function text2Morse($value)
    {
        $text2morse = array_flip(self::$morse);

        $sentence = explode(" ", $value);
        $morsesentence ='';
        foreach ($sentence as $word){
            $letters = str_split($word);
            $morseletter ='';
            foreach ($letters as $letter){
                $morseletter .= $text2morse[$letter] . " ";
            }
            $morsesentence .= $morseletter . "  ";
        }
        return trim($morsesentence);
    }
}
