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
    public function action($rootDir, $ext = null, $level = 0)
    {
        $fd = opendir($rootDir);
        while ($file = readdir($fd))
        {
            if (is_dir($rootDir . $file)) {
                if ($file !== "." && $file !== "..") {
                    echo str_repeat(" ", $level * 4) . "[" . $rootDir . $file . "]\n";
                    $this->action($rootDir . $file . '/', $ext, $level + 1);
                }
            }
            else {
                $display = true;
                if ($ext !== null) {
                    $parts = explode(".", $file);
                    if (end($parts) !== $ext) {
                        $display = false;
                    }
                }
                if (true === $display) {
                    echo str_repeat(" ", $level * 4) . $rootDir . $file . "\n";
                }
            }
        }
        closedir($fd);
    }
}

$rec = new KataRecursif1();
$rec->action("/var/log/", "log");