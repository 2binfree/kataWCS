<?php

namespace wcs\tests;

use wcs\KataExemple;

class KataTicTacToeTest extends \PHPUnit_Framework_TestCase
{
    public function test3Empty() {
        $this->assertEquals (false, KataExemple::action([
            [0, 0, 0],
            [0, 0, 0],
            [0, 0, 0],
        ], 3, 3));
    }

    public function test3NoWinner() {
        $this->assertEquals (false, KataExemple::action([
            [1, 2, 2],
            [2, 1, 1],
            [1, 2, 2],
        ], 3, 3));
    }

    public function test3LeftDiagonal() {
        $this->assertEquals (1, KataExemple::action([
            [1, 2, 2],
            [2, 1, 1],
            [2, 1, 1],
        ], 3, 3));
    }

    public function test3RightDiagonal() {
        $this->assertEquals (2, KataExemple::action([
            [1, 1, 2],
            [1, 2, 1],
            [2, 2, 1],
        ], 3, 3));
    }

    public function test3Horizontal()
    {
        $this->assertEquals(2, KataExemple::action([
            [1, 2, 1],
            [2, 2, 2],
            [1, 1, 2],
        ], 3, 3));
    }

    public function test3Vertical() {
        $this->assertEquals (2, KataExemple::action([
            [1, 2, 1],
            [1, 2, 2],
            [2, 2, 1],
        ], 3, 3));
    }

    public function test5Empty() {
        $this->assertEquals (false, KataExemple::action([
            [0, 0, 0, 0, 0],
            [0, 0, 0, 0, 0],
            [0, 0, 0, 0, 0],
            [0, 0, 0, 0, 0],
            [0, 0, 0, 0, 0],
        ], 5, 4));
    }

    public function test5NoWinner() {
        $this->assertEquals (false, KataExemple::action([
            [1, 2, 1, 1, 2],
            [2, 1, 2, 1, 1],
            [2, 1, 2, 2, 2],
            [1, 2, 1, 1, 1],
            [1, 1, 2, 1, 1],
        ], 5, 4));
    }

    public function test5Horizontal() {
        $this->assertEquals (2, KataExemple::action([
            [1, 2, 1, 1, 2],
            [2, 1, 2, 1, 1],
            [1, 2, 2, 2, 2],
            [1, 2, 1, 1, 1],
            [1, 1, 2, 1, 1],
        ], 5, 4));
    }

    public function test5Vertical() {
        $this->assertEquals (1, KataExemple::action([
            [2, 1, 1, 1, 2],
            [1, 1, 2, 1, 1],
            [1, 2, 1, 2, 2],
            [1, 2, 1, 1, 2],
            [1, 1, 2, 1, 2],
        ], 5, 4));
    }

    public function test5LeftDiagonal() {
        $this->assertEquals (1, KataExemple::action([
            [2, 1, 1, 1, 2],
            [1, 1, 2, 1, 1],
            [1, 1, 1, 2, 2],
            [2, 2, 1, 1, 2],
            [1, 1, 2, 1, 2],
        ], 5, 4));
    }

    public function test5RightDiagonal() {
        $this->assertEquals (2, KataExemple::action([
            [2, 1, 1, 2, 2],
            [1, 1, 2, 1, 1],
            [1, 2, 1, 2, 2],
            [2, 2, 1, 1, 2],
            [1, 1, 2, 1, 2],
        ], 5, 4));
    }
}