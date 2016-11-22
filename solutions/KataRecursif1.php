<?php
/**
 * Created by PhpStorm.
 * User: ubuntu
 * Date: 22/11/16
 * Time: 08:24
 */

namespace wcs;


class KataRecursif1
{
    public function action($rootDir, $level = 0)
    {
        $fd = opendir($rootDir);
        while ($file = readdir($fd))
        {
            if (is_dir($rootDir . $file)) {
                if ($file != "." && $file != "..") {
                    echo str_repeat(" ", $level * 4) . "[" . $rootDir . $file . "]\n";
                    $this->action($rootDir . $file . '/', $level + 1);
                }
            }
            else {
                echo str_repeat(" ", $level * 4). $rootDir . $file . "\n";
            }
        }
        closedir($fd);
    }
}

$rec = new KataRecursif1();
$rec->action("/var/log/");