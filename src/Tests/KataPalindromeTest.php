<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 20/12/17
 * Time: 16:51
 */

namespace wcs\Tests;


class KataExempleTest extends \PHPUnit_Framework_TestCase
{
    public function test1() {
        $this->assertEquals (true, \wcs\KataExemple::action("sas"));
        $this->assertEquals (true, \wcs\KataExemple::action("sonos"));
        $this->assertEquals (true, \wcs\KataExemple::action("serres"));
        $this->assertEquals (false, \wcs\KataExemple::action("bonjour"));
        $this->assertEquals (false, \wcs\KataExemple::action("demain"));
    }
}