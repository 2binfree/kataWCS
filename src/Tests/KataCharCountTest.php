<?php

class KataExempleTest extends PHPUnit_Framework_TestCase
{
    public function test1()
    {
        $this->assertEquals(["a" => 1], \wcs\KataExemple::action("a"));
    }

    public function test2()
    {
        $this->assertEquals(["a" => 1], \wcs\KataExemple::action("A"));
    }

    public function test3()
    {
        $this->assertEquals(["a" => 1, "b" => 1], \wcs\KataExemple::action("ab"));
    }

    public function test4()
    {
        $this->assertEquals(["a" => 2], \wcs\KataExemple::action("aa"));
    }

    public function test5()
    {
        $this->assertEquals(["a" => 6], \wcs\KataExemple::action("aAaAaA"));
    }

    public function test6()
    {
        $this->assertEquals(["b" => 8, "a" => 6], \wcs\KataExemple::action("babababAAbBBba"));
    }

    public function test7()
    {
        $this->assertEquals(["l" => 3, "o" => 2, "h" => 1, "e" => 1, "w" => 1, "r" => 1, "d" => 1], \wcs\KataExemple::action("Hello World"));
    }

    public function test8()
    {
        $this->assertEquals(["e" => 5, "l" => 5, "s" => 4, "n" => 4, "u" => 3, "o" => 3, "v" => 3, "a" => 2, "p" => 2, "i" => 2, "t" => 1, "m" => 1, "b" => 1], \wcs\KataExemple::action("Seul, on va plus vite, ensemble, on va plus loin"));
    }

    public function test9()
    {
        $this->assertEquals(["e" => 14, "u" => 7, "t" => 7, "s" => 7, "a" => 6, "n" => 6, "i" => 5, "o" => 4, "p" => 4, "d" => 4, "r" => 3, "g" => 2, "b" => 2, "c" => 2, "m" => 2, "x" => 1], \wcs\KataExemple::action("Exige beaucoup de toi-même et attends peu des autres. Ainsi beaucoup d'ennuis te seront épargnés."));
    }
}