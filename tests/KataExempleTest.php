<?php

namespace wcs\tests;

use wcs\KataExemple;

class KataExempleTest extends \PHPUnit_Framework_TestCase
{
    public function test1() {
        $this->assertEquals ("", KataExemple::action(""));
    }
}