  <?php

  class KataExempleTest extends PHPUnit_Framework_TestCase
  {
      public function testAction()
      {
          $this->assertEquals ('WILD', KataExemple::action('.-- .. .-.. -..'));
          $this->assertEquals ('WILD CODE', KataExemple::action('.-- .. .-.. -..   -.-. --- -.. .'));
      }
  }