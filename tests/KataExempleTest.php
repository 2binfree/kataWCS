<?php

namespace wcs\tests;

class KataExempleTest extends \PHPUnit_Framework_TestCase
{
    public function testFizz() {
        $this->assertEquals(["positive" => 0, "negative" => -13] , \wcs\KataExemple::action([-3, -5, -1, -1, -2, -1]));
    }

    public function testFizz2() {
        $this->assertEquals(["positive" => 13, "negative" => 0] , \wcs\KataExemple::action([3, 5, 1, 1, 2, 1]));
    }

    public function testFizz3() {
        $this->assertEquals(["positive" => 8, "negative" => -5] , \wcs\KataExemple::action([-3, 5, 1, 1, -2, 1]));
    }

    public function testFizz4() {
        $this->assertEquals(["positive" => 10,  "negative" => -3] , \wcs\KataExemple::action([3, 5, 1, -1, -2, 1]));
    }
}