<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 14/03/17
 * Time: 16:44
 */

namespace wcs;


class KataCesarKeyTest extends \PHPUnit_Framework_TestCase
{
    public function test1() {
        $this->assertEquals('Kf!dpef!5!Mzpo', \wcs\KataExemple::crypt('Je code 4 Lyon', 1));
        $this->assertEquals('Je code 4 Lyon', \wcs\KataExemple::decrypt('Kf!dpef!5!Mzpo', 1));
    }

    public function test2() {
        $this->assertEquals('Oj%htij%9%Q$ts', \wcs\KataExemple::crypt('Je code 4 Lyon', 5));
        $this->assertEquals('Je code 4 Lyon', \wcs\KataExemple::decrypt('Oj%htij%9%Q$ts', 5));
    }

    public function test3() {
        $this->assertEquals('w8M6B78MaMyLBA', \wcs\KataExemple::crypt('Je code 4 Lyon', 45));
        $this->assertEquals('Je code 4 Lyon', \wcs\KataExemple::decrypt('w8M6B78MaMyLBA', 45));
    }

}