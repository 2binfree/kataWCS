<?php

namespace wcs; // or your own namespace

class KataVowelConsonant
{
    public static function algo(){
        $totalVowels = 0;
        $totalConsonants = 0;
        $BestTotalVowels = 0;
        $BestTotalConsonants = 0;
        $BestVowelRatio = 0;
        $bestVowelWord = "";
        $bestConsonantWord = "";
        $bestVowelRatioWord = "";
        $vowelsStr = "aeiouy";

        $sentence = "Portez ce vieux whisky au juge blond qui fume";

        $words = explode(" ", strtolower($sentence));
        foreach($words as $word){
            $vowels = 0;
            $consonants = 0;
            for($i = 0; $i < strlen($word); $i++){
                if (false === strpos($vowelsStr, $word[$i])){
                    $totalConsonants++;
                    $consonants++;
                } else {
                    $totalVowels++;
                    $vowels++;
                }
            }
            if($consonants > $BestTotalConsonants){
                $BestTotalConsonants = $consonants;
                $bestConsonantWord = $word;
            }
            if($vowels > $BestTotalVowels){
                $BestTotalVowels = $vowels;
                $bestVowelWord = $word;
            }
            $ratioVowels = round($vowels / $consonants, 1);
            if($ratioVowels > $BestVowelRatio){
                $BestVowelRatio = $ratioVowels;
                $bestVowelRatioWord = $word;
            }
        }
        $result = [
            "total vowels : "           => $totalVowels,
            "total consonants : "       => $totalConsonants,
            "Best consonant word : "    => $bestConsonantWord,
            "Best vowel word : "        => $bestVowelWord,
            "Best vowel ratio : "       => $bestVowelRatioWord,
        ];

        var_dump($result);

    }
}

KataExemple::algo();
