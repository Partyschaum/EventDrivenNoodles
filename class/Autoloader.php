<?php
/**
 * Autoloader.php
 *
 * User: hauke
 * Date: 22.02.12 21:55
 */
class Autoloader
{
    private static $_instance = null;

    public static function register()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new Autoloader();
            spl_autoload_register(array(self::$_instance, 'load'));
        }
    }

    private function load($class)
    {
        $file = __DIR__ . '/' . $class . '.php';
        echo 'Loading ' . $file . "\n";
        if (file_exists($file)) {
            include $file;
        }
    }
}
