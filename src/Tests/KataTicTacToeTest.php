<?php

namespace wcs\tests;

use wcs\KataExemple;

class KataTicTacToeTest extends \PHPUnit_Framework_TestCase
{
    public function testEmpty() {
        $this->assertEquals (false, KataExemple::action([
            [
                [0], [0], [0],
            ],
            [
                [0], [0], [0],
            ],
            [
                [0], [0], [0],
            ],
        ]));
    }

    public function testNoWinner() {
        $this->assertEquals (false, KataExemple::action([
            [
                [1], [2], [2],
            ],
            [
                [2], [1], [1],
            ],
            [
                [2], [1], [2],
            ],
        ]));
    }

    public function testLeftDiagonal() {
        $this->assertEquals (1, KataExemple::action([
            [
                [1], [2], [2],
            ],
            [
                [2], [1], [2],
            ],
            [
                [2], [1], [1],
            ],
        ]));
    }

    public function testRightDiagonal() {
        $this->assertEquals (2, KataExemple::action([
            [
                [1], [2], [2],
            ],
            [
                [2], [2], [1],
            ],
            [
                [2], [1], [1],
            ],
        ]));
    }

    public function testHorizontal()
    {
        $this->assertEquals(2, KataExemple::action([
            [
                [1], [1], [2],
            ],
            [
                [2], [2], [2],
            ],
            [
                [2], [1], [1],
            ],
        ]));
    }

    public function testVertical() {
        $this->assertEquals (2, KataExemple::action([
            [
                [1], [2], [2],
            ],
            [
                [2], [1], [2],
            ],
            [
                [1], [1], [2],
            ],
        ]));
    }
}