<?php

namespace wcs\tests;

class KataCharBeforeTest extends \PHPUnit_Framework_TestCase
{
    public function test1() {
        $this->assertEquals ("l", KataExemple::action("le"));
    }

    public function test2() {
        $this->assertEquals ("t", KataExemple::action("le temps passe vite quand on est passionné par son activité"));
    }

    public function test3() {
        $this->assertEquals ("l", KataExemple::action("le meilleur est celui qui est le moins mauvais"));
    }
    public function test4() {
        $this->assertEquals ("d", KataExemple::action("Partant d'un effort de délimitation de l'entrepreneuriat et d'une de ses figures les plus typiques -
    les enterprises nouvellement créées- sont mis au jour leurs difficultés stratégiques lors des premières années.
    L'auteur propose une revue de literature des comportements stratégiques utilisées par les firmes de moins
    de 8 ans et une description des facteurs cognitifs agissant à chaque phase de la decision stratégique.
    9 cas sont étudiés dont deux en longitudinal Une modélisation des biais et heuristiques cognitifs est
    proposée ainsi que des solutions en matières d'accompagnement spécifique"));
    }

    public function test5() {
        $this->assertEquals ("d", KataExemple::action("en tant que codeur, j'aime coder"));
    }
}