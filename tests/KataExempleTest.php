  <?php

  class KataExempleTest extends PHPUnit_Framework_TestCase
  {
      public function testAction()
      {
        $this->assertEquals(true, \wcs\KataExemple::action("value"));
      }
  }
