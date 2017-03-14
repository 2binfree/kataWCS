<?php

namespace wcs; // or your own namespace
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 16/01/17
 * Time: 15:44
 */
use PHPUnit_Framework_TestCase;

class KataFillTest extends PHPUnit_Framework_TestCase
{
    public $input55 = array (
        array(1, 1, 1, 1, 1),
        array(1, 1, 1, 1, 1),
        array(1, 1, 1, 1, 1),
        array(1, 1, 1, 1, 1),
        array(1, 1, 1, 1, 1),
        array(1, 1, 1, 1, 1),
    );

    public $output55 = array (
        array(1, 1, 1, 1, 1),
        array(1, 2, 2, 2, 1),
        array(1, 2, 2, 2, 1),
        array(1, 2, 2, 2, 1),
        array(1, 2, 2, 2, 1),
        array(1, 1, 1, 1, 1),
    );

    public $input35 = array (
        array(1, 1, 1),
        array(1, 1, 1),
        array(1, 1, 1),
        array(1, 1, 1),
        array(1, 1, 1),
        array(1, 1, 1),
    );

    public $output35 = array (
        array(1, 1, 1),
        array(1, 2, 1),
        array(1, 2, 1),
        array(1, 2, 1),
        array(1, 2, 1),
        array(1, 1, 1),
    );

    public $inputL = array (
        array(1, 1, 1, 1, 0, 0, 0, 0, 0),
        array(1, 1, 1, 1, 0, 0, 0, 0, 0),
        array(1, 1, 1, 1, 0, 0, 0, 0, 0),
        array(1, 1, 1, 1, 0, 0, 0, 0, 0),
        array(1, 1, 1, 1, 0, 0, 0, 0, 0),
        array(1, 1, 1, 1, 1, 1, 1, 1, 1),
        array(1, 1, 1, 1, 1, 1, 1, 1, 1),
        array(1, 1, 1, 1, 1, 1, 1, 1, 1),
        array(1, 1, 1, 1, 1, 1, 1, 1, 1),
    );
 
    public $outputL = array (
        array(1, 1, 1, 1, 0, 0, 0, 0, 0),
        array(1, 2, 2, 1, 0, 0, 0, 0, 0),
        array(1, 2, 2, 1, 0, 0, 0, 0, 0),
        array(1, 2, 2, 1, 0, 0, 0, 0, 0),
        array(1, 2, 2, 1, 0, 0, 0, 0, 0),
        array(1, 2, 2, 1, 1, 1, 1, 1, 1),
        array(1, 2, 2, 2, 2, 2, 2, 2, 1),
        array(1, 2, 2, 2, 2, 2, 2, 2, 1),
        array(1, 1, 1, 1, 1, 1, 1, 1, 1),
    );
    public $inputCross = array (
        array(0, 0, 0, 1, 1, 1, 0, 0, 0),
        array(0, 0, 0, 1, 1, 1, 0, 0, 0),
        array(0, 0, 0, 1, 1, 1, 0, 0, 0),
        array(1, 1, 1, 1, 1, 1, 1, 1, 1),
        array(1, 1, 1, 1, 1, 1, 1, 1, 1),
        array(1, 1, 1, 1, 1, 1, 1, 1, 1),
        array(0, 0, 0, 1, 1, 1, 0, 0, 0),
        array(0, 0, 0, 1, 1, 1, 0, 0, 0),
        array(0, 0, 0, 1, 1, 1, 0, 0, 0),
    );
    public $outputCross = array (
        array(0, 0, 0, 1, 1, 1, 0, 0, 0),
        array(0, 0, 0, 1, 2, 1, 0, 0, 0),
        array(0, 0, 0, 1, 2, 1, 0, 0, 0),
        array(1, 1, 1, 1, 2, 1, 1, 1, 1),
        array(1, 2, 2, 2, 2, 2, 2, 2, 1),
        array(1, 1, 1, 1, 2, 1, 1, 1, 1),
        array(0, 0, 0, 1, 2, 1, 0, 0, 0),
        array(0, 0, 0, 1, 2, 1, 0, 0, 0),
        array(0, 0, 0, 1, 1, 1, 0, 0, 0),
    );

    public function test1()
    {
        $this->assertEquals($this->output55, \wcs\KataExemple::action($this->input55));
        $this->assertEquals($this->output35, \wcs\KataExemple::action($this->input35));
        $this->assertEquals($this->outputL, \wcs\KataExemple::action($this->inputL));
        $this->assertEquals($this->outputCross, \wcs\KataExemple::action($this->inputCross));
    }
}