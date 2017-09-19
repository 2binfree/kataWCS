<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 14/03/17
 * Time: 16:44
 */

namespace wcs;


class KataArraySumTest extends \PHPUnit_Framework_TestCase
{
    public function test1() {
        $this->assertEquals([0, -13], \wcs\KataExemple::action([-3, -5, -1, -1, -2, -1]));
    }

    public function test2() {
        $this->assertEquals([13, 0], \wcs\KataExemple::action([3, 5, 1, 1, 2, 1]));
    }

    public function test3() {
        $this->assertEquals([8, -5], \wcs\KataExemple::action([-3, 5, 1, 1, -2, 1]));
    }

    public function test4() {
        $this->assertEquals([10, -3], \wcs\KataExemple::action([3, 5, 1, -1, -2, 1]));
    }

    public function test5() {
        $this->assertEquals ([], KataExemple::action([]));
    }

    public function test6() {
        $this->assertEquals ([], KataExemple::action("bonjour"));
    }
}