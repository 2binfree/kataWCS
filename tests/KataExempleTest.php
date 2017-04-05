<?php

namespace wcs\tests;

class KataExempleTest extends \PHPUnit_Framework_TestCase
{
    public function test1() {
        $this->assertEquals (true, \wcs\KataExemple::action('hello'));
    }
}