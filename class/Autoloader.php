<?php
/**
 * Autoloader.php
 *
 * User: hauke
 * Date: 22.02.12 21:55
 */
class Autoloader
{
    /** @var Autoloader */
    private static $_instance = null;

    /**
     * Register the Autoloader.
     *
     * @static
     */
    public static function register()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new Autoloader();
            spl_autoload_register(array(self::$_instance, 'load'));
        }
    }

    /**
     * Load a class by it's name.
     *
     * @param string $class
     */
    private function load($class)
    {
        $file = __DIR__ . '/' . $class . '.php';
        echo 'Loading ' . $file . "\n";
        if (file_exists($file)) {
            include $file;
        }
    }
}
