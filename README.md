# kataStarter
##Empty kata and documentation how to set up a folder for a kata project

1. Create folders
  ```  
  mkdir kataExemple
  cd kataExemple
  mkdir tests     // unit tests
  mkdir src       // source code
  ```

2. Initialise composer
  ```
  composer init
  ```
  - fill out package name and author, default value for other fields
  - dependencies (require) : no
  - dependencies (require-dev) : yes
  - package : phpunit
  - select phpunit/phpunit into the list (index 0 in most case)
  - version : leave blank for the lasted version
  - no other package
  - confirm generation : yes

3. Install dependencies
  ```
  composer install
  ```
4. Set up autoloader : add following code to composer.json
  ```
  "autoload": {
    "psr-4": {
      "wcs\\": "src/"
    }
  }
  ```
  change 'wcs' with your specific namespace
  
5. Update autoloader
  ```
  composer dump-autoload
  ```
6. Create your first php file in src folder : KataExemple.php
  ```
  <?php
    
    namespace wcs; // or your own namespace
    
    class KataExemple
    {
        public static function action($value)
        {
          ...
        }
    }
    ```
7. Create your first phpunit file in tests folder : KataExempleTest.php
  ```
    <?php
    
    class KataExempleTest extends PHPUnit_Framework_TestCase
    {
        public function testAction()
        {
          $this->assertEquals(true, \wcs\KataExemple::action("value"));
        }
    }
  ```
8. Create phpunit configuration file in your kataExemple folder : phpunit.xml

  ```
  <?xml version="1.0" encoding="utf-8" ?>
    <phpunit colors="true" bootstrap="./vendor/autoload.php">
      <testsuite name="kata exemple testing">
        <directory>./tests</directory>
      </testsuite>
    </phpunit>
  ```
9. Test your code 
  ```
  ./vendor/bin/phpunit
  ```

10. Correct your bug ;-)

##Optionnal : configure phpstorm to run phpunit tests

1. File/settings/Plugins: Check and add if necessary phpunit plugin (code coverage and autocomplete assistant)
2. File/settings/PHP/PHPUnit:
  - check "use custom autoloader"
  - path to script : the autoload.php to the vendor directory (.../kataExemple/vendor/autoload.php)
  - check default configuration file : the phpunit.xml in your kataExemple directory
3. Create a new run/debug configuration
  - Select PHPUnit
  - Create a name
  - select directory
  - set path to your tests directory (.../kataExemple/tests)
  - OK
4. You can run (or debug if xdebug is configured) your unit tests
